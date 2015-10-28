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

Route::get('/', function()
{
	return View::make('home.home');
});

Route::resource('nerds', 'NerdController');
Route::resource('homes', 'HomeController');

//Route::get('dashboard', array('before' => 'auth', function()
//{
//	return View::make('dashboard');
//}));
//Route::get('/', array('before' => 'auth', 'HomeController@index'));
Route::get('/', array('before' => 'auth', 'uses' => 'HomeController@index'));
Route::get('/login', 'HomeController@login');

Route::post('/login', 'HomeController@dologin');

Route::get('logout', array(
	'as' => 'account-sign-out',
	'uses' => 'HomeController@logout'
));

//Route::get('/account/sign-out', array(
//	'as' => 'account-sign-out',
//	'uses' => 'AccountController@getSignOut'
//));


Route::get('/lession/{courseid}', array('before' => 'auth','uses' => 'HomeController@showLession'));