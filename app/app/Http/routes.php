<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/infos', function () {
    phpinfo();
    exit;
});

//AUTH
Route::auth();
Route::get('/home', 'HomeController@index');




## API

Route::group(['prefix' => 'api/v1'], function () {

    Route::group(['middleware'=>'jwt.auth'], function() {
        Route::resource('users', 'UserController');
    });

    Route::get('/session/token', 'SessionController@getToken');
    Route::post('/session/authenticate', 'SessionController@authenticate');


});

