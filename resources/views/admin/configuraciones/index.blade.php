@extends('layouts.admin')
@section('content')

<div class = "row">
  <h1>LISTADO DE CONFIGURACION</h1>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">configuraciones Registradas</h3>
                <div class="card-tools">
                    <a href="{{url('admin/configuraciones/create')}}" class="btn btn-primary">
                        Registar Nuevo
                    </a>
                </div>
            </div>
            <div class="card-body"> 
                <table id= "example1" class="table table-striped table-bordered table-hover table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th style = "text-align: center">Nro</th>
                            <th style = "text-align: center">TALLER AUTOMOTRIZ</th>
                            <th style = "text-align: center">DIRECCION</th>
                            <th style = "text-align: center">TELEFONO</th>
                            <th style = "text-align: center">CORREO</th>                
                            <th style = "text-align: center">LOGO</th>
                            <th style = "text-align: center">ACCIONES</th>
                        </tr>
                    </thead>
                <tbody>
                    <?php $contador = 1; ?>
                    @foreach($configuraciones as $configuracione)
                        <tr>
                            <td style = "text-align: center">{{ $contador++ }}</td>
                            <td>{{ $configuracione->nombre}}</td>
                            <td>{{ $configuracione->direccion}}</td>
                            <td>{{ $configuracione->telefono}}</td>
                            <td>{{ $configuracione->correo}}</td>
                            <td>
                                <img src="{{ url('storage/' . $configuracione->logo) }}" alt="logo" width="100px">
                            </td>


                        <td style="text-align: center">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href ="{{url('admin/configuraciones/'.$configuracione->id)}}" type="button" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                                <a href ="{{url('admin/configuraciones/'.$configuracione->id.'/edit')}}" type="button" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                                <a href ="{{url('admin/configuraciones/'.$configuracione->id.'/confirm-delete')}}" type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
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
                            "info": "Mostrando _START_ a _END_ de _TOTAL_ configuracione",
                            "infoEmpty": "Mostrando 0 a 0 de 0 configuracione",
                            "infoFiltered": "(Filtrado de _MAX_ total configuracione)",
                            "infoPostFix": "",
                            "thousands": ",",
                            "lengthMenu": "Mostrar _MENU_ configuracione",
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