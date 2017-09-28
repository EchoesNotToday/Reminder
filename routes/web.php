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

Route::get('/home', [
    'middleware' => 'auth',
    'uses' => 'LinkController@home'
])->name('home');

Route::post('/home', [
    'middleware' => 'auth',
    'uses' => 'PostItController@addPostIt'
])->name('home');

Route::get('/delete/{id}', [
	'middleware' => 'auth',
	'uses' => 'PostItController@deletePostIt'
]);
Route::get('/deleteall', [
	'middleware' => 'auth',
	'uses' => 'PostItController@deleteAllPostIt'
	]);
Route::get('/currentUserDelete', [
	'middleware' => 'auth',
	'uses' => 'DeleteUserController@deleteCurrentUser'
	])->name('currentUserDelete');


Route::post('/postit', [
	'middleware' => 'auth',
	'uses' => 'PostItController@search'
	])->name('postit');

Route::get('/postit', [
	'middleware' => 'auth',
	'uses' => 'PostItController@displayPostIt'
	])->name('postit');
