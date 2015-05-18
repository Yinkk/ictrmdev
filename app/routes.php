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

Route::get('/', ['uses' => 'HomeController@index', 'as' => 'home']);
//Front End

Route::controller('home', 'HomeController');
Route::controller('login', 'LoginController');

//Back End
Route::group(array('before' => 'auth'), function(){
	
	Route::get('admin', ['uses' => 'AdminController@index', 'as' => 'admin']);
	Route::get('news', ['uses' => 'AdminController@index', 'as' => 'news']);
	Route::get('user', ['uses' => 'AdminController@index', 'as' => 'user']);

	// Route for breadcrumbs
	Route::get('admin/system/faculty/create', ['uses' => 'Admin_FacultyController@getCreate', 'as' => 'createFormFaculty']);
	Route::get('admin/system/faculty', ['uses' => 'Admin_FacultyController@index', 'as' => 'faculty']);
	Route::get('admin/system/year', ['uses' => 'Admin_YearController@index', 'as' => 'year']);
	Route::get('admin/system/major', ['uses' => 'Admin_MajorController@index', 'as' => 'major']);

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