<?php

use Illuminate\Support\Facades\Route;
Route::prefix('user')->group(function (){

    Route::get('/edit/{id}', 'UserController@update')->name('update');
    // Route::get('/home', 'UserController@dashboard');
    Route::get('/logout', 'UserController@logout');

    Route::get('/edit', 'UserController@edit');

});

