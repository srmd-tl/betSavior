<?php

use Illuminate\Support\Facades\Route;

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
Route::get('home', function () {
    return view('masterNew');
});

Auth::routes();
Route::resource('game', 'GameController');
Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('user', 'UserController', ['except' => ['show']]);
    Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
    Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
    Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

Route::get('fetchOdds', 'HomeController@fetchOdds');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::resource('socialMedia', 'SocialMediaController');
    Route::resource('blog', 'BlogController');

});
