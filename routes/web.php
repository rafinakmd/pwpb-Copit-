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
Route::get('home', function () {
    return view('main');
});
Route::get('biodata', function () {
    return view('aku');
});
Route::get('/tugas','TugasController@index');
//Tambah data
Route::get('/tugas/create','TugasController@create');
Route::post('/tugas','TugasController@store');
//Edt data
Route::get('tugas/{id}/edit', 'TugasController@edit');
Route::patch('/tugas/{id}', 'TugasController@update');
//Delete data
Route::delete('/tugas/{id}', 'TugasController@destroy');

Route::get('/dunia','DuniaController@index');
//Tambah data
Route::get('/dunia/create','DuniaController@create');
Route::post('/dunia','DuniaController@store');
//Edt data
Route::get('dunia/{id}/edit', 'DuniaController@edit');
Route::patch('/dunia/{id}', 'DuniaController@update');
//Delete data
Route::delete('/dunia/{id}', 'DuniaController@destroy');
