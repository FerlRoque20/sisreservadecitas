@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>ELIMINAR CONFIGURACION</h1>
    </div>

    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title">¿Estas seguro que desea eliminar este Configuracion?</h3>
                </div>
                <div class="card-body">
                    <form action="{{url('admin/configuraciones',$configuracion->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('DELETE')

                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">NOMBRE DEL TALLER AUTOMOTRIZ</label> <b>*</b>
                                            <input type="text" value="{{$configuracion->nombre}}" name="nombre" class="form-control" disabled>
                                            @error('nombre')
                                                <small style="color:red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">DIRECCION</label> <b>*</b>
                                            <input type="address" value="{{$configuracion->direccion}}" name="direccion" class="form-control" disabled>
                                            @error('direccion')
                                                <small style="color:red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">TELEFONO</label> <b>*</b>
                                            <input type="text" value="{{$configuracion->telefono}}" name="telefono" class="form-control" disabled>
                                            @error('telefono')
                                                <small style="color:red">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">CORREO ELECTRONICO</label> <b>*</b>
                                            <input type="email" value="{{$configuracion->correo}}" name="correo" class="form-control" disabled>
                                            @error('correo')
                                                <small style="color:red">{{ $message }}</small>
                                            @enderror
                                            <div class="invalid-feedback">Error: Es necesario ingresar un Correo Electronico. Por favor, revisa e inténtalo nuevamente.</div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="file">LOGOTIPO</label>
                                    <hr>
                                    <center>
                                        <output id="list">
                                            <img src="{{ url('storage/' . $configuracion->logo) }}" alt="logo" width="100px">
                                        </output>
                                    </center>
                                    
                                </div>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{ url('admin/configuraciones') }}" class="btn btn-secondary">Cancelar</a>
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
@endsection
