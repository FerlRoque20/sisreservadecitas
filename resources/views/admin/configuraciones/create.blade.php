@extends('layouts.admin')
@section('content')
    <div class="row">
        <h1>REGISTRO DE UNA NUEVA CONFIGURACION</h1>
    </div>

    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    <h3 class="card-title">Registro de una nueva Configuración</h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('/admin/configuraciones/create') }}" class="needs-validation" novalidate method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">NOMBRE DEL TALLER AUTOMOTRIZ</label> <b>*</b>
                                            <input type="text" value="{{ old('nombre') }}" name="nombre" class="form-control" required>
                                            @error('nombre')
                                                <small style="color:red">{{ $message }}</small>
                                            @enderror
                                            <div class="invalid-feedback">Error: Es necesario ingresar un Nombre. Por favor, revisa e inténtalo nuevamente.</div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">DIRECCION</label> <b>*</b>
                                            <input type="address" value="{{ old('direccion') }}" name="direccion" class="form-control" required>
                                            @error('direccion')
                                                <small style="color:red">{{ $message }}</small>
                                            @enderror
                                            <div class="invalid-feedback">Error: Es necesario ingresar una Direccion. Por favor, revisa e inténtalo nuevamente.</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">TELEFONO</label> <b>*</b>
                                            <input type="text" value="{{ old('telefono') }}" name="telefono" class="form-control" required>
                                            @error('telefono')
                                                <small style="color:red">{{ $message }}</small>
                                            @enderror
                                            <div class="invalid-feedback">Error: Es necesario ingresar un Numero de Celular. Por favor, revisa e inténtalo nuevamente.</div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">CORREO ELECTRONICO</label> <b>*</b>
                                            <input type="email" value="{{ old('correo') }}" name="correo" class="form-control" required>
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
                                    <input type="file" id="file" name="logo" class="form-control">
                                    <hr>
                                    <center><output id="list"></output></center>
                                    <script>
                                        function archivo(evt) {
                                            var files = evt.target.files; // FileList object
                                            // Obtenemos la imagen del campo "file".
                                            for (var i = 0, f; f = files[i]; i++) {
                                                // Solo admitimos imágenes.
                                                if (!f.type.match('image.*')) {
                                                    continue;
                                                }

                                                var reader = new FileReader();
                                                reader.onload = (function(theFile) {
                                                    return function(e) {
                                                        // Insertamos la imagen
                                                        document.getElementById("list").innerHTML = [
                                                            '<img class="thumb thumbnail" src="' + e.target.result +
                                                            '" width="70%" title="' + escape(theFile.name) + '"/>'
                                                        ].join('');
                                                    };
                                                })(f);
                                                reader.readAsDataURL(f);
                                            }
                                        }
                                        document.getElementById('file').addEventListener('change', archivo, false);
                                    </script>
                                </div>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{ url('admin/configuraciones') }}" class="btn btn-secondary">Cancelar</a>
                                    <button type="submit" class="btn btn-primary">Registrar Nuevo</button>
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
