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
| Register the typical authentication routes for an application.
| Replacing: Auth::routes();
|--------------------------------------------------------------------------
*/

// Route::namespace('Auth')->prefix(config('constants.backend_url_prefix'))->group(function () {
//     // Authentication Routes...
//     $this->get('login', 'LoginController@showLoginForm')->name('login');
//     $this->post('login', 'LoginController@login');
//     $this->post('logout', 'LoginController@logout')->name('logout');
//     // Registration Routes...
//     if (config('constants.register')) {
//         $this->get('register', 'RegisterController@showRegistrationForm')->name('register');
//         $this->post('register', 'RegisterController@register');
//     }
//     // Password Reset Routes...
//     $this->get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
//     $this->post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
//     $this->get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
//     $this->post('password/reset', 'ResetPasswordController@reset');
// });


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
