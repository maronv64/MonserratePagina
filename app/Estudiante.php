<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    //
    public function lista_tipos()
    {
        return $this->hasMany('App\RelacionTipoEEst', 'id_estudiante', 'id')->with("tipo");
    }
    public function especialidad()
    {
        return $this->belongsTo('App\Especialidades', 'idEspecialidad', 'id');
    }
}
