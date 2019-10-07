<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelacionTipoEEstsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacion_tipo_e_ests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_tipo_estudiante');
            $table->bigInteger('id_estudiante');
            $table->string('Cargo',30);
            $table->string('estado_del',2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relacion_tipo_e_ests');
    }
}
