@extends('layouts.admin')
@section('content')
    <div class = "row">
        <h1>Secretaria {{$secretaria->nombres}} {{$secretaria->apellidos}} </h1>
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
                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Nombres</label>
                                <p>{{$secretaria->nombres}}</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Apellidos</label>
                                <p>{{$secretaria->apellidos}}</p>

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Nro de DNI</label>
                                <p>{{$secretaria->dni}}</p>

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Celular</label>
                                <p>{{$secretaria->celular}}</p>

                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Fecha de Nacimiento</label>
                                <p>{{$secretaria->fecha_nacimiento}}</p>

                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="from group">
                                <label for="">Direccion</label>
                                <p>{{$secretaria->direccion}}</p>

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Email</label>
                                <p>{{$secretaria->user->email}}</p>

                            </div>
                        </div>
                    </div>                   

                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="from group">
                                <a href="{{url('admin/secretarias')}}" class='btn btn-secondary'>Volver</a>

                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>

@endsection