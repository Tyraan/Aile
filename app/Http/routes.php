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
<<<<<<< HEAD

Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function()
{
  Route::get('/', 'AdminHomeController@index');
});

Route::group(['prefix'=>"admin",'namespace'=>"Admin"],function()
{
	Route::resource('pages','PagesController');
});

Route::gourp('findus',"FindAileController");

=======
Route::get('/','WelcomeController@index');
Route::get('home','HomeController@index');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middlewire'=>'auth'], function()
{
  Route::get('/', 'AdminHomeController@index');
  Route::resource('pages','PagesController');
});

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

>>>>>>> parent of 4827d3e... mistake
