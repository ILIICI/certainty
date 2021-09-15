<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/','upload')->name('url');

Route::post('/upload', 'App\Http\Controllers\PostController@store')->name('insert');
Route::get('/view/{code}', 'App\Http\Controllers\PostController@show')->name('view');