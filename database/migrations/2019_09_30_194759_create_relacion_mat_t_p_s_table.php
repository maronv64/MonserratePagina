<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelacionMatTPSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacion_mat_t_p_s', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_materia');
            $table->bigInteger('id_tipopersonal');
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
        Schema::dropIfExists('relacion_mat_t_p_s');
    }
}
