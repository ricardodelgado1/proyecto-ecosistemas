<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estadistica;

class EstadisticasController extends Controller
{
    //
    // public function getEstadistica()
    // {
    //     return view('estadisticas.index');

    // }

    public function index(){
        $licencias = Estadistica::all();

        $puntos = [];
        foreach($licencias as $licencia){
            $puntos[]= ['name'=>$licencia['nombre'],'y'=> floatval($licencia['porcentaje'])];
        }
        return view("estadisticas.index",["data"=>json_encode($puntos)]);
    }

}
