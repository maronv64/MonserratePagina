<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelacionPersTp extends Model
{
    public function Tipo_personal()
    {
        return $this->hasOne('App\TipoPersonal','id','id_tipopersonal');
    }
}
