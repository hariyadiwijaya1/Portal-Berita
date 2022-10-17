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
    require_once('includes/pages.php');
    require_once('includes/show.php');
    Route::get('/', 'PostController@show')->name('home');
    Route::get('/detail', 'PostController@detail');
    Route::get('/login', 'UserController@login');
    Route::post('/login', 'UserController@actionLogin')->name('Login');
});


Route::group([
    'middleware' => 'auth'
], function () {
    require_once('includes/post.php');
    require_once('includes/profile.php');
    Route::get('/home', 'UserController@dashboard');
    Route::get('/categories', 'CategoryController@show');
});
