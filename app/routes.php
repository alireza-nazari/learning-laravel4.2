<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	return View::make('home');
// });

Route::get('/', 			'PagesController@home');
Route::get('about', 		'PagesController@about');
// Route::get('blog', 			'PagesController@blog'); because we have a posts controller now!
// Route::get('users', 		            'UsersController@index');
// Route::get('users/{username}', 		    'UsersController@show');

Route::resource('users', 'UsersController');
Route::resource('orders', 'OrdersController');
Route::resource('blog', 'PostsController');
