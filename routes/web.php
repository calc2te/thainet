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

//Route::get('/users/register', 'Lib\UsersController@register');
Route::post('/users/register', 'Lib\UsersController@register');
