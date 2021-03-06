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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', 'PagesController@home');
Route::get('/profile', 'PagesController@profile');
Route::get('/login', 'AuthController@login');
Route::get('/logout', 'AuthController@logout');
Route::get('/register', 'AuthController@create');
Route::post('/login/auth', 'AuthController@loginuser');
Route::post('/register/create', 'AuthController@store');

Route::get('/login/auth/{id}', 'AuthController@checkUser');
Route::get('/login/{id}/success', 'AuthController@createSession');
