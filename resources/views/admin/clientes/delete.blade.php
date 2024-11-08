@extends('layouts.admin')
@section('content')
    <div class = "row">
        <h1>Cliente: {{$cliente->nombres}} {{$cliente->apellidos}}</h1>
    </div>
 
    <hr>
    <div class="row">
        <div class="col-md-12">
        <div class="card card-outline card-info">
            <div class="card-header">
            <h3 class="card-title">¿Estas seguro que desea eliminar este registro?</h3>
            </div>
            <div class="card-body">
            <form action="{{url('/admin/clientes',$cliente->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="row">
                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Nombres</label>
                                <p>{{$cliente->nombres}}</p>
 
                            </div>
                        </div>
 
                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Apellidos</label>
                                <p>{{$cliente->apellidos}}</p>
 
                            </div>
                        </div>
 
                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Nro de DNI</label>
                                <p>{{$cliente->dni}}</p>
 
                            </div>
                        </div>
 
                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Celular</label>
                                <p>{{$cliente->celular}}</p>
 
                            </div>
                        </div>
                    </div>
 
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Fecha de Nacimiento</label>
                                <p>{{$cliente->fecha_nacimiento}}</p>
 
                            </div>
                        </div>
 
                        <div class="col-md-9">
                            <div class="from group">
                            <label for="">Email</label>
                            <p>{{$cliente->correo}}</p>
 
                            </div>
                        </div>
 
                    </div>
 
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="from group">
                                <label for="">Direccion</label>
                                <p>{{$cliente->direccion}}</p>
                           
                            </div>
                        </div>
                    </div>
 
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="from group">
                                <a href="{{url('admin/clientes')}}" class='btn btn-secondary'>Volver</a>
                                <button type='submit' class='btn btn-danger'>Eliminar Cliente</button>
                            </div>
                        </div>
                    </div>
                </form>                
            </div>
        </div>
    </div>
</div>
 
@endsection