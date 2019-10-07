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

    $institucion=\App\institucion::where("estado_del","A")->first();
    $lista_Enlace=\App\Enlace::where("estado_del","A")->get();
    return view('welcome',["institucion"=>$institucion,"lista_Enlace"=>$lista_Enlace]);
    $social=\App\social::where("estado_del","A")->limit(4)->get();
    $personal=\App\personal::where("estado_del","A")->limit(2)->get();


    return view('welcome',["institucion"=>$institucion],["social"=>$social],["personal"=>$personal]);
    // return $institucion;
    
    
    // return view('welcome',);
    
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
Route::resource('/estudiante','EstudianteController');
Route::resource('/relacion_tipoe_est','RelacionTipoEEstController');

Route::resource('/Especialidades_control','EspecialidadesController');

Route::resource('/materia_control','MateriaController');

Route::resource('/social_form','SocialController');

Route::resource('/tipopersonal_form','TipoPersonalController');

Route::resource('/buzon','BuzonController');
Route::resource('/personal_form','PersonalController');

Route::resource('/institucion','InstitucionController');

Route::resource('/relacion_especialidades_materias','RelacionEspMatController');

Route::resource('/relacion_materias_personal','RelacionMatTPController');

Route::resource('/relacion_personal_tipo','RelacionPersTPController');

Route::resource('/enlace','EnlaceController');