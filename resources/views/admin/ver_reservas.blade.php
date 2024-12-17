@extends('layouts.admin')
@section('content')

<div class = "row">
  <h1>LISTADO DE RESERVAS</h1>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Reservas Registradas en ADS MOTORS</h3>
            </div>
            <div class="card-body"> 
                <table id= "example1" class="table table-striped table-bordered table-hover table-sm">
                    <thead class="thead-dark">
                        <tr>
                            <th style = "text-align: center">Nro</th>
                            <th style = "text-align: center">ENCARGADO</th>
                            <th style = "text-align: center">ESPECCIALIDAD</th>
                            <th style = "text-align: center">FECHA DE RESERVA</th>
                            <th style = "text-align: center">HORA DE RESERVA</th>
                            <th style = "text-align: center">FECHA Y HORA DEL REGISTRO</th>
                            <th style = "text-align: center">ACCIONES</th>
                        </tr>
                    </thead>
                <tbody>
                    <?php $contador = 1; ?>
                    @foreach($eventos as $evento)
                        <tr>
                            <td style="text-align: center">{{ $contador++ }}</td>
                            <td style="text-align: center">{{ $evento->encargado->nombres." - ".$evento->encargado->apellidos }}</td>
                            <td style="text-align: center">{{ $evento->encargado->especialidad }}</td>
                            <td style="text-align: center">{{ \Carbon\Carbon::parse($evento->start)->format('y-m-d') }}</td>
                            <td style="text-align: center">{{ \Carbon\Carbon::parse($evento->start)->format('H:i') }}</td>
                            <td style="text-align: center">{{$evento->created_at}}</td>
                            <td style="text-align: center">
                            
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <form action="{{url('/admin/eventos/destroy', $evento->id)}}" 
                                id="formulario{{$evento->id}}" onclick="preguntar{{$evento->id}}(event)" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </div>

                            <script>
                                function preguntar{{$evento->id}}(event) {
                                    event.preventDefault();
                                    Swal.fire({
                                        title: "Esta seguro de Eliminar este Registro de Reserva?",
                                        text: "Si eliminina este Registro, otro usuario podra reservar en este mismo horario",
                                        icon: "question",
                                        showDenyButton: true,
                                        showCancelButton: false,
                                        confirmButtonText: "Eliminar",
                                        denyButtonText: `Cancelar`
                                    }).then((result) => {
                                        /* Read more about isConfirmed, isDenied below */
                                        if (result.isConfirmed) {
                                            var form = $('#formulario{{$evento->id}}');
                                            form.submit();
                                        }
                                    });
                                }
                            </script>

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
                            "info": "Mostrando _START_ a _END_ de _TOTAL_ reservas",
                            "infoEmpty": "Mostrando 0 a 0 de 0 reservas",
                            "infoFiltered": "(Filtrado de _MAX_ total reservas)",
                            "infoPostFix": "",
                            "thousands": ",",
                            "lengthMenu": "Mostrar _MENU_ reservas",
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