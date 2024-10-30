@extends('layouts.admin')
@section('content')

<div class = "row">
  <h1>LISTADO DE SECRETARIA</h1>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Secretarios Registrados</h3>
                <div class="card-tools">
                    <a href="{{url('admin/secretarias/create')}}" class="btn btn-primary">
                        Registar Nuevo
                    </a>
                </div>
            </div>
            <div class="card-body"> 
                <table id= "example1" class="table table-striped table-bordered table-hover table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th style = "text-align: center">Nro</th>
                            <th style = "text-align: center">NOMBRES</th>
                            <th style = "text-align: center">APELLIDOS</th>
                            <th style = "text-align: center">DNI</th>
                            <th style = "text-align: center">CELULAR</th>
                            <th style = "text-align: center">FECHA DE NACIMIENTO</th>
                            <th style = "text-align: center">DIRECCION</th>
                            <th style = "text-align: center">EMAIL</th>
                            <th style = "text-align: center">ACCIONES</th>
                        </tr>
                    </thead>
                <tbody>
                    <?php $contador = 1; ?>
                    @foreach($secretarias as $secretaria)
                        <tr>
                            <td style = "text-align: center">{{ $contador++ }}</td>
                            <td>{{ $secretaria->nombres }}</td>
                            <td>{{ $secretaria->apellidos }}</td>
                            <td>{{ $secretaria->dni }}</td>
                            <td>{{ $secretaria->celular }}</td>
                            <td>{{ $secretaria->fecha_nacimiento }}</td>
                            <td>{{ $secretaria->direccion }}</td>
                            <td>{{ $secretaria->user->email }}</td>

                        <td style="text-align: center">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href ="{{url('admin/secretarias/'.$secretaria->id)}}" type="button" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                                <a href ="{{url('admin/secretarias/'.$secretaria->id.'/edit')}}" type="button" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                                <a href ="{{url('admin/secretarias/'.$secretaria->id.'/confirm-delete')}}" type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                            </div>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
                
                
                <script>
                    $(function () {
                        $("#example1").DataTable({
                            "pageLength": 10,
                            "language": {
                                "emptyTable": "No hay información",
                                "info": "Mostrando _START_ a _END_ de _TOTAL_ Secretarios",
                                "infoEmpty": "Mostrando 0 a 0 de 0 Secretarios",
                                "infoFiltered": "(Filtrado de _MAX_ total Secretarios)",
                                "infoPostFix": "",
                                "thousands": ",",
                                "lengthMenu": "Mostrar _MENU_ Secretarios",
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
</div>

@endsection