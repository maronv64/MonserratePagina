<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelacionEspMat extends Model
{
    public function materia()
    {
        return $this->hasOne('App\Materia','id','id_materia');
    }
}
