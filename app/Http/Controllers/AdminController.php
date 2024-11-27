<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Secretaria;
use App\Models\Cliente;
use App\Models\Vehiculo;
use App\Models\Area;
use App\Models\Encargado;
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
        return view('admin.index',compact('total_usuarios', 'total_secretarias', 'total_clientes', 'total_vehiculos', 'total_areas', 'total_encargados'));
    }
}
