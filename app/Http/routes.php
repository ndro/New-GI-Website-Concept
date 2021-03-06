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

//Route::get('/', 'WelcomeController@index');

Route::get('/', 'HomeController@getIndex');

Route::get('/home/posts', 'HomeController@getPublishedPost');
Route::get('/home/events', 'HomeController@getPublishedEvent');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
	'home' => 'HomeController',
	'zero' => 'AdminController',
	'post' => 'PostController',
	'category' => 'CategoryController',
	'event' => 'EventController',
	'search' => 'SearchController',
]);
