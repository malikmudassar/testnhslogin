<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Firebase\JWT\JWT;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $command="curl --location --request POST 'https://qa-driq-server.attech-ltd.com/v3/dr-iq/login_check' \
        --header 'Content-Type: application/x-www-form-urlencoded' \
        --header 'deviceid: xxxRxxx' \
        --header 'Content-Type: application/x-www-form-urlencoded' \
        --data-urlencode '_username=r.chughtai@yopmail.com' \
        --data-urlencode '_password=Ruuuuuu1@' 2>&1";
        exec($command, $output);
        echo (json_decode($output[3])->token);
        // return view('return2');
    }

    public function callback(Request $request)
    {
        
        
        return redirect('home');
        // Sending mock response instead

        // if (! empty($request->get('error'))) 
        // {
        //     abort(500, $request->get('error_description'));
        // } 
        // else 
        // {
        //     // have code and state
        //     $code = $request->get('code');            
        //     $token = $this->authService->getNewToken($request->get('code'), Config::get('nhs.private_key'));            
        //     if (! empty($token)) 
        //     {
        //         $userInfo = $this->authService->getUserData($token['access_token']);
        //         $userParams = ['code' => $code, 'access_token' => $token['access_token'], 'refresh_token' => $token['refresh_token']];                
        //         $user = $this->authService->login(array_merge($userInfo, $userParams));                
        //         return redirect()->route('dashboard');
        //     }
        // }        
        // abort(403, 'access denied');
    }

    
    public function tokenget(Request $request)
    {
        $path='/var/www/html/testnhslogin/resources/assets/';
        $privateKey =file_get_contents($path.'private.pem');
        // echo $privateKey;
        // $payload = array(
        //     "iss" => "example.org",
        //     "aud" => "example.com",
        //     "iat" => 1356999524,
        //     "nbf" => 1357000000
        // );
        $payload=array(
            'email' => 'testuserlive@demo.signin.nhs.uk',
            'password'  =>  'Passw0rd$1',            
        );

        
        $jwt = JWT::encode($payload, $privateKey, 'RS256');
        echo "Encode:\n" . print_r($jwt, true) . "\n";

        $publicKey=file_get_contents($path.'public.pem');
        $decoded = JWT::decode($jwt, $publicKey, array('RS256'));

        /*
        NOTE: This will now be an object instead of an associative array. To get
        an associative array, you will need to cast it as such:
        */

        $decoded_array = (array) $decoded;
        echo "Decode:\n<pre>" . print_r($decoded_array, true) . "\n";
    }
}
