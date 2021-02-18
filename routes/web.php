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

Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'super_admin'], function () {
    // Route::middleware('auth:admin')->group(function() {
//Dashboard
    Route::get('/index', 'IndexController@index')->name('index');

    //Admin
    Route::get('/admin_create', 'adminController@admin_create')->name('admin_create');
    Route::get('/usercreate', 'adminController@user_create')->name('user_create');
    Route::post('/user_insert', 'adminController@user_insert')->name('user_insert');
    Route::get('/aindex', 'adminController@index')->name('admin');
    Route::post('/admin_insert', 'adminController@admin_insert')->name('admin_insert');
    Route::get('/adminedit', 'adminController@edit')->name('adminedit');

    //Subscription
    Route::get('/subscription', 'subscriptionController@index')->name('subscription');
    Route::get('/subscriptioncreate', 'subscriptionController@create')->name('subscriptioncreate');
    Route::post('/subscription_submit', 'subscriptionController@subscription_submit')->name('subscription_submit');
    Route::get('/subscriptionedit', 'subscriptionController@edit')->name('subscriptionedit');
    // });
});
