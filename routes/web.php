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

//Dashboard
Route::get('/index', 'IndexController@index')->name('index');

//Admin
Route::get('/admincreate', 'adminController@insert')->name('admincreate');
Route::get('/aindex', 'adminController@index')->name('admin');
Route::get('/adminedit', 'adminController@edit')->name('adminedit');

//Subscription
Route::get('/subscription', 'subscriptionController@index')->name('subscription');
Route::get('/subscriptioncreate', 'subscriptionController@create')->name('subscriptioncreate');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
