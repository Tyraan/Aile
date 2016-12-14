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

Route::get('/','HomeController@index');
Route::group(['prefix'=>'home',],function(){
	Route::controller('/','HomeController'); 
	Route::get('/','HomeController@index');	
    }
	);
/*
 * 控制登陆的路由群
 **/
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::controllers([  
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

/*
 * 管理用路由
*/
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function()
{
  Route::get('/', 'AdminHomeController@index');
  Route::resource('banner','bannerController');
  
});
/*
 * 测试用路由
 */
Route::controller("test","tryController");
Route::resource('courseap','CourseAppointmentController');
Route::resource('center','centerController');


