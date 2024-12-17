@extends('layouts.admin')

@section('content')
<div class="row">
    <h1>
        <b>Bienvenido: </b> {{Auth::user()->email}} / <b>Rol: </b> {{Auth::user()->roles->pluck('name')->first()}}
    </h1>
</div>

<hr>

<div class="row">
    @can('admin.usuarios.index')
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{$total_usuarios}}</h3>
                <p>Usuarios</p>
            </div>
            <div class="icon">
                <i class="ion fas bi bi-file-person"></i>
            </div>
            <a href="{{url('admin/usuarios')}}" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    @endcan

    @can('admin.secretarias.index')
    <div class="col-lg-3 col-6">
        <div class="small-box bg-primary">
            <div class="inner">
                <h3>{{$total_secretarias}}</h3>
                <p>Secretarios</p>
            </div>
            <div class="icon">
                <i class="ion fas fas bi bi-person-circle"></i>
            </div>
            <a href="{{url('admin/secretarias')}}" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    @endcan

    @can('admin.clientes.index')
    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{$total_clientes}}</h3>
                <p>Clientes</p>
            </div>
            <div class="icon">
                <i class="ion fas bi bi-person-fill-check"></i>
            </div>
            <a href="{{url('admin/clientes')}}" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    @endcan

    @can('admin.areas.index')
    <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{$total_areas}}</h3>
                <p>Áreas</p>
            </div>
            <div class="icon">
                <i class="ion fas bi-car-front-fill"></i>
            </div>
            <a href="{{url('admin/areas')}}" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    @endcan

    @can('admin.vehiculos.index')
    <div class="col-lg-3 col-6">
        <div class="small-box bg-secondary">
            <div class="inner">
                <h3>{{$total_vehiculos}}</h3>
                <p>Vehículos</p>
            </div>
            <div class="icon">
                <i class="ion fas bi bi-box-fill"></i>
            </div>
            <a href="{{url('admin/vehiculos')}}" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    @endcan

    @can('admin.encargados.index')
    <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>{{$total_encargados}}</h3>
                <p>Encargados</p>
            </div>
            <div class="icon">
                <i class="ion fas bi-person-video2"></i>
            </div>
            <a href="{{url('admin/encargados')}}" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    @endcan

    @can('admin.encargados.index')
    <div class="col-lg-3 col-6">
        <div class="small-box bg-light">
            <div class="inner">
                <h3>{{$total_horarios}}</h3>
                <p>Horarios</p>
            </div>
            <div class="icon">
                <i class="ion fas bi-calendar-week"></i>
            </div>
            <a href="{{url('admin/horarios')}}" class="small-box-footer">Mas Informacion <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    @endcan
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="card-title">CALENDARIO DE ATENCIÓN DE ENCARGADOS</h3>
                    </div>
                    <div class="col-md-12">
                        <label for="area_id">ÁREAS DISPONIBLES</label>
                        <select name="area_id" id="area_select" class="form-control">
                            <option value="">Seleccione un Área...</option>
                            @foreach($areas as $area)
                                <option value="{{$area->id}}">{{$area->ubicacion . " - " . $area->especialidad}}</option>
                            @endforeach
                        </select>   
                    </div>
                </div>
            </div>

            <div class="card-body">
                <script>
                    $('#area_select').on('change', function () {
                        var area_id = $('#area_select').val();
                        if (area_id) {
                            $.ajax({
                                url: "{{url('/areas/')}}" + '/' + area_id,
                                type: 'GET',
                                success: function (data) {
                                    $('#area_info').html(data);
                                },
                                error: function () {
                                    alert('Error al obtener los datos del consultorio');
                                }
                            });
                        } else {
                            $('#area_info').html('');
                        }
                    });
                </script>
                <div id="area_info"></div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-warning">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="card-title">CALENDARIO DE RESERVAS DE CITAS PARA ADS MOTORS</h3>
                    </div>
                    <div class="col-md-12">
                        <label for="encargado_id">ÁREAS DISPONIBLES</label>
                        <select name="encargado_id" id="encargado_select" class="form-control">
                            <option value="">Seleccione Encargado...</option>
                            @foreach($encargados as $encargado)
                                <option value="{{$encargado->id}}">{{$encargado->nombres . " - " . $encargado->apellidos . " - " . $encargado->especialidad}}</option>
                            @endforeach
                        </select>  

                        <script>
                            $('#encargado_select').on('change', function () {
                                var encargado_id = $('#encargado_select').val();
                                var calendarEl = document.getElementById('calendar');
                                var calendar = new FullCalendar.Calendar(calendarEl, {
                                    initialView: 'dayGridMonth',
                                    locale: 'es',
                                    events: [],
                                });

                                if (encargado_id) {
                                    $.ajax({
                                        url: "{{url('/cargar_reserva_encargados/')}}" + '/' + encargado_id,
                                        type: 'GET',
                                        dataType: 'json',
                                        success: function (data) {
                                            calendar.addEventSource(data);
                                        },
                                        error: function () {
                                            alert('Error al obtener los datos del consultorio');
                                        }
                                    });
                                } else {
                                    $('#encargado_info').html('');
                                }

                                calendar.render();
                            });
                        </script> 
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <button type="button" class="btn btn-primary" data-toggle="modal" style="margin-right: 20px; margin-top: 10px;" data-target="#exampleModal">
                        Reserva tu cita Con ADS MOTORS
                    </button>

                    <a href="{{url('/admin/ver_reservas',Auth::user()->id)}}" class="btn btn-success" style="margin-top: 10px;"> <i class="bi bi-calendar-check"></i> Ver Reservas</a>

                    <form action="{{url('/admin/eventos/create')}}" method="post">
                        @csrf
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Reserva tu cita Con ADS MOTORS</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Encargado</label>
                                                    <select name="encargado_id" id="encargado_select" class="form-control">
                                                        <option value="">Seleccione Encargado...</option>
                                                        @foreach($encargados as $encargado)
                                                            <option value="{{ $encargado->id }}">{{ $encargado->nombres . " - " . $encargado->apellidos . " - " . $encargado->especialidad }}</option>
                                                        @endforeach
                                                    </select>

                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Fecha de reserva</label>
                                                    <input type="date" id="fecha_reserva" value="<?php echo date('Y-m-d'); ?>" name="fecha_reserva" class="form-control">
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="">Hora de reserva</label>
                                                    <input type="time" id="hora_reserva" name="hora_reserva" class="form-control">
                                                    @error('hora_reserva')
                                                        <small style="color:red">{{ $message }}</small>
                                                    @enderror
                                                    @if( (($message = Session::get('hora_reserva'))) )
                                                        <script>
                                                            document.addEventListener('DOMContentLoaded', function(){
                                                                $('#exampleModal').modal('show');
                                                            });
                                                        </script>
                                                        <small style="color:red">{{ $message }}</small>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-primary">Registrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div id='calendar'></div>
            </div>
        </div>
    </div>
</div>

@endsection
