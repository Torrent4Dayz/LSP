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

Route::get('/', 'UserController@index');
Route::post('/submit', 'UserController@submit');
Route::get('/loginpage', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/admin', 'AdminController@index');
Route::get('/edit/{id}', 'AdminController@edit');
Route::post('/searchadm', 'AdminController@search');
Route::get('/search', 'UserController@searchPage');
Route::post('/searchuser', 'UserController@search');
Route::get('/feedbackpage', 'UserController@feedbackPage');
Route::post('/feedback', 'UserController@feedback');
Route::get('/about', 'UserController@about');
