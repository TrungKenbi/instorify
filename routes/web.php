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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




/**
 * UI temporary routes
 */

Route::get('/', function () {
    return view('landing');
});

Route::get('/feed', function () {
    return view('feed');
});


Route::resource('posts', PostController::class);
Route::resource('posts.comments', PostCommentController::class);
