<?php

namespace App\Http\Controllers;

use App\GradosMateriasPlanes;
use App\PlanesEducativos;


class IndexController extends Controller
{
    public function show(){

//        $test = GradosMateriasPlanes::with('planes','grados','materias')->where('grado_id','2')->get();
//        return PlanesEducativos::get();
        $planes = PlanesEducativos::withMultimediaPlan()->get();
//        foreach($planes AS $plan){
//            echo $plan->getImg()->get()->first()->link.'<br/>';
//            echo $plan->getImg()->toSql().'<br/>';
//        }
//        dd($planes);
//        return [$planes];
        return view('index',['data'=>$planes]);
    }
}