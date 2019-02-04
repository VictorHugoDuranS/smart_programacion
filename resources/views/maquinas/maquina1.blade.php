@extends('layouts.maquinas')

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




                        <!--para que pueda mandar el formulario se necesita el metodo POST y la accion que lleve consigo la ruta del metodo guardar, 
                    se debe de hace una ruta para esto y esta en web.php donde se crean todas las rutas existentes-->                                 
                    <form class="needs-validation" method="POST" action="{{route('maquinas.store')}}">
                    

                    <!--para poder insertar datos se necesita enviar un token, laravel es extricto con esto asi que no debe faltal -->
                    {!! csrf_field() !!}
                    <!--aqui termina el token y es solo una linea de comandos que se necesita  -->

                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                        <label for="validationCustom01">Día Programada</label>
                        <input type="date" name="programada" class="form-control" id="validationCustom01"  required>
                        <div class="valid-feedback">
                            Campo lleno!!!
                        </div>
                        </div>
                        <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Día Entrega</label>
                        <input type="date" name="entrega" class="form-control" id="validationCustom02"   required>
                        <div class="valid-feedback">
                        Campo lleno!!!
                        </div>
                        </div>

                        <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Folio</label>
                        <input type="text" name="folio" class="form-control" id="validationCustom02"   required>
                        <div class="valid-feedback">
                        Campo lleno!!!
                        </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                        <label for="validationCustom03">Nombre Pieza</label>
                        <input type="text" name="nombre" class="form-control" id="validationCustom03"  required>
                        <div class="valid-feedback">
                        Campo lleno!!!
                        </div>

                        </div>
                        <div class="col-md-3 mb-3">
                        <label for="validationCustom04">Unidades</label>
                        <input type="number" name="unidades" class="form-control" id="validationCustom04"  required>
                        
                        </div>
                        <div class="col-md-3 mb-3">
                        <label for="validationCustom05">Nombre Proyecto</label>
                        <input type="text" name="proyecto" class="form-control" id="validationCustom05"  required>        
                    </div>
                    </div>
                   
                    

                    <div class="form-row">
                       <div class="col-md-3 mb-3">
                        <label for="validationCustom03">Material</label>
                      
                        <select class="custom-select"  name="material" id="validationCustom03"  required>
                        <option selected>Material</option>
                        <option >Aluminio</option>
                        <option >Madera</option>
                        <option >Acero</option>
                        </select>

                       </div>
                       <div class="col-md-3 mb-3">
                        <label for="validationCustom03">Estado</label>
                      
                        <select class="custom-select" name="estado" id="validationCustom03"  required>
                        <option selected>estado</option>
                        <option >Proceso</option>
                        <option >Retrabajo</option>
                        
                        </select>
                       </div>

                       <div class="col-md-3 mb-3">
                        <label for="validationCustom03">Urgencia</label>
                      
                        <select class="custom-select" name="urgencia" id="validationCustom03"  required>
                        <option selected>Urgencia</option>
                        <option >Regular</option>
                        <option >Urgente</option>  
                        </select>
                       </div>
                    </div>


                    <div class="form-row">
                        
                        <div class="col-md-2 mb-2">
                        <label for="validationCustom04">Horas</label>
                        <input type="number" name="horas" class="form-control" id="validationCustom04"  required>                      
                        </div>

                    </div>
                    <br>
                    <div class="form-row">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>

                                    
                    </form>


                    <script>
                    // Example starter JavaScript for disabling form submissions if there are invalid fields
                    (function() {
                    'use strict';
                    window.addEventListener('load', function() {
                        // Fetch all the forms we want to apply custom Bootstrap validation styles to
                        var forms = document.getElementsByClassName('needs-validation');
                        // Loop over them and prevent submission
                        var validation = Array.prototype.filter.call(forms, function(form) {
                        form.addEventListener('submit', function(event) {
                            if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                            }
                            form.classList.add('was-validated');
                        }, false);
                        });
                    }, false);
                    })();
                    </script>

</div>
@endsection