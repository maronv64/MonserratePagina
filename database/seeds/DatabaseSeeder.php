<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\TipoUsuario;
use App\User;

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

        $item=new User();
        $item->idtipo="1";
        $item->name="admin";
        $item->email="admin@admin.com";
        $item->password=Hash::make("adminadmin");
        $item->save();
    
        // $this->call(UsersTableSeeder::class);
    }
}
