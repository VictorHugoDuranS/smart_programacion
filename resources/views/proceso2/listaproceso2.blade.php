
@extends('layouts.listasMaquinas')

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

                    
                         
                                    
                                    
                        </div>
                    </div>                   
                </div>
            </div>
                                @if(isset($proceso2))
                                @foreach($proceso2 as $m1)     
                                <table class="table">
                                
                            
                                <thead class="thead-dark">
                                    <tr>
                                    
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Programada</th>
                                    <th scope="col">Entrega</th>
                                    <th scope="col">Folio</th>
                                    <th scope="col">Unidades</th>
                                    <th scope="col">Proyecto</th>
                                    <th scope="col">Material</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Urgencia</th>
                                    <th scope="col">Horas</th>
                                    <th scope="col">HorasH</th>
                                    <th scope="col">HorasM</th  >
                                 
                                    </tr>
                                </thead>
                            
                                <tbody>
                            
                                    <tr>
                                    <th scope="row">{{$m1->id}}</th>
                                    <td>{{$m1->nombre}}</td>
                                    <td>{{$m1->programada}}</td>
                                    <td>{{$m1->entrega}}</td>
                                    <td>{{$m1->folio}}</td>
                                    <td>{{$m1->unidades}}</td>
                                    <td>{{$m1->proyecto}}</td>
                                    <td>{{$m1->material}}</td>
                                    <td>{{$m1->estado}}</td>
                                    <td>{{$m1->urgencia}}</td>
                                    <td>{{$m1->horas}}</td>
                                    <td>{{$m1->horasH}}</td>
                                    <td>{{$m1->horasM}}</td>
                                    
                                    
                                    


                                    
                                    
                                </tbody>

                                
                                </table>
                                @endforeach
                            @endif
        </div>
    </div>
</div>
@endsection