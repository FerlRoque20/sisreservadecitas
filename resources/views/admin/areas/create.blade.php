@extends('layouts.admin')
@section('content')
    <div class = "row">
        <h1>REGISTRO DE UN NUEVO AREA</h1>
    </div>

    <hr>
    <div class="row">
        <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Registra la información</h3>
            </div>
            <div class="card-body">
               <form action="{{ route('admin.areas.store') }}" class="needs-validation" novalidate method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">N° Celular</label> <b>*</b>
                                <input type="text" value="{{old('celular')}}" name="celular" class="form-control" required>

                                @error('celular')
                                <small style="color:red">{{ $message }}</small>
                                @enderror

                                <div class="invalid-feedback">Error: Es necesario ingresar un numero. Por favor, revisa e inténtalo nuevamente.</div>

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Disponibilidad</label> <b>*</b>
                                <select name="disponibilidad" id="" class="form-control">
                                    <option value="disponible">DISPONIBLE</option>
                                    <option value="ocupado">OCUPADO</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Especialidad</label> <b>*</b>
                                <input type="text" value="{{old('especialidad')}}" name="especialidad" class="form-control" required>

                                @error('especialidad')
                                <small style="color:red">{{ $message }}</small>
                                @enderror

                                <div class="invalid-feedback">Error: Ingrese un numero de especialidad. Por favor, revisa e inténtalo nuevamente.</div>

                            </div>
                        </div>                    
                    <br>
                        <div class="col-md-12">
                            <div class="from group">
                                <label for="">Ubicacion</label> <b>*</b>
                                <input type="address" value="{{old('ubicacion')}}" name="ubicacion" class="form-control">

                                @error('ubicacion')
                                <small style="color:red">{{ $message }}</small>
                                @enderror

                            
                            </div>
                        </div>
                    
                        <div class="col-md-12">
                            <div class="from group">
                                <a href="{{url('admin/areas')}}" class='btn btn-secondary'>Cancelar</a>
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