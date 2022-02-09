<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::resource('user', 'UserController');
Route::post('/login', 'Auth\LoginController@login');


Route::group(['middleware' => 'auth:api'], function() {
    Route::resource('/users', 'API\UserController')->except(['show']);
});
Route::group(['middleware' => 'auth:api'], function() {
    Route::resource('/news', 'API\NewsController')->except(['show']);
});
Route::group(['middleware' => 'auth:api'], function() {
    Route::resource('/signature', 'API\SignatureController')->except(['show']);
});
Route::group(['middleware' => 'auth:api'], function() {
    Route::resource('/bank', 'API\BankController')->except(['show']);
});