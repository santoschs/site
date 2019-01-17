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

// Route::get('/', function () {
// 	return view('welcome');
// });

Route::get('/', 'ProjetosController@index');
Route::get('/project/{id}', 'ProjetosController@show');
Route::get('/pupil/{id}', 'ProjetosController@show_pupil');