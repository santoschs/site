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

Route::get('/', 'ProjetosController@index')->name('home');
// Route::get('/test', 'ProjetosController@test');


Route::get('/projetos', 'ProjetosController@projetos')->name('projetos');
Route::get('/projeto/{id}', 'ProjetosController@projeto')->name('projeto');

Route::get('/parceiros', 'ProjetosController@parceiros')->name('parceiros');
Route::get('/parceiro/{id}', 'ProjetosController@parceiro')->name('parceiro');

Route::get('/colaboradores', 'ProjetosController@alunos')->name('colaboradores');
Route::get('/colaborador/{id}', 'ProjetosController@aluno')->name('aluno');

Route::get('/sobre', 'ProjetosController@sobre')->name('sobre');

Route::get('/contato', 'ProjetosController@contato')->name('contato');
Route::get('/new_index', 'ProjetosController@new_index');


