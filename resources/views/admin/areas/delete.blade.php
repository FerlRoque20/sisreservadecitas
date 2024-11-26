@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>Area: {{$area->especialidad}}</h1>
    </div>

    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">¿Estas seguro que desea eliminar este registro?</h3>
                </div>
                <div class="card-body">
                    <form action="{{url('admin/areas',$area->id)}}"  method="POST">
                        @csrf
                        @method('DELETE')
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
                            <a href="{{ url('admin/areas') }}" class="btn btn-secondary">Cancelar</a>
                            <button type='submit' class='btn btn-danger'>Eliminar Area</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
