<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'SitehomeController@index')->name('home.index');
Route::get('_{code}', 'SitehomeController@account')->name('home.account');
Route::get('logout', 'SitehomeController@logout')->name('home.logout');

Route::post('join', 'SitehomeController@join')->name('home.join');
Route::post('submit', 'SitehomeController@submit')->name('home.submit');