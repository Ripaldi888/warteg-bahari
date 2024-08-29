<?php

use App\Http\Controllers\AuthController;
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



Route::get('/', [
    'uses' =>  'App\Http\Controllers\HomeController@index',
    'as' => 'get.index'
])->middleware('auth', 'cekuser');

Route::get('/login', [
    'uses' =>  'App\Http\Controllers\AuthController@showLoginForm',
    'as' => 'get.login'
]);


Route::post('/logout', [
    'uses' =>  'App\Http\Controllers\AuthController@logout',
    'as' => 'logout'
]);

Route::post('/login', [
    'uses' =>  'App\Http\Controllers\AuthController@login',
    'as' => 'login'
]);


