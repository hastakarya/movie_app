<?php

use Illuminate\Support\Facades\Route;

// Route::view('/', 'index');
// Route::view('/movie', 'show');

Route::get('/', 'MovieController@index')->name('movie.index');
Route::get('/movie/{movie}', 'MovieController@show')->name('movie.show');
