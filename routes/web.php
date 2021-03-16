<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
|
*/

Route::namespace('Frontend')->name('frontend.')->group(function () {
    Route::get('/', 'IndexController@index');
});

/*
|--------------------------------------------------------------------------
| Backend Auth Routes
|--------------------------------------------------------------------------
|
*/

Auth::routes();

/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
|
*/

Route::namespace('Backend')->prefix('backend')->name('backend.')->middleware(['auth'])->group(function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('user', 'UserController@index')->name('user');
    Route::get('user/edit/{id}', 'UserController@edit')->name('user.edit');
});
