<?php

use Illuminate\Support\Facades\Route;

Route::prefix('post')->group(function (){
    Route::get('', 'BeritaController@show');
    Route::get('/create', 'BeritaController@create');
    Route::get('/store', 'BeritaController@store')->name('store');
    Route::get('/update/{id}', 'BeritaController@edit');
    Route::get('/update', 'BeritaController@update')->name('edit');
    Route::get('/post/{id}', 'BeritaController@destroy')->name('delete');

});

