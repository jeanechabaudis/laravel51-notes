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
//Acceder
Route::get('/acceder', ['middleware' => 'guest', function () {
    return view('acceso.acceder');
}]);
Route::post('/acceder', 'Auth\AuthController@postLogin');
//Cerrar sesion
Route::get('/logout', 'Auth\AuthController@getLogout');
//Registrar
Route::get('/registrar', function () {
    return view('acceso.register');
});
Route::post('/registrar', 'Auth\AuthController@postRegister');
// Password reset link request routes...
Route::get('password/email', function(){
    return view('acceso.password');
});
Route::get('email', function(){
    return view('emails.template');
});
Route::post('password/email', 'Auth\PasswordController@postEmail');
// Password reset routes...
Route::get('password/reset/{token}', function($token){
    return view('acceso.reset',['token'=>$token]);
});
Route::post('password/reset', 'Auth\PasswordController@postReset');

//Aplicación
Route::group(['prefix' => 'app','middleware' => 'auth'], function () {
    Route::get('/', function ()    {
        return view('admin.index');
    });
    //Profile
    Route::get('/profile', 'UserController@index');
    Route::post('/profile/edit/{id}', 'UserController@update');
    Route::post('/profile/password', 'UserController@changePassword');
    //Notes
    Route::get('/notes', 'NoteController@index');
    Route::get('/notes/create', 'NoteController@create');
    Route::post('/notes/create', 'NoteController@store');
    Route::get('/notes/edit/{id}', 'NoteController@edit');
    Route::post('/notes/edit/{id}', 'NoteController@update');
    Route::get('/notes/destroy/{id}', 'NoteController@destroy');
});
