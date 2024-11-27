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
                    <form action="{{ url('/admin/encargados/create') }}" class="needs-validation" novalidate method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="dia">Día</label> <b>*</b>
                                    <select name="dia" id="dia" class="form-control" required>
                                        <option value="lunes">LUNES</option>
                                        <option value="martes">MARTES</option>
                                        <option value="miercoles">MIÉRCOLES</option>
                                        <option value="jueves">JUEVES</option>
                                        <option value="viernes">VIERNES</option>
                                        <option value="sabado">SÁBADO</option>
                                        <option value="domingo">DOMINGO</option>
                                    </select>

                                    @error('dia')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="fecha_inicio">Hora Inicio</label> <b>*</b>
                                    <input type="time" name="fecha_inicio" class="form-control" required>

                                    @error('fecha_inicio')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror

                                    <div class="invalid-feedback">Error: Es necesario ingresar un Hora Inicio. Por favor, revisa e inténtalo nuevamente.</div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="fecha_fin">Hora Fin</label> <b>*</b>
                                    <input type="time" name="fecha_fin" class="form-control" required>

                                    @error('fecha_fin')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror

                                    <div class="invalid-feedback">Error: Es necesario ingresar un Hora Fin. Por favor, revisa e inténtalo nuevamente.</div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="encargado_id">Encargados</label> <b>*</b>
                                    <select name="encargado_id" class="form-control" required>
                                        @foreach($encargados as $encargado)
                                            <option value="{{$encargado->id}}">{{$encargado->nombres . " " . $encargado->apellidos}}</option>
                                        @endforeach
                                    </select>

                                    @error('encargado_id')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="area_id">Áreas</label> <b>*</b>
                                    <select name="area_id" class="form-control" required>
                                        @foreach($areas as $area)
                                            <option value="{{$area->id}}">{{$area->especialidad . " " . $area->ubicacion}}</option>
                                        @endforeach
                                    </select>

                                    @error('area_id')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{ url('admin/encargados') }}" class="btn btn-secondary">Cancelar</a>
                                    <button type="submit" class="btn btn-primary">Registrar Nuevo</button>
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
