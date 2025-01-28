<?php

namespace App\Http\Controllers;

// Importación de modelos para acceder a las diferentes entidades de la base de datos
use App\Models\User;
use App\Models\Secretaria;
use App\Models\Cliente;
use App\Models\Vehiculo;
use App\Models\Area;
use App\Models\Encargado;
use App\Models\Horario;
use App\Models\Event;
use App\Models\Configuracione;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // Método para mostrar el índice del panel de administración
    public function index(){
        // Se obtiene el conteo de registros en cada modelo para mostrar en la vista de estadísticas
        $total_usuarios = User::count(); // Total de usuarios registrados
        $total_secretarias = Secretaria::count(); // Total de secretarias
        $total_clientes = Cliente::count(); // Total de clientes
        $total_vehiculos = Vehiculo::count(); // Total de vehículos
        $total_areas = Area::count(); // Total de áreas
        $total_encargados = Encargado::count(); // Total de encargados
        $total_horarios = Horario::count(); // Total de horarios registrados
        $total_eventos = Event::count(); // Total de eventos
        $total_configuraciones = Configuracione::count(); // Total de configuraciones

        // Se obtienen todas las áreas, encargados y eventos para usarlos en la vista
        $areas = Area::all(); // Lista de todas las áreas
        $encargados = Encargado::all(); // Lista de todos los encargados
        $eventos = Event::all(); // Lista de todos los eventos

        // Se retorna la vista 'admin.index' y se pasan todas las variables como datos para la vista
        return view('admin.index', compact('total_usuarios', 
        'total_secretarias', 
        'total_clientes', 
        'total_vehiculos', 
        'total_areas', 
        'total_encargados',
        'total_horarios',
        'areas',
        'encargados',
        'eventos',
        'total_eventos',
        'total_configuraciones'
        ));
    }

    // Método para ver las reservas de un usuario específico
    public function ver_reservas($id){
        // Se obtienen todos los eventos asociados a un usuario en específico (por su ID)
        $eventos = Event::where('user_id', $id)->get(); // Filtra los eventos por el 'user_id'

        // Se retorna la vista 'admin.ver_reservas' y se pasan los eventos correspondientes
        return view('admin.ver_reservas', compact('eventos'));
    }
}
