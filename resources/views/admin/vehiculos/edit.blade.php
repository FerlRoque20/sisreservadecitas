@extends('layouts.admin')
@section('content')
    <div class = "row">
        <h1>REGISTRE SU VEHICULO</h1>
    </div>

    <hr>
    <div class="row">
        <div class="col-md-12">
        <div class="card card-outline card-success">
            <div class="card-header">
                <h3 class="card-title">Registra la información</h3>
            </div>
            <div class="card-body">
                <form action="{{url('admin/vehiculos',$vehiculo->id)}}"  method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Marca</label> <b>*</b>
                                <input type="text" value="{{$vehiculo->marca}}" name="marca" class="form-control" required>

                                @error('marca')
                                <small style="color:red">{{ $message }}</small>
                                @enderror

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Modelo</label> <b>*</b>
                                <input type="text" value="{{$vehiculo->modelo}}" name="modelo" class="form-control" required>

                                @error('modelo')
                                <small style="color:red">{{ $message }}</small>
                                @enderror

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Año</label> <b>*</b>
                                <input type="text" value="{{$vehiculo->año}}" name="año" class="form-control" required>

                                @error('año')
                                <small style="color:red">{{ $message }}</small>
                                @enderror

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Color</label> <b>*</b>
                                <input type="text" value="{{$vehiculo->color}}" name="color" class="form-control" required>

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
                                <label for="">Placa</label> <b>*</b>
                                <input type="number" value="{{$vehiculo->placa}}" name="placa" class="form-control" required>

                                @error('placa')
                                <small style="color:red">{{ $message }}</small>
                                @enderror

                            </div>
                        </div>

                        <div class="col-md-9">
                            <div class="form-group">
                                <label for="tipo_conbustible">Tipo de Combustible</label> <b>*</b>
                                <select name="tipo_conbustible" id="tipo_conbustible" class="form-control" required>
                                    <option value="gasolina" @selected($vehiculo->tipo_conbustible == 'gasolina')>Gasolina</option>
                                    <option value="diesel" @selected($vehiculo->tipo_conbustible == 'diesel')>Diesel</option>
                                    <option value="gnv" @selected($vehiculo->tipo_conbustible == 'gnv')>Gas Natural Vehicular (GNV)</option>
                                    <option value="glp" @selected($vehiculo->tipo_conbustible == 'glp')>Gas Licuado de Petróleo (GLP)</option>
                                    <option value="electrico" @selected($vehiculo->tipo_conbustible == 'electrico')>Eléctrico</option>
                                    <option value="hibrido" @selected($vehiculo->tipo_conbustible == 'hibrido')>Híbrido (Gasolina + Eléctrico)</option>
                                </select>
                            </div>
                        </div>

                    </div>

                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="from group">
                                <a href="{{url('admin/vehiculos')}}" class='btn btn-secondary'>Cancelar</a>
                                <button type='submit' class='btn btn-success'>Actualizar Vehiculo</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection