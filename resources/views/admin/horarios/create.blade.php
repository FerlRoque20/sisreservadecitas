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
                                            <label for="area_id">Área</label>
                                            <select name="area_id" class="form-control">
                                                @foreach($areas as $area)
                                                    <option value="{{$area->id}}">{{$area->especialidad . " - " . $area->ubicacion}}</option>
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
                            <table style="font-size: 13px; text-align: center" class="table table-striped table-hover table-sm table-bordered">
                                <thead>
                                    <tr>
                                        <th>HORA</th>
                                        <th>LUNES</th>
                                        <th>MARTES</th>
                                        <th>MIERCOLES</th>
                                        <th>JUEVES</th>
                                        <th>VIERNES</th>
                                        <th>SABADO</th>
                                        <th>DOMINGO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $horas = ['08:00:00 - 09:00:00', '09:00:00 - 10:00:00', '10:00:00 - 11:00:00',
                                            '11:00:00 - 12:00:00', '12:00:00 - 13:00:00', '13:00:00 - 14:00:00',
                                            '14:00:00 - 15:00:00', '15:00:00 - 16:00:00', '16:00:00 - 17:00:00',
                                            '17:00:00 - 18:00:00', '18:00:00 - 19:00:00'];

                                    $diasSemana = ['LUNES', 'MARTES', 'MIÉRCOLES', 'JUEVES', 'VIERNES', 'SÁBADO', 'DOMINGO'];
                                    @endphp
                                    @foreach ($horas as $hora)
                                        @php
                                        list($hora_inicio,$hora_fin) = explode(' - ',$hora);
                                        @endphp
                                        <tr>
                                            <td>{{$hora}}</td>
                                            @foreach($diasSemana as $dia)
                                                @php
                                                $nombre_encargado = '';
                                                foreach ($horarios as $horario){
                                                    if(strtoupper($horario->dia) == $dia &&
                                                    $hora_inicio >= $horario->hora_inicio &&
                                                    $hora_fin <= $horario->hora_fin ){
                                                    $nombre_encargado = $horario->encargado->nombres." ".$horario->encargado->apellidos;
                                                    break;
                                                    }
                                                }
                                                @endphp
                                                <td>{{$nombre_encargado}}</td>
                                            @endforeach
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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
