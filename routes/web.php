<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/token', 'HomeController@tokenget');

Route::get('/redirect', function () {
    $query = http_build_query([
        'client_id' => 'DrIQ',
        'redirect_uri' => 'http://localhost/testnhslogin/api/callback',
        'response_type' => 'code',
        'scope' =>  'openid profile',
        'state' =>  'appstate',
        'nonce' =>  'randomnonce'
    ]);
    // echo $query;exit;

    return redirect('https://auth.sandpit.signin.nhs.uk/authorize?'.$query);
})->name('get.token');