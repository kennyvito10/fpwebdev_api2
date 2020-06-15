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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/auth/signup','AuthController@signup');
Route::post('/auth/login','AuthController@login');
Route::get('/auth/getUserToken','AuthController@getUserToken');
Route::get('/auth/seeprofile','AuthController@seeprofile');
Route::get('/auth/viewuser/{id}','AuthController@viewuser');
Route::patch('/auth/updateprofile','AuthController@updateprofile');
Route::get('/auth/loginadmin','AuthController@loginadmin');
