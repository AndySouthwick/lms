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
    return view('landing');
});
Route::get('/login', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
    
Route::post('/subscriptions', 'SubscriptionController@store');

Route::get('/profile', 'ProfileController@index');

Route::resource('/tracks', 'TracksController');

Route::get('/courses/{id}/{track_name}', 'CoursesController@index');

Route::post('/profile/{id}/edit', 'ProfileController@update');

Route::get('/videos/{course_id}/{id}', 'VideosController@video');

Route::get('/videos/{course_id}/{id}', 'VideosController@video');

// Route::get('/tracks/{track_name?}',function($name = null)
// {
// });


