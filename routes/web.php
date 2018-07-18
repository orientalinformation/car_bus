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

// resource controller car is car.blade.php
Route::resource('car', 'CarController');
Route::resource('manufacturer', 'ManufacturerController');
Route::get('/addcomment', 'CommentController@getIndex');

Route::post('/users/register/store', 'UserController@storeRegister');
Route::get('/users/login', 'UserController@login');
Route::post('/users/login/attempt', 'UserController@loginAttempt');
Route::get('/users/logout', 'UserController@logout');
Route::get('/users/show/account', 'UserController@account');
Route::get('/users/show/account/edit', 'UserController@accountedit');
Route::post('show/edit/account', 'UserController@accountupdate');
Route::get('/users/show/account/passworddit', 'UserController@passwordedit');
Route::post('/users/show/account/change', 'UserController@changePassword');

Route::group(array('before' => 'auth'), function () {
  Route::get('users/show', 'UserController@show');
  Route::get('users/show/add', 'UserController@add');
});

Route::get('user/profile','UserController@useradd');
Route::post('show/edit/account1','UserController@accountupdateuser');
Route::get('user/profiledelete','UserController@userdelete');
Route::get('/user/profileauth','UserController@auth');
Route::get('admin/show/edit/auth','UserController@authedit');

Route::resource('user', 'UserController'); 
Route::get('admin/show','UserController@show');
Route::get('admin/user/show/account', 'UserController@account');
Route::post('admin/show/add/check', 'UserController@checkAdd');
Route::get('admin/show/delete', 'UserController@delete');
Route::get('admin/show/delete/check', 'UserController@checkDelete');
Route::get('admin/show/edit','UserController@edit');
Route::get('admin/show/edit/check','UserController@checkedit');
Route::post('admin/show/edit/check1', 'UserController@checkedit1');
Route::get('admin/show/user/edit', 'UserController@useredit');

Route::resource('admin', 'UserController');

Route::get('/cars/searchadvanced', 'SearchAdvancedController@getIndex');
Route::get('resultsearchadvanced', 'ResultNameController@result');
Route::get('searchname', 'ResultNameController@getIndex');
Route::get('resultname', 'ResultNameController@getIndex');

Route::get('/admin/show/add','UserController@add');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
