<?php

namespace App\Http\Controllers;

use App\Models\Encargado;
use App\Models\Horario;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'fecha_reserva' => 'required',
            'hora_reserva' => 'required',
        ]);
    
        // Obtener el encargado seleccionado y los datos de la reserva
        $encargado = Encargado::find($request->encargado_id);
        $fecha_reserva = $request->fecha_reserva;
        $hora_reserva = $request->hora_reserva . ':00';
    
        // Traducir el día de la semana
        $dia = date('l', strtotime($fecha_reserva)); // 'l' para obtener el nombre completo del día
        $dia_de_reserva = $this->traducir_dia($dia);
    
        // Verificar si el encargado está disponible en el horario solicitado
        $horarios = Horario::where('encargado_id', $encargado->id)
            ->where('dia', $dia_de_reserva)
            ->where('hora_inicio', '<=', $hora_reserva)
            ->where('hora_fin', '>=', $hora_reserva)
            ->exists();

    
        if (!$horarios) {
            return redirect()->back()->with([
                'mensaje' => 'El Encargado no está disponible en ese horario.',
                'icono' => 'error',
                'hora_reserva' => 'El Encargado no está disponible en ese horario.',
            ]);
        }
    
        // Crear una nueva variable con la fecha y hora de la reserva
        $fecha_hora_reserva = $fecha_reserva . " " . $hora_reserva;
    
        // Verificar si ya existe un evento en esa fecha y hora con el mismo encargado
        $eventos_duplicados = Event::where('encargado_id', $encargado->id)
            ->where('start', $fecha_hora_reserva)
            ->exists();
    
    
        if ($eventos_duplicados) {
            return redirect()->back()->with([
                'mensaje' => 'Ya existe una reserva con el mismo encargado en esa fecha y hora.',
                'icono' => 'error',
                'hora_reserva' => 'Ya existe una reserva con el mismo encargado en esa fecha y hora.',
            ]);
        }
    
        // Crear el evento en el calendario
        $evento = new Event();
        $evento->title = $request->hora_reserva . " " . $encargado->especialidad;
        $evento->start = $fecha_reserva . " " . $hora_reserva;
        $evento->end = $fecha_reserva . " " . $hora_reserva;
        $evento->color = '#e82216';  // Color para el evento
    
        // Asignar el usuario y encargado al evento
        $evento->user_id = Auth::user()->id;
        $evento->encargado_id = $request->encargado_id;
        $evento->area_id = 1;  // Asignar área de forma estática (esto podría ser dinámico)
        $evento->save();
    
        // Redirigir al administrador con un mensaje de éxito
        return redirect()->route('admin.index')
            ->with('mensaje', 'Se registró la reserva para ADS MOTORS exitosamente')
            ->with('icono', 'success');
    }
    
    private function traducir_dia($dia)
    {
        // Traducir los días de la semana al español
        $dias = [
            'Monday' => 'LUNES',
            'Tuesday' => 'MARTES',
            'Wednesday' => 'MIERCOLES',
            'Thursday' => 'JUEVES',
            'Friday' => 'VIERNES',
            'Saturday' => 'SABADO',
            'Sunday' => 'DOMINGO',
        ];
    
        // Retornar el día traducido o un valor por defecto si no se encuentra
        return $dias[$dia] ?? $dias;
    }
    

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        //
    }
}
