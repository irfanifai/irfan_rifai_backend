<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', 'Auth\LoginController@login');
Route::post('/register', 'Auth\RegisterController@register');
Route::post('/register/verification', 'Auth\RegisterController@registerVerify');
Route::post('/register/resend-verification', 'Auth\RegisterController@resendVerifyCode');
Route::post('/forgot-password', 'Auth\ForgotPasswordController@forgotPassword');
Route::post('/forgot-password/resend-link', 'Auth\ForgotPasswordController@resendForgotPassword');
Route::post('/reset-password', 'Auth\ResetPasswordController@resetPassword');
Route::post('/reset-password/verification', 'Auth\ResetPasswordController@resetPasswordVerify');


Route::group(['middleware' => 'auth:api'], function() {
    Route::get('/dashboard', 'API\DashboardController@countData');
    Route::resource('/users', 'API\UserController');
    Route::resource('/news', 'API\NewsController');
});
