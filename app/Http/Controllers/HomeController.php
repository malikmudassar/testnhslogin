<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Firebase\JWT\JWT;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7;
use Webpatser\Uuid\Uuid;

class HomeController extends Controller
{
    /**
     * @var Client
     */
    public $client;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var ErrorServiceInterface
     */
    public $errorService;

    /**
     * @var string
     */
    public $nhsRootDomain;

    /**
     * @var string
     */
    public $redirectUri;

    /**
     * @var string
     */
    public $jwksEndpoint;

    /**
     * @var string
     */
    public $tokenEndpoint;

    /**
     * @var string
     */
    public $userEndpoint;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->client = new Client(['base_uri' => 'https://auth.sandpit.signin.nhs.uk']);
        $this->clientId = 'DrIQ';
        $this->nhsRootDomain = 'https://auth.sandpit.signin.nhs.uk';
        $this->redirectUri = 'http://'.$_SERVER['SERVER_NAME'].'/testnhslogin/api/callback';

        $this->jwksEndpoint = '/.well-known/jwks.json';
        $this->tokenEndpoint = '/token';
        $this->userEndpoint = '/userinfo';
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // return view('return2');

        // Sending a mocq response to mobile 

        $command="curl --location --request POST 'https://qa-driq-server.attech-ltd.com/v3/dr-iq/login_check' \
        --header 'Content-Type: application/x-www-form-urlencoded' \
        --header 'deviceid: FFFCF117-7466-4622-9351-1CF95C654268' \
        --header 'Content-Type: application/x-www-form-urlencoded' \
        --data-urlencode '_username=r.chughtai@yopmail.com' \
        --data-urlencode '_password=Ruuuuuu1@' 2>&1";
        exec($command, $output);
        echo (json_decode($output[3])->token);
        
    }

    public function callback(Request $request)
    {
        // return redirect('home');
        // Sending mock response instead
        $privateKeyFilePath='/var/www/html/testnhslogin/resources/assets/private.pem';
        if (! empty($request->get('error'))) 
        {
            abort(500, $request->get('error_description'));
        } 
        else 
        {
            // have code and state
            $code = $request->get('code');            
            $token = $this->getNewToken($request->get('code'), $privateKeyFilePath);   
            // dd($token);exit;         
            if (! empty($token)) 
            {
                $userInfo = $this->getUserData($token['access_token']);
                dd($userInfo);exit;
                $userParams = ['code' => $code, 'access_token' => $token['access_token'], 'refresh_token' => $token['refresh_token']];                
                $user = $this->login(array_merge($userInfo, $userParams));            
                return redirect()->route('home');
            }
        }        
        // abort(403, 'access denied');
    }
    /**
     * Token endpoint for obtaining a JWT using an authorisation code
     * @param string $code
     * @param string $privateKeyFilePath
     * @return array
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function getNewToken(string $code, string $privateKeyFilePath) : array
    {
        return $this->getToken(['grant_type' => 'authorization_code', 'code' => $code], $privateKeyFilePath);
    }

    /**
     * @param string $token
     * @param string $privateKeyFilePath
     * @param string|null $privateKey
     * @return array
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function refreshToken(string $token, string $privateKeyFilePath, ?string $privateKey=null) : array
    {
        return $this->getToken(['grant_type' => 'refresh_token', 'refresh_token' => $token], $privateKeyFilePath);
    }
    /**
     * @param array $params
     * @param string $privateKeyFilePath
     * @return array
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function getToken(array $params, string $privateKeyFilePath) : array
    {
        // create the formData to be sent to to the /token nhs-login endpoint
        $form_data = [
            'client_id' => $this->clientId,
            'redirect_uri' => $this->redirectUri,
            'client_assertion_type' => 'urn:ietf:params:oauth:client-assertion-type:jwt-bearer',
            'client_assertion' => $this->createAndSignBearerToken($privateKeyFilePath)
        ];
        // echo '<pre>';print_r($form_data);exit;

        // Send off the request to to the /token nhs-login endpoint using guzzle
        try {
            $response = $this->client->request('POST', $this->tokenEndpoint, ['form_params' => array_merge($params, $form_data)]);
            // dd($response);exit;
            $contents = json_decode($response->getBody()->getContents(), true);

            if (!$this->validateToken($contents)) {
                throw new \Exception('Invalid token');
            }

            return $contents;
        } catch (RequestException $exception) {
            // dd($exception);exit;
            if ($exception->hasResponse()) {
                // $message = 'AuthService::refreshToken::'.Psr7\str($exception->getResponse());
                $message=$exception->getResponse();
            } else {
                // $message = 'AuthService::refreshToken::'.Psr7\str($exception->getRequest());
                $message=$exception->getRequest();
            }
            $this->errorService->logError($message, $exception);
        } catch (\Exception $e) {
            $this->errorService->logError($e->getMessage(), $e);
        }

        return [];
    }
    /**
     * @param mixed $token
     * @return bool
     */
    public function validateToken($token) : bool
    {
        return true;
    }

    /**
     * @param string $token
     * @return array
     */
    public function getUserData(string $token) : array
    {
        if ($this->validateToken($token)) {
            try {
                $response = $this->client->request('GET', $this->userEndpoint, ['headers' => ['Authorization' => 'Bearer ' . $token]]);
                $contents = json_decode($response->getBody()->getContents(), true);
                
                return $contents;
            } catch (RequestException $exception) {
                // if ($exception->hasResponse()) {
                //     $message = 'AuthService::getUserData::'.Psr7\str($exception->getResponse());
                // } else {
                //     $message = 'AuthService::getUserData::'.Psr7\str($exception->getRequest());
                // }
                $this->errorService->logError($message, $exception);
            }
        }

        return [];
    }

    /**
     * Creates a JWT token for use in NHS digital.
     *
     * @access private
     * @param string $privateKeyFilePath Path of private key file (relative to storage/keys)
     * @param string|null $privateKey The actual string og the private key
     * @return string A signed JWT
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function createAndSignBearerToken(string $privateKeyFilePath, string $privateKey=null) : string
    {
        // Read the private key
        $privateKey = mb_convert_encoding(file_get_contents($privateKeyFilePath), 'UTF-8', 'UTF-8');

        // Set the payload for the bearer-token to be sent to the /token nhs-login endpoint
        $payload = [
            'sub' => $this->clientId,
            'iss' => $this->clientId,
            'aud' => $this->nhsRootDomain.$this->tokenEndpoint,
            'jti' => mb_convert_encoding(Uuid::generate(1), 'UTF-8', 'UTF-8'),
            'exp' => \Carbon\Carbon::now()->addMinutes(30)->timestamp
        ];

        return JWT::encode($payload, $privateKey, 'RS512');
    }
    
    
}
