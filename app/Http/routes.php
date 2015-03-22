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

// Public page
Route::get('/', 'WelcomeController@index');
Route::get('blog', 'BlogController@index');
Route::get('blog/{slug}', 'BlogController@show');

Route::controllers([
  'admin' => 'AdminController',
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
