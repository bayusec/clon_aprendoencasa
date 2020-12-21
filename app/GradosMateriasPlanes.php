<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GradosMateriasPlanes extends Model
{
    protected $table = 'grados_materias_planes';
    //
    public function planes(){
        return $this->belongsTo(PlanesEducativos::class,'plan_id');
    }

    public function grados(){
        return $this->belongsTo(Grado::class,'grado_id');
    }
//
    public function materias(){
        return $this->belongsTo(Materia::class,'materia_id');
    }

    public function submaterias(){
        return $this->belongsTo(Submaterias::class,'submateria_id')->orderBy('id');
    }

}
