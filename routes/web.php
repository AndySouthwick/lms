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
    return view('courses');
});
Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/stripe', function () {
    return view('stripe');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/profile', 'ProfileController@index');

