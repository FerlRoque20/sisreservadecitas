@extends('layouts.admin')
@section('content')
    <div class = "row">
        <h1>ELIMINAR SECRETARIO: {{$secretaria->nombres}} {{$secretaria->apellidos}}</h1>
    </div>

    <hr>
    <div class="row">
        <div class="col-md-12">
        <div class="card card-danger">
            <div class="card-header">
                <h3 class="card-title">¿Estas seguro que desea eliminar este registro?</h3>
            </div>
            <div class="card-body">
                <form action="{{url('admin/secretarias',$secretaria->id)}}"  method="POST">
                    @csrf
                    @method('DELETE')
                    <div class="row">
                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Nombres</label>
                                <input type="text" value="{{$secretaria->nombres}}" name="nombres" class="form-control" disabled>

                                @error('nombres')
                                <small style="color:red">{{ $message }}</small>
                                @enderror

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Apellidos</label>
                                <input type="text" value="{{$secretaria->apellidos}}" name="apellidos" class="form-control" disabled>

                                @error('apellidos')
                                <small style="color:red">{{ $message }}</small>
                                @enderror

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Nro de DNI</label>
                                <input type="text" value="{{$secretaria->dni}}" name="dni" class="form-control" disabled>

                                @error('dni')
                                <small style="color:red">{{ $message }}</small>
                                @enderror

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Celular</label>
                                <input type="text" value="{{$secretaria->celular}}" name="celular" class="form-control" disabled>

                                @error('celular')
                                <small style="color:red">{{ $message }}</small>
                                @enderror

                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Fecha de Nacimiento</label>
                                <input type="date" value="{{$secretaria->fecha_nacimiento}}" name="fecha_nacimiento" class="form-control" disabled>

                                @error('fecha_nacimiento')
                                <small style="color:red">{{ $message }}</small>
                                @enderror

                            </div>
                        </div>

                        <div class="col-md-9">
                            <div class="from group">
                                <label for="">Direccion</label>
                                <input type="address" value="{{$secretaria->direccion}}" name="direccion" class="form-control" disabled>

                                @error('direccion')
                                <small style="color:red">{{ $message }}</small>
                                @enderror

                            </div>
                        </div>

                    </div>

                    <br>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="from group">
                                <label for="">Email</label>
                                <input type="email" value="{{$secretaria->user->email}}" name="email" class="form-control" disabled>
                                
                                @error('email')
                                <small style="color:red">{{ $message }}</small>
                                @enderror
                            
                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="from group">
                                <a href="{{url('admin/secretarias')}}" class='btn btn-secondary'>Cancelar</a>
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