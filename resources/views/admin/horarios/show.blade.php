@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>DATOS DEL HORARIO</h1>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">DATOS REGISTRADOS</h3>
                </div>
                <div class="card-body">
                    
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Encargados</label>
                                    <p>{{$horario->encargado->nombres." ".$horario->encargado->apellidos. " " . " - " .$horario->encargado->especialidad}}</p>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Área</label>
                                    <p>{{$horario->area->ubicacion}}</p>
                                </div>
                            </div>

                        </div>

                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Día</label>
                                    <p>{{$horario->dia}}</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Hora Inicio</label>
                                    <p>{{$horario->hora_inicio}}</p>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Hora Fin</label>
                                    <p>{{$horario->hora_fin}}</p>
                                </div>
                            </div>



                        </div>

                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{ url('admin/horarios') }}" class="btn btn-secondary">Volver</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        (() => {
            'use strict'

            const forms = document.querySelectorAll('.needs-validation')

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