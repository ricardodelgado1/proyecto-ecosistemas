<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Licencia;
use Illuminate\Http\Request;

class APILicenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Licencia::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $li = new Licencia();
        $li->nombre = $request->nombre;
        $li->solicitante = $request->solicitante;
        $li->fecha = $request->fecha;
        $li->departamento = $request->departamento;
        $li->tipo = $request->tipo;
        $li->estado = $request->estado;
        $result = $li->save();
        return response()->json([
        'msg'=>'Licencia creada Correctamente!']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $licencia= Licencia::findOrFail($id);
        return $licencia;


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $licencia= Licencia::findOrFail($id);
        $licencia->nombre = $request->nombre;
        $licencia->solicitante = $request->solicitante;
        $licencia->fecha = $request->fecha;
        $licencia->departamento = $request->departamento;
        $licencia->tipo = $request->tipo;
        $licencia->estado = $request->estado;


        $licencia->save();

        return response()->json([Licencia::findOrFail($id),
        'msg'=>'La licencia ha sido actualizada!']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $licencia = Licencia::findOrFail($id);
        $licencia->delete();

        return response()->json(['error'=>false,
        'msg'=>'La licencia ha sido eliminada!']);

    }
}
