<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Http\requests;

use App\maquina1;

class maquinaController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    /*crear un controlador ejemplo php artisan make:controller maquinaController  */


    

//vistas maquinas 
//comienza vista de la maquina 1
    public function maquina1()
    {
        //esta linea es para llamar a todos los datos de la tabla
        $maquina1 = maquina1::all();    //esta linea manda los datos a la vista maquina1
        return view('maquinas.maquina1') -> with(['maquina1'=>$maquina1]);
    }
 // termina la vista de la maquina1
 
// termina vistas de las maquinas 


public function homeMaquinas()
{
    return view('maquinas.homeMaquinas');
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





     //este apartado de store lo ocupo para hacer la funcion de guardar (insertar datos)
    public function store(Request $request)
    {
        //para insertar los datos

        $maquina1 = new maquina1();
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

        $maquina1->save();
        
        return view('maquinas.maquina1');


    }      
    //este apartado de store lo ocupo para hacer la funcion de guardar (insertar datos)








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
        //creamos una variable del model que es maquina1 y ocupamos find($id) para seleccionar unicamente un id
     $maquina1 = maquina1::find($id);
       //debemos redireccionar los datos a la misma vissta pero con los datos para editar
     return view('editarmaquinas.editarmaquina1')->with(['edit' => true, ' maquina1s'=> $maquina1]);
                                                                //maquina1s es el nombre de la ruta que es get para obtener datos
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
        //para eliminar
        maquina1::destroy($id);
            return back();
    }
}
