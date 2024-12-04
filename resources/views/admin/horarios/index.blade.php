@extends('layouts.admin')
@section('content')

<div class="row">
  <h1>LISTADO DE HORARIOS</h1>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Horarios Registrados</h3>
                <div class="card-tools">
                    <a href="{{ url('admin/horarios/create') }}" class="btn btn-primary">
                        Registar Nuevo
                    </a>
                </div>
            </div>
            <div class="card-body"> 
                <table id="example1" class="table table-striped table-bordered table-hover table-sm">
                    <thead class="thead-dark">
                        <tr style="text-align: center">
                            <th>Nro</th>
                            <th>ENCARGADO</th>
                            <th>ESPECIALIDAD</th>
                            <th>AREA</th>
                            <th>DIA DE ATENCION</th>
                            <th>HORA DE INICIO</th>
                            <th>HORA FIN</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $contador = 1; ?>
                        @foreach($horarios as $horario)
                            <tr style="text-align: center">
                                <td>{{ $contador++ }}</td>
                                <td>{{ $horario->encargado->nombres . " " . $horario->encargado->apellidos }}</td>
                                <td>{{ $horario->encargado->especialidad }}</td>
                                <td>{{ $horario->area->ubicacion }}</td>
                                <td>{{ $horario->dia }}</td>
                                <td>{{ $horario->hora_inicio }}</td>
                                <td>{{ $horario->hora_fin }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <a href="{{ url('admin/horarios/'.$horario->id) }}" class="btn btn-info btn-sm">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{ url('admin/horarios/'.$horario->id.'/edit') }}" class="btn btn-success btn-sm">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <a href="{{ url('admin/horarios/'.$horario->id.'/confirm-delete') }}" class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <hr>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-outline card-primary">
                            <div class="card-header">
                                <h3 class="card-title">CALENDARIO DE ATENCION DE ENCARGADOS</h3>
                            </div>
                            <div class="card-body">

                                <div class="row">
                                    <div class="form-group">
                                        <label for="area_id">Área</label>
                                            <select name="area_id" id="area_select" class="form-control">
                                                @foreach($areas as $area)
                                                    <option value="{{$area->id}}">{{$area->especialidad . " - " . $area->ubicacion}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                </div>

                                <script>
                                    $('#area_select').on('change',function () {
                                        var area_id = $('#area_select').val();
                                        //alert(area_id);
                                        var url = "{{route('admin.horarios.cargar_datos_areas',':id')}}";
                                        url = url.replace(':id',area_id);
                                        if(area_id){
                                            $.ajax({
                                                url: url,
                                                type: 'GET',
                                                success: function (data) {
                                                    $('#area_info').html(data);
                                                },
                                                error: function () {
                                                    alert('Error al obtener los datos del consultorio'); 
                                                }
                                            });
                                        }else{
                                            $('#area_info').html('');
                                        }
                                    });
                                </script>
                                <div id="area_info">

                                </div>      

                                
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    $(function () {
                        $("#example1").DataTable({
                            "pageLength": 10,
                            "language": {
                                "emptyTable": "No hay información",
                                "info": "Mostrando _START_ a _END_ de _TOTAL_ horarios",
                                "infoEmpty": "Mostrando 0 a 0 de 0 horarios",
                                "infoFiltered": "(Filtrado de _MAX_ total horarios)",
                                "lengthMenu": "Mostrar _MENU_ horarios",
                                "loadingRecords": "Cargando...",
                                "processing": "Procesando...",
                                "search": "Buscador:",
                                "zeroRecords": "Sin resultados encontrados",
                                "paginate": {
                                    "first": "Primero",
                                    "last": "Último",
                                    "next": "Siguiente",
                                    "previous": "Anterior"
                                }
                            },
                            "responsive": true,
                            "lengthChange": true,
                            "autoWidth": false,
                            buttons: [{
                                extend: 'collection',
                                text: 'Reportes',
                                orientation: 'landscape',
                                buttons: [{
                                    text: 'Copiar',
                                    extend: 'copy',
                                }, {
                                    extend: 'pdf'
                                }, {
                                    extend: 'csv'
                                }, {
                                    extend: 'excel'
                                }, {
                                    text: 'Imprimir',
                                    extend: 'print'
                                }]
                            }, {
                                extend: 'colvis',
                                text: 'Visor de columnas',
                                collectionLayout: 'fixed three-column'
                            }]
                        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                    });
                </script>
            </div>
        </div>
    </div>

    <hr>
</div>

@endsection
