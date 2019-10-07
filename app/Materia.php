<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    public function lista_person()
    {
        return $this->hasMany('App\RelacionMatPerson','id_materia','id')->with('personal');
    }
}
