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

Route::get('/',   'HomeController@index');
Route::group(['prefix'=>'home',],function(){
	Route::controller('/','HomeController'); 
	//Route::get('story','HomeController@story');

    }
	);



Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::controllers([  
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

/*Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function()
{
  Route::get('/', 'AdminHomeController@index');  
  Route::resource('center','centerController');
});
*/

Route::controller("test","tryController");
Route::resource('courseap','CourseAppointmentController');
Route::resource('center','centerController');


