<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
     public function lista_tipo_personal()
    {
        return $this->hasMany('App\RelacionPersTp','id_personal','id')->with('Tipo_personal');
    }
}
