<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RelacionMatPerson extends Model
{
    public function personal()
    {
        return $this->hasOne('App\Personal','id','id_personal');
    }
}
