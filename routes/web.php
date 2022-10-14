<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group([
    'middleware' => 'guest'
], function () {
    Route::get('/', 'PostController@show')->name('home');
    Route::get('/detail', 'PostController@detail');
    Route::get('/login', 'UserController@login');
    Route::post('/login', 'UserController@actionLogin')->name('Login');
});


Route::group([
    'middleware' => 'auth'
], function () {
    Route::get('/home', 'UserController@dashboard');
    Route::get('/logout', 'UserController@logout');
    Route::get('/post', 'BeritaController@show');
    Route::get('/create', 'BeritaController@create');
    Route::get('/categories', 'BeritaController@categories');
});
