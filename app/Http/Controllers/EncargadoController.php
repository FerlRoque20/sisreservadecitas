<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Horario;
use App\Models\User;

use App\Models\Encargado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class EncargadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $encargados = Encargado::with('user')->get();
        return view('admin.encargados.index',compact('encargados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.encargados.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$datos = request()->all();
        //return response()->json($datos);
        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'celular' => 'required',
            'especialidad' => 'required',
            'email'=>'required|max:50|unique:users',
            'password'=>'required|max:250|confirmed',

        ]);

        $usuario = new User();
        $usuario->name = $request->nombres;
        $usuario->email = $request->email;
        $usuario-> password = Hash::make($request['password']);
        $usuario-> save();

        $encargado = new Encargado();
        $encargado->user_id = $usuario->id;
        $encargado->nombres = $request->nombres;
        $encargado->apellidos = $request->apellidos;
        $encargado->celular = $request->celular;
        $encargado->especialidad = $request->especialidad;
        $encargado->save();

        return redirect()->route('admin.encargados.index')
        ->with('mensaje','Se registro al Encargado Exitosamente')
        ->with('icono','success');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $encargado = Encargado::findOrFail($id);
        return view('admin.encargados.show',compact('encargado'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(encargado $encargado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, encargado $encargado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function comfirDelete($id)
    {
        $encargado = Encargado::findOrFail($id);
        return view('admin.encargados.show',compact('encargado'));
    }
    public function destroy(encargado $encargado)
    {
        
    }
}
