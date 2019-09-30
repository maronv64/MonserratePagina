<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especialidades extends Model
{
    public function lista_materias()
    {
        return $this->hasMany('App\RelacionEspMat','id_especialidad','id')->with('materia');
    }
}
