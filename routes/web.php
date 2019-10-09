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

    $institucion=\App\Institucion::where("estado_del","A")->first();

    $estudiantes=\App\TipoEstudiante::with(["lista_estudiante"])->where([["estado_del","A"],["descripcion","like","%honor%"]])->first();

    // echo $estudiantes;
    // return response()->json($estudiantes);
    // $estudiantes=\App\Estudiante::with(["lista_tipos","especialidad"])->where([["estado_del","A"],["descripcion"]])->get();

    // return view('welcome',["institucion"=>$institucion,"estudiantes"=>$estudiantes]);

    $lista_Enlace=\App\Enlace::where("estado_del","A")->get();
    // // return view('welcome',["institucion"=>$institucion,"lista_Enlace"=>$lista_Enlace]);
    $social=\App\Social::where("estado_del","A")->limit(4)->get();
    $personal=\App\Personal::where([["estado_del","A"],["cargo","like","%Rector%"]])->limit(2)->get();

    return view('welcome',["institucion"=>$institucion,"social"=>$social,"personal"=>$personal,"lista_Enlace"=>$lista_Enlace , "estudiantes"=>$estudiantes ]);
    // return view('welcome');
});

Auth::routes();
Route::get('/personals', function(){
    $lista_materias=\App\Materia::where("estado_del","A")->get();
    $personal=\App\Personal::where([["estado_del","A"],["cargo","like","%Rector%"]])->get();
    return view('personal',["lista_materias"=>$lista_materias,"personal"=>$personal]);
});  

Route::get('/social', function(){
    $social=\App\Social::where("estado_del","A")->get();
    return view('social',["social"=>$social]);
}); 

Route::get('/mostrar_estudiante', function(){
    $estudiantes=\App\TipoEstudiante::with(["lista_estudiante"])->where("estado_del","A")->get();
    $institucion=\App\Institucion::where("estado_del","A")->first();
    $lista_Enlace=\App\Enlace::where("estado_del","A")->get();


        // return response()->json($estudiantes);

    return view('estudiantes',["estudiantes"=>$estudiantes,"lista_Enlace"=>$lista_Enlace,"institucion"=>$institucion]);
});      


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
Route::get('/tipo_estudiante_filtro/{data?}','TipoEstudianteController@filtro');
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

Route::resource('/relacion_materias_personal','RelacionMatPersonController');

Route::resource('/relacion_personal_tipo','RelacionPersTPController');

Route::resource('/enlace','EnlaceController');