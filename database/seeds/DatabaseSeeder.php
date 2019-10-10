<?php

use Illuminate\Database\Seeder;
use App\TipoUsuario;
use App\User;
use App\Institucion;
use App\Especialidades;
use App\TipoPersonal;
use App\TipoSocial;
use App\TipoEstudiante;
use App\Materia;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $tipo=new TipoUsuario();
       $tipo->descripcion="admin";
       $tipo->estado_del="A";
       $tipo->save();

       $tipo=new TipoUsuario();
       $tipo->descripcion="secretary";
       $tipo->estado_del="A";
       $tipo->save();

       $item=new User();
       $item->idtipo="1";
       $item->name="admin";
       $item->email="admin@admin.com";
       $item->password=bcrypt('adminadmin');
       $item->save();

       $item=new Institucion();
       $item->mision="fomentar el progreso institucional con un proceso armónico de convivencia profesional dirigido hacia una educación de calidad cuya acción se aporta a la comunidad ";
       $item->vision="ser una de las mejores instituciones de educacion basica, superior y bachillerato con docentes y autoridades de la mejor calaña xd";
       $item->himno="noble ilusion de ser monserratino al sendero del exito y la gloria de minerva la cultura; el destino la excelsa verdad de nuestra historia <br> <br> Adelante juventudes a estudiar en las aulas cual granero del saber por tu insignia jubilosos a triunfar es la meta forjada en nuestro haber <br> <br> salve oh colegio que irradias cultura al  dicente con amor, fe y esperanza futuro nuestro ansiada  investidura bella fuente de ilustrada añoranza <br> <br> Para siempre seras colegio inmortal es tu fuente de inagotable virtud de bolivar calceta es del umbral de sus hijos de indeleble gratitud <br>   <br> noble ilusion de ser monserratino al sendero del exito y la gloria de minerva la cultura; el destino la excelsa verdad de nuestra historia";
       $item->file_name="img_principal";
       $item->file_ext="jpg";
       $item->save();

       $item =new Especialidades();
       $item->descripcion="Técnico";
       $item->estado_del="A";
       $item->save();

       $item =new Especialidades();
       $item->descripcion="Ciencias";
       $item->estado_del="A";
       $item->save();

       $item =new TipoEstudiante();
       $item->descripcion="Cuadro de Honor";
       $item->estado_del="A";
       $item->save();

       $item =new TipoEstudiante();
       $item->descripcion="Consejo Estudiantil";
       $item->estado_del="A";
       $item->save();

       $item =new TipoPersonal();
       $item->descripcion="Administrativo";
       $item->estado_del="A";
       $item->save();

       $item =new TipoPersonal();
       $item->descripcion="Docente";
       $item->estado_del="A";
       $item->save();

       $item =new TipoSocial();
       $item->descripcion="Noticia";
       $item->estado_del="A";
       $item->save();

       $item =new TipoSocial();
       $item->descripcion="Evento";
       $item->estado_del="A";
       $item->save();

       $item =new Materia();
       $item->descripcion="Analisis";
       $item->estado_del="A";
       $item->save();

       $item =new Materia();
       $item->descripcion="CASE";
       $item->estado_del="A";
       $item->save();

       $item =new Materia();
       $item->descripcion="Matematica";
       $item->estado_del="A";
       $item->save();

       $item =new Materia();
       $item->descripcion="Ingles";
       $item->estado_del="A";
       $item->save();

       $item =new Materia();
       $item->descripcion="Biologia";
       $item->estado_del="A";
       $item->save();

       $item =new Materia();
       $item->descripcion="Educacion Fisica";
       $item->estado_del="A";
       $item->save();
       
       $item =new Materia();
       $item->descripcion="Diseño";
       $item->estado_del="A";
       $item->save();

       $item =new Materia();
       $item->descripcion="Emprendimiento y Gestion";
       $item->estado_del="A";
       $item->save();

        // $this->call(UsersTableSeeder::class);
    }
}
