<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\maquina1;

class listaMaquinaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



/*crear un controlador ejemplo php artisan make:controller maquinaController*/




//vistas de listas de cada maquina
public function listaMaquina1()
{
    /**
     * Modificated by  Victor_Hugo Date: 03-February-2019
     */
    //esta linea es para llamar a todos los datos de la tabla
    //Sentencia de la clase collection para el filtrado de datos segun el tipo de estado
    $maquina1 =  maquina1::whereIn('estado',['Proceso','Trabajo'])->orderBy('created_at','desc')->get();  
     //esta linea manda los datos a la vista maquina1
     //Ordenado del listado segun la fecha de creacion
    dd($maquina1);
    return view('listasMaquinas/listaMaquina1') -> with(['maquina1'=>$maquina1]);
}
//termina vistas de listas de cada maquina



public function homeListas()
{
    return view('listasMaquinas.homelistas');
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
        $maquina1 = maquina1::findOrFail($id);
        return view('editarlistas.editarlista1',compact('maquina1'));
        
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
        //funcion para poder actualizar los datos del formulario de lista maquina1

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
        return view('listasMaquinas.listaMaquina1');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       //para eliminar
       maquina1::destroy($id);
       return back();
    }
}
