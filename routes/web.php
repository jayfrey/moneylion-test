<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("user/all", "\App\Http\Controllers\Api\UserController@index");
Route::get("feature/all", "\App\Http\Controllers\Api\FeatureController@index");
Route::get("feature/{featureName?}{email?}", "\App\Http\Controllers\Api\FeatureController@show");
Route::post("feature", "\App\Http\Controllers\Api\FeatureController@update");