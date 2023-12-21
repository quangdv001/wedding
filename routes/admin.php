<?php

use Illuminate\Support\Facades\Route;

Route::get('login', 'AdminAuthController@login')->name('auth.login');
Route::post('login', 'AdminAuthController@postLogin')->name('auth.postLogin');
Route::get('logout', 'AdminAuthController@logout')->name('auth.logout');

Route::middleware('auth:admin')->group(function() {
    Route::get('/', 'AdminHomeController@index')->name('home.index');

    Route::get('/user', 'AdminUserController@index')->name('user.index');
    Route::get('/user/export', 'AdminUserController@export')->name('user.export');
    Route::post('/user/import', 'AdminUserController@import')->name('user.import');
    Route::post('/user/editName', 'AdminUserController@editName')->name('user.editName');

    Route::get('/message', 'AdminMessageController@index')->name('message.index');
});