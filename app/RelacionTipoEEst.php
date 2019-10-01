<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelacionTipoEEst extends Model
{
    public function tipo()
    {
        return $this->hasOne('App\TipoEstudiante', 'id', 'id_tipo_estudiante');
    }
}
