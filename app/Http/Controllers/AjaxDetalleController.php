<?php

namespace App\Http\Controllers;
use App\RecursosLinks;
use App\Secciones;
use Illuminate\Support\Facades\Request;


class AjaxDetalleController extends Controller
{
    public function show($plan, $grado, $materia, $semana){

        if(Request::ajax()){
            $recursos = RecursosLinks::with('secciones')->where('semana_id',$semana)->get();
            foreach ($recursos AS $rec){
                $data[$rec->seccion_id]["seccion"] =$rec->secciones->descripcion;
                $data[$rec->seccion_id]["data"][] = ["titulo"=>$rec->titulo,
                    "link"=>$rec->link,
                    "tipo_contenido"=>$rec->tipo_contenido,
                    "img"=>$rec->img];

//                $data[$rec->seccion_id][][0] ="Asd";
//                $data[$rec->seccion_id][][1] = ["seccion"=>$rec->secciones->descripcion,
//                    "data"=>["titulo"=>$rec->titulo,
//                        "link"=>$rec->link,
//                        "tipo_contenido"=>$rec->tipo_contenido,
//                        "img"=>$rec->img]];
            }
//            return $data;
            return view('detalle_ajax', ['data'=>$data]);
        }
        else{
            abort(404,'No se encontro el detalle');
//            dd("asdasd");
        }
//        dd(Request::ajax());
//        dd("1111");
        return true;
    }
}
