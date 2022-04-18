<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estadistica;
use App\Models\Estado;
use App\Models\Solicitude;

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
        //return view("estadisticas.index",["data"=>json_encode($puntos)]);

        $estados = Estado::all();


        $puntos2 = [];
        foreach($estados as $estado){
            $puntos2[]= ['name'=>$estado['nombre'],'y'=> floatval($estado['porcentaje'])];
        }

        $solicitudes = Solicitude::all();


        $puntos3 = [];
        foreach($solicitudes as $solicitud){
            $puntos3[]= ['name'=>$solicitud['nombre'],'y'=> floatval($solicitud['porcentaje'])];
        }
        return view("estadisticas.index",["data"=>json_encode($puntos),"data2"=>json_encode($puntos2),"data3"=>json_encode($puntos3)]);
    }

}
