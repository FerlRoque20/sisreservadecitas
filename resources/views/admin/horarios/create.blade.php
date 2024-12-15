@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>REGISTRO DE UN NUEVO HORARIO</h1>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Registra la información</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- Formulario en el lado izquierdo -->
                        <div class="col-md-3">
                            <form action="{{ url('/admin/horarios/create') }}" class="needs-validation" novalidate method="POST">
                                @csrf
                                <div class="row">

                                <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="area_id">Área</label>
                                            <select name="area_id" id="area_select" class="form-control">
                                                <option value="">Seleccionar Area</option>
                                                @foreach($areas as $area)
                                                    <option value="{{$area->id}}">{{$area->ubicacion . " - " . $area->especialidad}}</option>
                                                @endforeach
                                            </select>   

                                            <script>
                                                $('#area_select').on('change',function () {
                                                    var area_id = $('#area_select').val();
                                                    //alert(area_id);
                                                    
                                                    if(area_id){
                                                        $.ajax({
                                                            url: "{{url('/admin/horarios/areas/')}}" + '/' + area_id,
                                                            type: 'GET',
                                                            success: function (data) {
                                                                $('#area_info').html(data);
                                                            },
                                                            error: function () {
                                                                alert('Error al obtener los datos del consultorio'); 
                                                            }
                                                        });
                                                    }else{
                                                        $('#area_info').html('');
                                                    }
                                                });
                                            </script>

                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="encargado_id">Encargados</label>
                                            <select name="encargado_id" class="form-control">
                                                @foreach($encargados as $encargado)
                                                    <option value="{{$encargado->id}}">{{$encargado->nombres . " " . $encargado->apellidos. " - " .$encargado->especialidad}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="dia">Día</label> <b>*</b>
                                            <select name="dia" id="dia" class="form-control">
                                                <option value="LUNES">LUNES</option>
                                                <option value="MARTES">MARTES</option>
                                                <option value="MIÉRCOLES">MIÉRCOLES</option>
                                                <option value="JUEVES">JUEVES</option>
                                                <option value="VIERNES">VIERNES</option>
                                                <option value="SÁBADO">SÁBADO</option>
                                                <option value="DOMINGO">DOMINGO</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="hora_inicio">Hora Inicio</label> <b>*</b>
                                            <input type="time" value="{{old('hora_inicio')}}" name="hora_inicio" class="form-control" required>
                                            @error('hora_inicio')
                                                <small style="color:red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="hora_fin">Hora Fin</label> <b>*</b>
                                            <input type="time" value="{{old('hora_fin')}}" name="hora_fin" class="form-control" required>
                                            @error('hora_fin')
                                                <small style="color:red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Registrar Nuevo</button>
                                            <a href="{{ url('admin/horarios') }}" class="btn btn-secondary">Cancelar</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- Tabla con el horario a la derecha -->
                        <div class="col-md-9 order-md-last">
                            <div id="area_info">

                            </div> 
                        </div>
                    </div>
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
