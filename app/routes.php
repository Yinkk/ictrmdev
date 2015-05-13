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
	return Redirect::to('home');
});

//Front End

Route::controller('home', 'HomeController');
Route::controller('login', 'LoginController');

//Back End
Route::group(array('before' => 'auth'), function(){
	Route::controller('admin/news', 'Admin_NewsController');
	Route::controller('admin/user', 'Admin_UserController');
	Route::controller('admin', 'AdminController');
});
