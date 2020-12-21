<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'IndexController@show');
Route::get('/plan/{plan}', 'PlanController@show');
Route::get('/plan/{plan}/grado/{grado}', 'GradoController@show');
Route::get('/plan/{plan}/grado/{grado}/materia/{materia}', 'DetalleController@show');
Route::get('/submateria/{plan}/{grado}/{materia}/{submateria}', 'SubmateriaController@show');
Route::get('/detalle/{plan}/{grado}/{materia}/{semana}', 'AjaxDetalleController@show');

//Route::get('/plan/{plan}/grado/{grado}', function ($plan, $grado){
//    $pivot = GradosMateriasPlanes::with('planes','grados','materias')
//        ->where('plan_id',$plan)
//        ->where('grado_id',$grado)
//        ->get();
//
//    if($pivot->isEmpty()) abort(404,'error');
//    return $pivot;
    //    return \App\GradosMateriasPlanes::where('grado_id',$grado);
//});

//Route::get('/primaria', 'PrimariaController@show');
//Route::get('/secundaria', 'SecundariaController@show');


//Route::get('/test', function (){
//    return view('test');
//});

//Route::get('/inicial/{grado}', function (Grado $grado){
//    return $grado->findOrFail(1);
//    //    return \App\GradosMateriasPlanes::where('grado_id',$grado);
//});
