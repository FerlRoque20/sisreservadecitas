@extends('layouts.admin')
@section('content')
    <div class = "row">
        <h1>Encargado: {{$encargado->nombres." ".$encargado->apellidos}}</h1>
    </div>

    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title">Registra la información</h3>
                </div>
                <div class="card-body">
                <form action="{{url('admin/encargados',$encargado->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Nombres</label>
                                    <input type="text" value="{{$encargado->nombres}}" name="nombres" class="form-control" required>

                                    @error('nombres')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror

                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Apellidos</label>
                                    <input type="text" value="{{$encargado->apellidos}}" name="apellidos" class="form-control" required>

                                    @error('apellidos')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror

                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Nro de Celular</label>
                                    <input type="number" value="{{$encargado->celular}}" name="celular" class="form-control" required>

                                    @error('celular')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror

                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Especialidad</label>
                                    <input type="text" value="{{$encargado->especialidad}}" name="especialidad" class="form-control" required>

                                    @error('especialidad')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror

                                </div>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" value="{{$encargado->user->email}}" name="email" class="form-control" required>
                                    
                                    @error('email')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Contraseña</label>
                                    <input type="password" name="password" class="form-control" required>
                                    
                                    @error('password')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror

                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Verificar contraseña</label>
                                    <input type="password" name="password_confirmation" class="form-control" required>

                                    @error('password_confirmation')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror

                                </div>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <a href="{{ url('admin/encargados') }}" class="btn btn-secondary">Cancelar</a>
                                    <button type="submit" class="btn btn-success">Actualizar Encargado</button>
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
