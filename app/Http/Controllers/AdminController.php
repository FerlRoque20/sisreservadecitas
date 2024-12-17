<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Secretaria;
use App\Models\Cliente;
use App\Models\Vehiculo;
use App\Models\Area;
use App\Models\Encargado;
use App\Models\Horario;
use App\Models\Event;
use Illuminate\Http\Request;



class AdminController extends Controller
{
    public function index(){
        $total_usuarios = User::count();
        $total_secretarias = Secretaria::count();
        $total_clientes = Cliente::count();
        $total_vehiculos = Vehiculo::count();
        $total_areas = Area::count();
        $total_encargados = Encargado::count();
        $total_horarios = Horario::count();

        $areas = Area::all();
        $encargados = Encargado::all();
        $eventos = Event::all();

        return view('admin.index',compact('total_usuarios', 
        'total_secretarias', 
        'total_clientes', 
        'total_vehiculos', 
        'total_areas', 
        'total_encargados',
        'total_horarios',
        'areas',
        'encargados',
        'eventos'
        ));
    }

    public function ver_reservas($id){
        $eventos = Event::where('user_id',$id)->get();
        return view('admin.ver_reservas', compact('eventos'));
    }
    
}
