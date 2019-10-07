<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEstudiante extends Model
{
     function Lista_estudiante()
     {
        return $this->hasMany('App\RelacionTipoEEst', 'id_tipo_estudiante', 'id')->with("estudiante");
     }
}
