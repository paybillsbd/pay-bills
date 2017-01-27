<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
 * @reference
 	 - https://mattstauffer.co/blog/multiple-authentication-guard-drivers-including-api-in-laravel-5-2
 	 - https://gistlog.co/JacobBennett/090369fbab0b31130b51
 	 - https://laracasts.com/discuss/channels/laravel/53-api-routes-auth-middleware-confusion
 * 				
 */

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:api');

Route::group(['prefix' => 'v1', 'middleware' => 'auth:api'], function () {

	Route::resource('services', 'PaymentServiceController');
});
