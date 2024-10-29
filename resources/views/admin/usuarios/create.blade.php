@extends('layouts.admin')
@section('content')
    <div class = "row">
        <h1>REGISTRO DE UN NUEVO USUARIO</h1>
    </div>

    <hr>
    <div class="row">
        <div class="col-md-6">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Registra la información</h3>
            </div>
            <div class="card-body">
                <form action="{{url('/admin/usuarios/create')}}" class="needs-validation" novalidate  method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="from group">
                                <label for="">Nombre del Usuario</label> <b>*</b>
                                <input type="text" name="name" class="form-control" required>

                                @error('name')
                                <small style="color:red">{{ $message }}</small>
                                @enderror

                                <div class="invalid-feedback">Error: Es necesario ingresar un nombre. Por favor, revisa e inténtalo nuevamente.</div>

                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="from group">
                                <label for="">Email</label> <b>*</b>
                                <input type="email" name="email" class="form-control" required>
                                
                                @error('email')
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
                                <label for="">Contraseña</label> <b>*</b>
                                <input type="password" name=password class="form-control" required>
                                
                                @error('password')
                                <small style="color:red">{{ $message }}</small>
                                @enderror

                                <div class="invalid-feedback">Error: Es necesario ingresar una contraseña. Por favor, inténtalo nuevamente.</div>
                            
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="from group">
                                <label for="">Verificar contraseña</label> <b>*</b>
                                <input type="password" name="password_confirmation" class="form-control" required>

                                @error('password_confirmation')
                                <small style="color:red">{{ $message }}</small>
                                @enderror

                                <div class="invalid-feedback">Error: Es necesario ingresar una contraseña. Por favor, inténtalo nuevamente.</div>
                            
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="from group">
                                <a href="{{url('admin/usuarios')}}" class='btn btn-secondary'>Cancelar</a>
                                <button type='submit' class='btn btn-primary'>Registar Usuario</button>
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