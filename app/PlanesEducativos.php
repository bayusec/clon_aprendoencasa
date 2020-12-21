<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MultimediaPlan;

class PlanesEducativos extends Model
{
    protected $table = 'planes_educativos';

    public function getImg(){
        return $this->hasMany(MultimediaPlan::class,'plan_id')->where('multimedia_id',1);
    }



    public function scopeWithMultimediaPlan($query){

        $subselect = MultimediaPlan::select('multimedia_plan.link')
            ->whereColumn('multimedia_plan.plan_id','planes_educativos.id')
            ->where('multimedia_id',1);

        $query->addSelect([
            'link' => $subselect
        ]);
    }

//    public function grados(){
//        return $this->belongsToMany(Grado::class,'grados_materias_planes','plan_id','grado_id');
//    }
//
//    public function materias(){
//        return $this->belongsToMany(Materias::class,'grados_materias_planes','plan_id','materia_id');
//    }


}
