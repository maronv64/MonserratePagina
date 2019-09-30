<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelacionMatTP extends Model
{
    public function tipo_personal()
    {
        return $this->hasOne('App\TipoPersonal','id','id_tipopersonal');
    }
}
