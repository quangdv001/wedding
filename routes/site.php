<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'SiteHomeController@index')->name('home.index');
Route::get('_{code}', 'SiteHomeController@account')->name('home.account');
Route::get('logout', 'SiteHomeController@logout')->name('home.logout');

Route::post('join', 'SiteHomeController@join')->name('home.join');
Route::post('submit', 'SiteHomeController@submit')->name('home.submit');