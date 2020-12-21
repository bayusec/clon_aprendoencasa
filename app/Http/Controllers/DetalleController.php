<?php

namespace App\Http\Controllers;

use App\GradosMateriasPlanes;
use App\Semanas;
use App\Submaterias;

class DetalleController extends Controller
{
    //
    public function show($plan, $grado, $materia, $submateria=0){
        $materia=intval($materia);
        $submateria=intval($submateria);
        if($materia===0) $materia=null;
        if($submateria==0) $submateria=null;


        if($materia !=null){
//          Se obtiene las submaterias y se envia a la vista de submaterias
            $subm = GradosMateriasPlanes::with('planes','grados','materias','submaterias')
                ->where('plan_id',$plan)
                ->where('grado_id',$grado)
                ->where('materia_id',$materia)
                ->orderBy('submateria_id')
                ->get();

            $first=$subm->first()->submaterias;
            if(!empty($first)){
                return view('submateria', ["data" => $subm]);
            }
        }

        $detalles = Semanas::with('planes','grados','materias','submaterias')
                    ->where(['plan_id'=>$plan,'grado_id'=>$grado,'materia_id'=>$materia,'submateria_id'=>$submateria])
                    ->orderBy('semana')->get();
//        return $detalles;
        if($detalles->isEmpty()) abort(404,'error');
        return view('detalle', ['data'=>$detalles,'len'=>count($detalles)]);
    }
}
