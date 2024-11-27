@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>Encargado: {{$encargado->nombre}} {{$encargado->apellido}}</h1>
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
                                <label for="">Nombres y apellidos</label>
                                <p class="form-control-plaintext">{{$encargado->nombre}} {{$encargado->apellido}}</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">N° Celular</label>
                                <p class="form-control-plaintext">{{$encargado->especialidad}}</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Especialidad</label>
                                <p class="form-control-plaintext">{{$encargado->especialidad}}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="">Correo</label>
                                <p class="form-control-plaintext">{{$encargado->user->email}}</p>
                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="col-md-12">
                        <div class="form-group">
                            <a href="{{ url('admin/encargados') }}" class="btn btn-secondary">Volver</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
