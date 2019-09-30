<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    public function tiposocial()
{
    return $this->belongsTo('App\TipoSocial', 'idtipo', 'id');
}

}
