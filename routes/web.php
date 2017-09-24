<?php

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


Auth::routes();

Route::get('/', 'LinkController@index');
Route::get('/postit', 'LinkController@displayPostIt');

Route::get('/home', [
    'middleware' => 'auth',
    'uses' => 'LinkController@home'
])->name('home');

Route::post('/home', [
    'middleware' => 'auth',
    'uses' => 'LinkController@addPostIt'
])->name('home');
