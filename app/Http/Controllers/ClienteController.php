<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('admin.clientes.index',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.clientes.create');
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
            'dni' => 'required|unique:secretarias',
            'celular' => 'required',
            'fecha_nacimiento' => 'required',
            'correo'=>'required|max:50|unique:clientes',

        ]);

        $cliente = new Cliente();
        $cliente->nombres = $request->nombres;
        $cliente->apellidos = $request->apellidos;
        $cliente->dni = $request->dni;
        $cliente->celular = $request->celular;
        $cliente->fecha_nacimiento = $request->fecha_nacimiento;
        $cliente->correo = $request->correo;
        $cliente->save();

        return redirect()->route('admin.clientes.index')
            ->with('mensaje','Se registro al Cliente Exitosamente')
            ->with('icono','success');

    }

    /**
     * Display the specified resource.
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cliente $cliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cliente $cliente)
    {
        //
    }
}
