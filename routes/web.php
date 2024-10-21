<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'App\Http\Controllers\UserController@index');

Route::post('/information', 'App\Http\Controllers\UserController@information');

Route::get('/create', 'App\Http\Controllers\UserController@create');

Route::post('/create_result', 'App\Http\Controllers\UserController@createResult');

Route::get('/update/{id}', 'App\Http\Controllers\UserController@update');

Route::post('/updateResult', 'App\Http\Controllers\UserController@updateResult');

Route::get('/delete/{id}', 'App\Http\Controllers\UserController@delete');

Route::post('/delete_result', 'App\Http\Controllers\UserController@deleteResult');


