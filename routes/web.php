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

Route::resource('/tipo_usuario','TipoUsuarioController');

//Route::resource('/Tipo_Usuario','TipoUsuarioController');

Route::resource('/tipo_estudiante','TipoEstudianteController');

Route::resource('/Especialidades_control','EspecialidadesController');

Route::resource('/materia_control','MateriaControllerController');

Route::resource('/social_form','SocialController');

Route::resource('/tipopersonal_form','TipoPersonalController');
