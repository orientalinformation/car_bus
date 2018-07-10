<?php

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

Route::get('/introduce', function () {
    return view('introduce');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/product', 'ProductController@getIndex');

Route::get('/users/register', function () {
    return view('users.register');
});

Route::get('/users/login', 'UserController@login');
Route::post('/users/login/attempt', 'UserController@loginAttempt');
Route::get('/users/show/account', 'UserController@account');

Route::get('/cars/searchadvanced', function () {
    return view('cars.searchadvanced');
});
// Route::get('gioithieu', 'gioithieuController@getIndex');