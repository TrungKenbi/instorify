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

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::middleware(['web', 'auth'])->group(function () {
    Route::resource('users', UserController::class);
    Route::resource('posts', PostController::class);
    Route::resource('photos', PhotoController::class);
    Route::resource('music', MusicController::class);
    Route::resource('posts.reactions', PostReactionController::class)->only(['store']);
    Route::resource('posts.comments', PostCommentController::class)->only(['store', 'edit', 'destroy']);

    Route::resource('messages', MessageController::class);
    Route::resource('notifications', NotificationController::class);


    Route::get('profile/{user}', 'ProfileController@index')->name('profile.index');
    Route::get('profile/{user}/friends', 'ProfileController@friends')->name('profile.friends');
    Route::get('profile/{user}/photos', 'ProfileController@photos')->name('profile.photos');
    Route::get('profile/{user}/music', 'ProfileController@music')->name('profile.music');
    Route::get('profile/{user}/videos', 'ProfileController@videos')->name('profile.videos');

    Route::get('profile/{user}/edit', 'ProfileController@edit')->name('profile.edit');
    Route::put('profile/{user}', 'ProfileController@update')->name('profile.update');

    Route::post('profile/avatar', 'ProfileController@updateAvatar')->name('profile.updateAvatar');
    Route::post('profile/cover', 'ProfileController@updateCover')->name('profile.updateCover');

    Route::get('profile/friends/add/{id}', 'ProfileController@addFriend')->name('profile.friends.add');
    Route::get('profile/friends/remove/{id}', 'ProfileController@unfriend')->name('profile.friends.remove');

    Route::get('profile/friends/accept/{id}', 'ProfileController@acceptFriend')->name('profile.friends.accept');
    Route::get('profile/friends/deny/{id}', 'ProfileController@denyFriend')->name('profile.friends.deny');
});

Route::get('/home', 'HomeController@index');
