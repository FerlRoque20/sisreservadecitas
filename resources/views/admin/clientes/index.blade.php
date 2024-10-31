@extends('layouts.admin')
@section('content')

<div class = "row">
  <h1>LISTADO DE CLIENTES</h1>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Clientes Registrados</h3>
                <div class="card-tools">
                    <a href="{{url('admin/clientes/create')}}" class="btn btn-primary">
                        Registar Nuevo
                    </a>
                </div>
            </div>
            <div class="card-body"> 
                <table id= "example1" class="table table-striped table-bordered table-hover table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th style = "text-align: center">Nro</th>
                            <th style = "text-align: center">NOMBRE Y APELLIDOS</th>
                            <th style = "text-align: center">DNI</th>
                            <th style = "text-align: center">CELULAR</th>
                            <th style = "text-align: center">FECHA DE NACIMIENTO</th>
                            <th style = "text-align: center">DIRECCION</th>
                            <th style = "text-align: center">CORREO</th>
                            <th style = "text-align: center">ACCIONES</th>
                        </tr>
                    </thead>
                <tbody>
                    <?php $contador = 1; ?>
                    @foreach($clientes as $cliente)
                        <tr>
                            <td style = "text-align: center">{{ $contador++ }}</td>
                            <td>{{ $cliente->nombres}} {{ $cliente->apellidos}}</td>
                            <td>{{ $cliente->dni}}</td>
                            <td>{{ $cliente->celular}}</td>
                            <td>{{ $cliente->fecha_nacimiento}}</td>
                            <td>{{ $cliente->direccion}}</td>
                            <td>{{ $cliente->correo}}</td>
                        <td style="text-align: center">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href ="{{url('admin/clientes/'.$cliente->id)}}" type="button" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                                <a href ="{{url('admin/clientes/'.$cliente->id.'/edit')}}" type="button" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                                <a href ="{{url('admin/clientes/'.$cliente->id.'/confirm-delete')}}" type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
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
                            "info": "Mostrando _START_ a _END_ de _TOTAL_ Clientes",
                            "infoEmpty": "Mostrando 0 a 0 de 0 Clientes",
                            "infoFiltered": "(Filtrado de _MAX_ total Clientes)",
                            "infoPostFix": "",
                            "thousands": ",",
                            "lengthMenu": "Mostrar _MENU_ Clientes",
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




            <!--  <script defer>
                    $(document).ready(function () {
                        const dataTableConfig = {
                            pageLength: 10,
                            responsive: true,
                            lengthChange: true,
                            autoWidth: false,
                            language: {
                                emptyTable: "No hay información",
                                info: "Mostrando _START_ a _END_ de _TOTAL_ Usuarios",
                                infoEmpty: "Mostrando 0 a 0 de 0 Usuarios",
                                infoFiltered: "(Filtrado de _MAX_ total Usuarios)",
                                lengthMenu: "Mostrar _MENU_ Usuarios",
                                loadingRecords: "Cargando...",
                                processing: "Procesando...",
                                search: "Buscador:",
                                zeroRecords: "Sin resultados encontrados",
                                paginate: {
                                    first: "Primero",
                                    last: "Último",
                                    next: "Siguiente",
                                    previous: "Anterior"
                                }
                            },
                            buttons: [
                                {
                                    extend: 'collection',
                                    text: 'Reportes',
                                    buttons: [
                                        { text: 'Copiar', extend: 'copy' },
                                        { extend: 'pdf' },
                                        { extend: 'csv' },
                                        { extend: 'excel' },
                                        { text: 'Imprimir', extend: 'print' }
                                    ]
                                },
                                {
                                    extend: 'colvis',
                                    text: 'Visor de columnas',
                                    collectionLayout: 'fixed three-column'
                                }
                            ]
                        };

                        // Inicializar la DataTable con la configuración
                        const table = $("#example1").DataTable(dataTableConfig);

                        // Mover los botones al contenedor adecuado
                        table.buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
                    });
                </script>
-->

            </div>
        </div>
    </div>
</div>

@endsection