<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecursosLinks extends Model
{
    //

    public function secciones(){
        return $this->belongsTo(Secciones::class,'seccion_id');
    }
}
