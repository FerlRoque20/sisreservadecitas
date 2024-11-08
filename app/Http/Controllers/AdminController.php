<?php

namespace App\Http\Controllers;


use App\Models\User;
use App\Models\Secretaria;
use App\Models\Cliente;
use Illuminate\Http\Request;



class AdminController extends Controller
{
    public function index(){
        $total_usuarios = User::count();
        $total_secretarias = Secretaria::count();
        $total_clientes = Cliente::count();
        return view('admin.index',compact('total_usuarios', 'total_secretarias', 'total_clientes'));
    }
}
