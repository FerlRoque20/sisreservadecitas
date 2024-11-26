@extends('layouts.admin')
@section('content')
    <div class = "row">
        <h1>ELIMINAR VEHICULO</h1>
    </div>

    <hr>
    <div class="row">
        <div class="col-md-12">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">¿Estas seguro que desea eliminar este registro?</h3>
            </div>
            <div class="card-body">
                <form action="{{url('admin/vehiculos',$vehiculo->id)}}"  method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="row">
                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Marca</label>
                                <input type="text" value="{{$vehiculo->marca}}" name="marca" class="form-control" disabled>

                                @error('marca')
                                <small style="color:red">{{ $message }}</small>
                                @enderror

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Modelo</label>
                                <input type="text" value="{{$vehiculo->modelo}}" name="modelo" class="form-control" disabled>

                                @error('modelo')
                                <small style="color:red">{{ $message }}</small>
                                @enderror

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Año</label>
                                <input type="text" value="{{$vehiculo->año}}" name="año" class="form-control" disabled>

                                @error('año')
                                <small style="color:red">{{ $message }}</small>
                                @enderror

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Color</label>
                                <input type="text" value="{{$vehiculo->color}}" name="color" class="form-control" disabled>

                                @error('color')
                                <small style="color:red">{{ $message }}</small>
                                @enderror

                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Placa</label>
                                <input type="text" value="{{$vehiculo->placa}}" name="placa" class="form-control" disabled>

                                @error('placa')
                                <small style="color:red">{{ $message }}</small>
                                @enderror

                            </div>
                        </div>

                        <div class="col-md-9">
                            <div class="from group">
                                <label for="">Tipo de Combustible</label>
                                <input type="text" value="{{$vehiculo->tipo_conbustible}}" name="direccion" class="form-control" disabled>

                                @error('tipo_conbustible')
                                <small style="color:red">{{ $message }}</small>
                                @enderror

                            </div>
                        </div>

                    </div>

                   
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="from group">
                                <a href="{{url('admin/vehiculos')}}" class='btn btn-secondary'>Cancelar</a>
                                <button type='submit' class='btn btn-danger'>Eliminar Secretario</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection