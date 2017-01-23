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

Route::get('/', function () {
    // return view('welcome');
    return view('homes.home-public');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/services', function() {

	return response()->json([
		[ 'id' => 1, 'text' => 'Telecom operators' ],
		[ 'id' => 2, 'text' => 'Internet ISPs' ],
		[ 'id' => 3, 'text' => 'Home rents' ],
		[ 'id' => 4, 'text' => 'Social services' ],
		[ 'id' => 5, 'text' => 'Tuition fees' ],
		[ 'id' => 6, 'text' => 'Transport Ticket' ],
	]);
});
