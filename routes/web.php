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


Route::get('/', ['uses' => 'DashboardController@homeIndex']);


Route::get('/product', function () {
    return view('product');
});


Route::get('/signup', function () {
    return view('signup');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::post('/dashboard', ['uses' => 'signinController@login']);
Route::get('/dashboard', ['uses' => 'signinController@publicIndex']);
Route::get('/logout', ['uses' => 'DashboardController@logout']);

Route::get('/aboutus', function () {
    return view('aboutus');
});