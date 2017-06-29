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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/carrera','CarreraController');
// Route::get('/carrera','CarreraController@index');
// Route::get('/carrera/create','CarreraController@create');
// Route::post('/carrera/create','CarreraController@store');
Route::resource('/usuario','UserController');
Route::resource('/programa','ProgramaController');
Route::post('/admin-usuario/asociar-programa','AdminUsuarioController@asociarPrograma');
