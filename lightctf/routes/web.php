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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/showtasks', 'TasksController@showtasks');
Route::get('/task/{id}', 'TasksController@taskdetails');
Route::get('/standings', 'TasksController@showstandings');

Route::post('/task/{id}', 'TasksController@checkflag');