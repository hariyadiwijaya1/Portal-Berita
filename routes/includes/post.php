<?php

use Illuminate\Support\Facades\Route;

Route::prefix('post')->group(function () {
    Route::get('', 'BeritaController@show');
    Route::get('/create', 'BeritaController@create');
    Route::post('/store', 'BeritaController@store')->name('store');
    Route::get('/edit/{id}', 'BeritaController@edit');
    Route::post('/update/{id}', 'BeritaController@update')->name('edit');
    Route::get('/post/{id}', 'BeritaController@destroy')->name('delete');
});
