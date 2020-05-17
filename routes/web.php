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


// Route::get('/signup', function () {
//     return view('signup');
// });
Route::get('/signup', ['uses' => 'signinController@sessionchecksignup']);


// Route::get('/signin', function () {
//     return view('signin');
// });
Route::get('/signin', ['uses' => 'signinController@sessionchecksignin']);
Route::post('/signin', ['uses' => 'signinController@signup']);

Route::get('/dashboard', ['uses' => 'signinController@publicIndex']);
Route::post('/dashboard', ['uses' => 'signinController@login']);

Route::get('/logout', ['uses' => 'DashboardController@logout']);

Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/aboutusignedin', function () {
    return view('aboutusignedin');
});

Route::get('/cart', function () {
    return view('cart');
});