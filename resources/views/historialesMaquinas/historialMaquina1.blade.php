
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
                                @if(isset($maquina1))
                                @foreach($maquina1 as $m1)     
                                <table class="table">
                                
                            
                                <thead class="thead-dark">
                                    <tr>
                                    
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Programada</th>
                                    <th scope="col">Unidades</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Proceso 1.2</th>
                                    <th scope="col">Editar</th>
                                 
                                    </tr>
                                </thead>
                            
                                <tbody>
                            
                                    <tr>
                                    <th scope="row">{{$m1->id}}</th>
                                    <td>{{$m1->nombre}}</td>
                                    <td>{{$m1->programada}}</td>
                                    <td>{{$m1->unidades}}</td>
                                    <td>{{$m1->estado}}</td>
                                    
                                    
                                    <td><a  href="editables/{{ $m1->id }}/edit" class="btn btn-primary">Proceso </a></td>

                                    <td><a  href="historiales/{{ $m1->id }}/edit" class="btn btn-primary">Editar </a></td>



                                    
                                    
                                </tbody>

                                
                                </table>
                                @endforeach
                            @endif
        </div>
    </div>
</div>
@endsection