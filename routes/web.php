<?php
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//aqui van las rutas para las maquinas
//ruta para la vista de la maquina1
Route::get('maquina1', 'maquinaController@maquina1')->name('maquina1');
//final de la ruta para la vista de la maquina1

//aqui terminan las rutas de las maquinas 

 //vista para el proceso 2
Route::get('listaproceso2', 'proceso2Controller@listaproceso2')->name('listaproceso2');
 //termina la ruta para el proceso 2


//aqui van las rutas de las listas de piezas de cada maquina
//ruta para la vista de la lista de la maquina1
Route::get('listaMaquina1', 'listaMaquinaController@listaMaquina1')->name('listaMaquina1');
//final de la ruta para la vista de la maquina 1

//aqui termina las rutas de las listas de piezas de cada maquina


//ruta para la vista del homeMaquinas donde se muestran para escoger una maquina predeterminada
route::get('homeMaquinas', 'maquinaController@homeMaquinas')->name('homeMaquinas');
//termina la ruta para el homeMaquinas


//ruta para homelista donde se mostraran las listas de todas las maquinas
route::get('homeListas', 'listaMaquinaController@homeListas')->name('homeListas');
//termina la ruta para el homelista


route::get('homeHistoriales', 'historialMaquinaController@homeHistoriales')->name('homeHistoriales');





//aqui van las rutas para el historial de cada maquina
//ruta del historial de la maquina1
Route::get('historialMaquina1', 'historialMaquinaController@historialMaquina1')->name('historialMaquina1');
//aqui termina la ruta del historial de la maquina 1


//aqui terminan las rutas para el historia de cada maquina




//aqui van todas las rutas para insertar en las maquinas
Route::resource('/maquinas','maquinaController');
//aqui terminan las rutas pra insertar en las maquinas




//crea todas las rutas para listas controller
Route::resource('/listas','listaMaquinaController');
//genera para crear, eliminar, actualizar


//crea todas las rutas para listas controller
Route::resource('/historiales','historialMaquinaController');
//genera para crear, eliminar, actualizar

//crea todas las rutas para listas controller
Route::resource('/editables','editController');
//genera para crear, eliminar, actualizar
