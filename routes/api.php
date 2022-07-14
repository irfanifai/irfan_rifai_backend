<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', 'Auth\LoginController@login');
Route::post('/register', 'Auth\RegisterController@register');

Route::group(['middleware' => 'auth:api'], function() {
    Route::get('/dashboard', 'API\DashboardController@countData');
    Route::resource('/users', 'API\UserController');
    Route::resource('/news', 'API\NewsController');
});
