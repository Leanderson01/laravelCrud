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

Route::get('/', function () {
    return view('welcome');
});

Route::get('lanches/novo', 'App\Http\Controllers\LanchesController@create');
Route::post('lanches/novo', 'App\Http\Controllers\LanchesController@store')->name('salvar_lanche');
Route::get('lanches/ver', 'App\Http\Controllers\LanchesController@show');
Route::get('lanches/delete/{id}', 'App\Http\Controllers\LanchesController@destroy')->name('deletar_lanche');
Route::get('lanches/edit/{id}', 'App\Http\Controllers\LanchesController@edit')->name('editar_lanche');
Route::post('lanches/edit/{id}', 'App\Http\Controllers\LanchesController@update')->name('atualizar_lanche');
