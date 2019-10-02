<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    public function lista_tipo_person()
    {
        return $this->hasMany('App\RelacionMatTP','id_materia','id')->with('tipo_personal');
    }
}
