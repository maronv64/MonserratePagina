<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPersonal extends Model
{
    public function lista_personal()
    {
        return $this->hasMany('App\RelacionPersTp','id_tipopersonal','id')->with('Personal');
    }
}
