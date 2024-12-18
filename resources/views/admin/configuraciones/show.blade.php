@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>DATOS DE LA CONFIGURACION</h1>
    </div>

    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">Datos Registrados</h3>
                </div>
                <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">NOMBRE DEL TALLER AUTOMOTRIZ</label>
                                            <p>{{$configuracion->nombre}}</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">DIRECCION</label> <b>*</b>
                                            <p>{{$configuracion->direccion}}</p>

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">TELEFONO</label> <b>*</b>
                                            <p>{{$configuracion->telefono}}</p>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">CORREO ELECTRONICO</label> <b>*</b>
                                            <p>{{$configuracion->correo}}</p>

                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="file">LOGOTIPO</label>
                                    <center>
                                        <img src="{{ url('storage/' . $configuracion->logo) }}" alt="logo" width="100px">
                                    </center>
                                    
                                </div>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{ url('admin/configuraciones') }}" class="btn btn-secondary">Volver</a>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
@endsection
