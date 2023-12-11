<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'SitehomeController@index')->name('home.index');