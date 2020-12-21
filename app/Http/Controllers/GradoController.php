<?php

namespace App\Http\Controllers;

use App\GradosMateriasPlanes;
use Illuminate\Http\Request;

class GradoController extends Controller
{
    //
    public function show($plan,$grado){
        $pivot = GradosMateriasPlanes::with('planes','grados','materias')
            ->where('plan_id',$plan)
            ->where('grado_id',$grado)
            ->groupBy('plan_id','grado_id','materia_id')
            ->get();

        if($pivot->isEmpty()) abort(404,'error');
        $first=$pivot->first();

        if ($first->materias){
            return view('grado', ["data" => $pivot]);
        }
        else{   //redirect plan/1/grado/1/detalle
            return redirect('/plan/'.$plan.'/grado/'.$grado.'/materia/0/');
        }
    }
}
