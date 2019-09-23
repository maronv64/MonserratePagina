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

Route::get('/Especialidades_form','ElizabethController@verEspecialidades')->name('especialidades');

Route::get('/social_form','NancyController@verSocial')->name('social_form');

Route::get('/usuarios_form','MauroController@verUsuarios')->name('usuarios_form');

Route::get('/estudiantes_form','GustavoController@verEstudiante')->name('estudiante_form');

Route::resource('/tiposocial_form','TipoSocialController');

Route::resource('/users','UserController');

<<<<<<< HEAD
<<<<<<< HEAD
=======

Route::resource('/Tipo_Usuario','TipoUsuarioController');


>>>>>>> aad7ae91fdc2a2182c5a394cc959320235d342d6
=======
Route::resource('/Tipo_Usuario','TipoUsuarioController');

>>>>>>> f9ec227942c9041d812c3e00aaed886ec068d32d
Route::resource('/tipo_estudiante','TipoEstudianteController');

Route::resource('/Especialidades_control','EspecialidadesController');
