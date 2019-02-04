<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\maquina1;

use App\proceso2;


class editController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $maquina1 = new proceso2();
        $maquina1->id = $request->id;
        $maquina1->programada = $request->programada;
        $maquina1->entrega = $request->entrega;
        $maquina1->folio = $request->folio;
        $maquina1->nombre = $request->nombre;
        $maquina1->unidades = $request->unidades;
        $maquina1->proyecto = $request->proyecto;
        $maquina1->material = $request->material;
        $maquina1->estado = $request->estado;
        $maquina1->urgencia = $request->urgencia;
        $maquina1->horas = $request->horas;
        $maquina1->horasH = $request->horasH;
        $maquina1->horasM = $request->horasM;

        $maquina1->save();

        return view('historialesMaquinas.historialMaquina1');
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
        //funcion para poder llamar los datos al formulario de vuelta
        $maquina1 = maquina1::findOrFail($id);
        return view('proceso2.proceso2',compact('maquina1'));
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
    }
}
