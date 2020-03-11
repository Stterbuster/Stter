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

Route::get('/','HomeController@index')->name('home');

//Авторизация---------------------------------
Route::get('/signup','AuthController@getSignUp')->middleware('guest')->name('auth.signup');
Route::post('/signup','AuthController@postSignUp')->middleware('guest');


Route::get('/signin','AuthController@getSignIn')->middleware('guest')->name('auth.signin');
Route::post('/signin','AuthController@postSignIn')->middleware('guest');


Route::get('/signout','AuthController@getSignout')->name('auth.signout');
