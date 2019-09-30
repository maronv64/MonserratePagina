<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelacionPersTpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacion_pers_tps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_tipopersonal');
            $table->bigInteger('id_personal');
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
        Schema::dropIfExists('relacion_pers_tps');
    }
}
