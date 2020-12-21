<?php

namespace App\Http\Controllers;

use App\GradosMateriasPlanes;
use App\MultimediaPlan;
use App\PlanesEducativos;
use Illuminate\Http\Request;
use APP\Grado;

class PlanController extends Controller
{
    public function show($plan){
        if(is_numeric($plan) AND $plan > 0 AND (intval($plan)==$plan)) {
            $grados = GradosMateriasPlanes::with('planes', 'grados')
                ->where('plan_id', $plan)->groupBy(['plan_id', 'grado_id'])->get();

            if ($grados->isEmpty()) abort(404, 'No se encontro');

            $multi = MultimediaPlan::where('plan_id', $plan)->orderBy('multimedia_id')->get();

            foreach ($multi AS $m) {
                $bienvenida[$m->descripcion] = $m->link;
            }

//        return [$grados];
            return view('plan', ["data" => $grados, "extra" => $bienvenida, "nabvar"=>true]);
        }
        else{
            return abort(404);
        }
    }
}
