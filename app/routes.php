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
	//Route::get('admin/system/create/year', array('as'=>'create_year', 'uses' => 'Admin_SystemController@getCreate'));
	//Route::get('admin/system/create/faculty', array('as'=>'create_faculty', 'uses' => 'Admin_SystemController@getCreate'));
	//Route::get('admin/system/create/major', array('as'=>'create_major', 'uses' => 'Admin_SystemController@getCreate'));
	
	Route::controller('admin/system/year', 'Admin_YearController');
	Route::controller('admin/system/major', 'Admin_MajorController');
	Route::controller('admin/system/faculty', 'Admin_FacultyController');
	
	Route::controller('admin/news', 'Admin_NewsController');
	Route::controller('admin/user', 'Admin_UserController');
	Route::controller('admin', 'AdminController');
});


// Route::get('test',function(){

	
// 	$user = User::find(25);

// 	return $user->role()->detach();

// });