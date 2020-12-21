<?php

namespace App\Http\Controllers;

use App\Semanas;
use Illuminate\Http\Request;

class SubmateriaController extends Controller
{
    //
    public function show($plan,$grado,$materia,$submateria){
        $detalles = Semanas::with('planes','grados','materias','submaterias')
            ->where(['plan_id'=>$plan,'grado_id'=>$grado,'materia_id'=>$materia,'submateria_id'=>$submateria])
            ->orderBy('semana')->get();

        if($detalles->isEmpty()) abort(404,'error');
        return view('detallesubmateria', ['data'=>$detalles,'len'=>count($detalles)]);

    }
}
