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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//rutas para el recurso movie
Route::resource('movie','MovieController');

//una  nueva ruta para eliminar registros con el metodo get
Route::get('movie/destroy/{id}', ['as' => 'movie/destroy', 'uses'=>'MovieController@destroy']);

//ruta para realizar busqueda de registros.
Route::post('movie/searchName', ['as' => 'movie/searchName', 'uses'=>'MovieController@searchName']);

//rutas para el recurso client
Route::resource('client','ClientController');

//una  nueva ruta para eliminar registros con el metodo get
Route::get('client/destroy/{id}', ['as' => 'client/destroy', 'uses'=>'ClientController@destroy']);

//ruta para realizar busqueda de registros.
Route::post('client/searchName', ['as' => 'client/searchName', 'uses'=>'ClientController@searchName']);