<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelacionEspMatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacion_esp_mats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_especialidad');
            $table->bigInteger('id_materia');
            $table->string('estado_del','2');
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
        Schema::dropIfExists('relacion_esp_mats');
    }
}
