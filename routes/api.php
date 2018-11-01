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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::post('/test','Test_c@test') ;
Route::get('/test',function(){
	return "hello";
}) ;

//post controller 
//Route::post('/post','post_c@test');

Route::middleware('auth:api')->post('/test_js','Test_c@test_js') ;
Route::middleware('auth:api')->post('/test','Test_c@test') ;
Route::post('register','Auth\RegisterController@register');
