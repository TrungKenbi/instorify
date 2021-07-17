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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::middleware(['web', 'auth'])->group(function () {
    Route::resource('posts', PostController::class);
    Route::resource('posts.comments', PostCommentController::class);
});






/**
 * UI temporary routes
 */

//Route::get('/', function () {
//    return view('landing');
//});

Route::get('/home', function () {
    return view('feed');
});

Route::get('/profile', function () {
    return view('profile');
});
