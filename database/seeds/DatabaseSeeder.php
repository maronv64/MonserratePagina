<?php

use Illuminate\Database\Seeder;
use App\TipoUsuario;
use App\User;
use App\Institucion;

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
       $item->himno="xxx";
       $item->file_name="img_principal";
       $item->file_ext="jpg";
       $item->save();

        // $this->call(UsersTableSeeder::class);
    }
}
