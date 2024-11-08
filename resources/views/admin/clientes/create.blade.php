@extends('layouts.admin')
@section('content')
    <div class = "row">
        <h1>REGISTRO DE UN NUEVO CLIENTE</h1>
    </div>

    <hr>
    <div class="row">
        <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Registra la información</h3>
            </div>
            <div class="card-body">
                <form action="{{url('/admin/clientes/create')}}" class="needs-validation" novalidate  method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Nombres</label> <b>*</b>
                                <input type="text" value="{{old('nombres')}}" name="nombres" class="form-control" required>

                                @error('nombres')
                                <small style="color:red">{{ $message }}</small>
                                @enderror

                                <div class="invalid-feedback">Error: Es necesario ingresar un nombre. Por favor, revisa e inténtalo nuevamente.</div>

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Apellidos</label> <b>*</b>
                                <input type="text" value="{{old('apellidos')}}" name="apellidos" class="form-control" required>

                                @error('apellidos')
                                <small style="color:red">{{ $message }}</small>
                                @enderror

                                <div class="invalid-feedback">Error: Es necesario ingresar un apellido. Por favor, revisa e inténtalo nuevamente.</div>

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Nro de DNI</label> <b>*</b>
                                <input type="text" value="{{old('dni')}}" name="dni" class="form-control" required>

                                @error('dni')
                                <small style="color:red">{{ $message }}</small>
                                @enderror

                                <div class="invalid-feedback">Error: Ingrese un numero de DNI. Por favor, revisa e inténtalo nuevamente.</div>

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Celular</label> <b>*</b>
                                <input type="text" value="{{old('celular')}}" name="celular" class="form-control" required>

                                @error('celular')
                                <small style="color:red">{{ $message }}</small>
                                @enderror

                                <div class="invalid-feedback">Error: Ingrese un numero de Telefono. Por favor, revisa e inténtalo nuevamente.</div>

                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Fecha de Nacimiento</label> <b>*</b>
                                <input type="date" value="{{old('fecha_nacimiento')}}" name="fecha_nacimiento" class="form-control" required>

                                @error('fecha_nacimiento')
                                <small style="color:red">{{ $message }}</small>
                                @enderror

                                <div class="invalid-feedback">Error: Es necesario ingresar su Fecha de Nacimiento. Por favor, revisa e inténtalo nuevamente.</div>

                            </div>
                        </div>

                        <div class="col-md-9">
                            <div class="from group">
                            <label for="">Email</label> <b>*</b>
                                <input type="email" name="correo" class="form-control" required>
                                
                                @error('correo')
                                <small style="color:red">{{ $message }}</small>
                                @enderror

                                <div class="invalid-feedback">Error: Debes proporcionar una dirección de correo electrónico. Revisa e intenta de nuevo.</div>
                            
                            </div>
                        </div>

                    </div>

                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="from group">
                                <label for="">Direccion</label>
                                <input type="address" value="{{old('direccion')}}" name="direccion" class="form-control">

                                @error('direccion')
                                <small style="color:red">{{ $message }}</small>
                                @enderror

                            
                            </div>
                        </div>
                    </div>


                   

                    
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="from group">
                                <a href="{{url('admin/clientes')}}" class='btn btn-secondary'>Cancelar</a>
                                <button type='submit' class='btn btn-primary'>Registar Nuevo</button>
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

                </form>
            </div>
        </div>
    </div>
</div>

@endsection