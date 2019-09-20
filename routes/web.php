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
<<<<<<< HEAD

Route::get('/usuarios_form','MauroController@verUsuarios')->name('usuarios_form');
=======
Route::get('/estudiantes_form','GustavoController@verEstudiante')->name('estudiante_form');
>>>>>>> 57153a5a60998789d0a141671bbbef8b6bc52d96
