@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>Area: {{$area->especialidad}}</h1>
    </div>

    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title">Información Registrada</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">N° Celular</label>
                                <p class="form-control-plaintext">{{$area->celular}}</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Disponibilidad</label>
                                <p class="form-control-plaintext">{{$area->disponibilidad}}</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Especialidad</label>
                                <p class="form-control-plaintext">{{$area->especialidad}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Ubicación</label>
                                <p class="form-control-plaintext">{{$area->ubicacion}}</p>
                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="col-md-12">
                        <div class="form-group">
                            <a href="{{ url('admin/areas') }}" class="btn btn-secondary">Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
