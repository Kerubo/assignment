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
//the website routes
Route::get('/', function()
{
	return View::make('ebotics.index');
});
Route::get('/about', function()
{
	return View::make('ebotics.about');
});
Route::get('/ebotics', function()
{
	return View::make('ebotics.team');
});

Route::get('/contacts', function()
{
	return View::make('ebotics.contacts');
});

// Route for login page
Route::get('login', 'AuthController@loginPage');
Route::post('login', 'AuthController@login');
Route::get('signup', 'AuthController@loginPage');
Route::post('signup', 'AuthController@login');

Route::get('logout', 'AuthController@logout');
//Profile routes
Route::resource('profile', 'ProfilesController');
//
Route::resource('/user', 'UserController');
Route::controller('/home', 'HomeController');