<?php
?>

<h3><center><b>Horario de atencion del Area de la {{$area->ubicacion}}</b></center></h3>
<hr>
<table class="table table-striped table-hover table-sm table-bordered" style="font-size: 15px; text-align: center">
                                    <thead>
                                        <tr style="text-align: center">
                                            <th>HORA</th>
                                            <th>LUNES</th>
                                            <th>MARTES</th>
                                            <th>MIÉRCOLES</th>
                                            <th>JUEVES</th>
                                            <th>VIERNES</th>
                                            <th>SÁBADO</th>
                                            <th>DOMINGO</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $horas = [
                                                '08:00:00 - 09:00:00', '09:00:00 - 10:00:00', '10:00:00 - 11:00:00',
                                                '11:00:00 - 12:00:00', '12:00:00 - 13:00:00', '13:00:00 - 14:00:00',
                                                '14:00:00 - 15:00:00', '15:00:00 - 16:00:00', '16:00:00 - 17:00:00',
                                                '17:00:00 - 18:00:00', '18:00:00 - 19:00:00'
                                            ];

                                            $diasSemana = ['LUNES', 'MARTES', 'MIÉRCOLES', 'JUEVES', 'VIERNES', 'SÁBADO', 'DOMINGO'];
                                        @endphp
                                        @foreach ($horas as $hora)
                                            @php
                                                list($hora_inicio, $hora_fin) = explode(' - ', $hora);
                                            @endphp
                                            <tr>
                                                <td>{{ $hora }}</td>
                                                @foreach ($diasSemana as $dia)
                                                    @php
                                                        $nombre_encargado = '';
                                                        foreach ($horarios as $horario) {
                                                            if (strtoupper($horario->dia) == $dia &&
                                                                $hora_inicio >= $horario->hora_inicio &&
                                                                $hora_fin <= $horario->hora_fin) {
                                                                $nombre_encargado = $horario->encargado->nombres . " " . $horario->encargado->apellidos;
                                                                break;
                                                            }
                                                        }
                                                    @endphp
                                                    <td>{{ $nombre_encargado }}</td>
                                                @endforeach
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>