@extends('layouts.admin')
@section('content')
    <div class = "row">
        <h1>REGISTRE SU VEHICULO</h1>
    </div>

    <hr>
    <div class="row">
        <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Registra la información</h3>
            </div>
            <div class="card-body">
                <form action="{{url('/admin/vehiculos/create')}}" class="needs-validation" novalidate  method="POST">
                    @csrf
                    <div class="row">

                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Marca</label> <b>*</b>
                                <input type="text" value="{{old('marca')}}" name="marca" class="form-control" required>

                                @error('marca')
                                <small style="color:red">{{ $message }}</small>
                                @enderror

                                <div class="invalid-feedback">Error: Es necesario ingresar la Marca del Vehiculo. Por favor, revisa e inténtalo nuevamente.</div>

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Modelo</label> <b>*</b>
                                <input type="text" value="{{old('modelo')}}" name="modelo" class="form-control" required>

                                @error('modelo')
                                <small style="color:red">{{ $message }}</small>
                                @enderror

                                <div class="invalid-feedback">Error: Es necesario ingresar el Modelo del Vehiculo. Por favor, revisa e inténtalo nuevamente.</div>

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Año</label> <b>*</b>
                                <input type="number" value="{{old('año')}}" name="año" class="form-control" required>

                                @error('año')
                                <small style="color:red">{{ $message }}</small>
                                @enderror

                                <div class="invalid-feedback">Error: Ingrese el Año del Vehiculo. Por favor, revisa e inténtalo nuevamente.</div>

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Color</label> <b>*</b>
                                <input type="text" value="{{old('color')}}" name="color" class="form-control" required>

                                @error('color')
                                <small style="color:red">{{ $message }}</small>
                                @enderror

                                <div class="invalid-feedback">Error: Ingrese el Color del Vehiculo. Por favor, revisa e inténtalo nuevamente.</div>

                            </div>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="from group">
                                <label for="">Placa</label> <b>*</b>
                                <input type="text" value="{{old('placa')}}" name="placa" class="form-control" required>

                                @error('placa')
                                <small style="color:red">{{ $message }}</small>
                                @enderror

                                <div class="invalid-feedback">Error: Es necesario la Placa del Vehiculo. Por favor, revisa e inténtalo nuevamente.</div>

                            </div>
                        </div>

                        <div class="col-md-9">
                            <div class="from group">
                            <label for="">Tipo de Combustible</label> <b>*</b>
                                <select name="tipo_conbustible" id="" class="form-control" required>
                                <option value="gasolina">Gasolina</option>
                                <option value="diesel">Diésel</option>
                                <option value="gnv">Gas Natural Vehicular (GNV)</option>
                                <option value="glp">Gas Licuado de Petróleo (GLP)</option>
                                <option value="electrico">Eléctrico</option>
                                <option value="hibrido">Híbrido (Gasolina + Eléctrico)</option>
                                </select>
                            </div>
                        </div>

                    </div>
                    
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="from group">
                                <a href="{{url('admin/vehiculos')}}" class='btn btn-secondary'>Cancelar</a>
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