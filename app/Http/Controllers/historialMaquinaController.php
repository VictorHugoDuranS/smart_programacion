<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\maquina1;

class historialMaquinaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    
/*crear un controlador ejemplo php artisan make:controller maquinaController*/




    //vistas para el historial de cada maquina 
    public function historialMaquina1()
    {
        //esta linea es para llamar a todos los datos de la tabla
     $maquina1 = maquina1::all();    //esta linea manda los datos a la vista maquina1
     return view('historialesMaquinas/historialMaquina1') -> with(['maquina1'=>$maquina1]);
    }

   // termina vistas para el historial de las maquinas




public function homeHistoriales()
{
    return view('historialesMaquinas.homeHistoriales');
}




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
        //funcion para poder llamar los datos al formulario de vuelta
        $maquina1 = maquina1::findOrFail($id);
        return view('editarhistoriales.editarhistorial1',compact('maquina1'));

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
        //funcion para "guardar los datos que se van actualizar"

        $maquina1 = maquina1::findOrFail($id);
        $maquina1->programada=$request->programada;
        $maquina1->entrega=$request->entrega;
        $maquina1->folio=$request->folio;
        $maquina1->nombre=$request->nombre;
        $maquina1->unidades=$request->unidades;
        $maquina1->proyecto=$request->proyecto;
        $maquina1->material=$request->material;
        $maquina1->estado=$request->estado;
        $maquina1->urgencia=$request->urgencia;
        $maquina1->horas=$request->horas;
        
        
        $maquina1->save();
        return view('historialesMaquinas.historialMaquina1');

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
