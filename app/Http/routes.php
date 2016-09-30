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
    return view('admin.welcome');
});

Route::get('/acceder', function () {
    return view('acceso.acceder');
});
Route::post('/acceder', 'Auth\AuthController@postLogin');

Route::get('/registrar', function () {
    return view('acceso.register');
});
