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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'LandingController@index');

Route::get('/register', 'RegisterController@register');
Route::get('/detail', 'DetailController@index');
Route::get('/list/location', 'StoreListController@location');
Route::get('/list/location/{location}', 'StoreListController@location');
Route::get('/review', 'ReviewController@list');
Route::get('/lounge', 'LoungeController@list');
Route::get('/event', 'EventController@index');

Route::get('/users/register', 'Lib\UsersController@register');
Route::post('/users/register', 'Lib\UsersController@register');

// Admin
Route::get('/admin', 'Admin\AdminController@index');
Route::get('/admin/store', 'Admin\StoreController@list');
Route::get('/admin/store/add', 'Admin\StoreController@add');

Route::get('/lib/store/register', 'StoreController@register');
Route::post('/lib/store/register', 'StoreController@register');
