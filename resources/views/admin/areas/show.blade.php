@extends('layouts.admin')
@section('content')
    <div class = "row">
        <h1>Area: {{$area->id}}</h1>
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
                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">N° Celular</label> 
                                <p>{{$area->celular}}</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Disponibilidad</label> <b>*</b>
                                <p>{{$area->disponibilidad}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Especialidad</label> <b>*</b>
                                <p>{{$area->especialidad}}</p>
                            </div>
                        </div>                    
                    <br>
                        <div class="col-md-12">
                            <div class="from group">
                                <label for="">Ubicacion</label> <b>*</b>
                                <p>{{$area->ubicacion}}</p>
                            
                            </div>
                        </div>
                    
                        <div class="col-md-12">
                            <div class="from group">
                                <a href="{{url('admin/areas')}}" class='btn btn-secondary'>Volver</a>                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection