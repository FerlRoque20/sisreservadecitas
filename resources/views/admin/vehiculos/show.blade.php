@extends('layouts.admin')
@section('content')
    <div class = "row">
        <h1>REGISTRE SU VEHICULO</h1>
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
                                <label for="">Marca</label>
                                <p>{{$vehiculo->marca}}</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Modelo</label>
                                <p>{{$vehiculo->modelo}}</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Año</label>
                                <p>{{$vehiculo->año}}</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Color</label>
                                <p>{{$vehiculo->color}}</p>
                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Placa</label>
                                <p>{{$vehiculo->placa}}</p>
                            </div>
                        </div>

                        <div class="col-md-9">
                            <div class="from group">
                                <label for="">Tipo de Combustible</label>
                                <p>{{$vehiculo->tipo_conbustible}}</p>
                            </div>
                        </div>

                    </div>
                                   
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="from group">
                                <a href="{{url('admin/vehiculos')}}" class='btn btn-secondary'>Cancelar</a>

                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>

@endsection