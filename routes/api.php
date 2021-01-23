<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(["middleware"=>["client"]], function(){
	Route::get("user/all", "\App\Http\Controllers\Api\UserController@index");
	Route::get("feature/all", "\App\Http\Controllers\Api\FeatureController@index");
	Route::get("feature/{featureName?}{email?}", "\App\Http\Controllers\Api\FeatureController@show");
	Route::post("feature", "\App\Http\Controllers\Api\FeatureController@update");
});
