@extends('layouts.admin')

@section('content')
    <div class="row">
        <h1>Modificar área: {{$area->especialidad}} </h1>
    </div>

    <hr>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-success">
                <div class="card-header">
                    <h3 class="card-title">Modifica la información</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.areas.update', $area->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">N° Celular</label> <b>*</b>
                                    <input type="text" value="{{ $area->celular }}" name="celular" class="form-control" required>

                                    @error('celular')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Disponibilidad</label> <b>*</b>
                                    <select name="disponibilidad" class="form-control">
                                        @if($area->disponibilidad == 'DISPONIBLE')
                                            <option value="disponible">DISPONIBLE</option>
                                            <option value="ocupado">OCUPADO</option>
                                        @else
                                            <option value="ocupado">OCUPADO</option>
                                            <option value="disponible">DISPONIBLE</option>
                                        @endif
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Especialidad</label> <b>*</b>
                                    <input type="text" value="{{ $area->especialidad }}" name="especialidad" class="form-control" required>

                                    @error('especialidad')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Ubicación</label> <b>*</b>
                                    <input type="text" value="{{ $area->ubicacion }}" name="ubicacion" class="form-control">

                                    @error('ubicacion')
                                        <small style="color:red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <br>
                        <div class="col-md-12">
                            <div class="form-group">
                                <a href="{{ url('admin/areas') }}" class="btn btn-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-primary">Guardar Modificación</button>
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
