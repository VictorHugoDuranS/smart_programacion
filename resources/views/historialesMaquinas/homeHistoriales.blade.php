@extends('layouts.global')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div >
                <div></div>

                <div><br><br>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif




                <h2>Aqui se muestran los historiales de cada maquina existente</h2>

                <br><br><br>
                <div class="row">
                <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                <img  class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Historial de la Maquina 1</h5>
                    <p class="card-text">listado de las piezas en proceso</p>
                    <a href="{{ route('historialMaquina1') }}" class="btn btn-primary">Ver</a>
                </div>
                </div>
                </div>
                

                <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                <img src=".../.../" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Historial de la Maquina 2</h5>
                    <p class="card-text">listado de las piezas en proceso</p>
                    <a href="#" class="btn btn-primary">Ver</a>
                </div>
                </div>
                </div>


                <div class="col-lg-4">
                <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Historial de la Maquina 3</h5>
                    <p class="card-text">listado de las piezas en proceso</p>
                    <a href="#" class="btn btn-primary">Ver</a>
                </div>
                </div>
                </div>

                </div>


                </div>   
            </div>
        </div> 
    </div>
</div>
@endsection