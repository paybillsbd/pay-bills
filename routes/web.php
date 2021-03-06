<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Property of 'Smart System Automation & Development Technologies'

Route::get('/', [ 'uses' => 'Auth\LoginController@home', 'as' => 'home' ]);

Auth::routes();

Route::group([ 'as' => 'user::', 'middleware' => 'web' ], function() {

	Route::get('/home', [ 'uses' => 'HomeController@index', 'as' => 'dashboard' ]);
});
