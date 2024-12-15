<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
            'dni' => 'required|unique:clientes',
            'celular' => 'required',
            'fecha_nacimiento' => 'required',
            'correo'=>'required|max:50|unique:clientes',
            'direccion' => 'nullable', // Campo que puede ser nulo


        ]);

        $cliente = new Cliente();
        $cliente->nombres = $request->nombres;
        $cliente->apellidos = $request->apellidos;
        $cliente->dni = $request->dni;
        $cliente->celular = $request->celular;
        $cliente->fecha_nacimiento = $request->fecha_nacimiento;
        $cliente->correo = $request->correo;
        $cliente->direccion = $request->direccion;
        $cliente->save();

        return redirect()->route('admin.clientes.index')
            ->with('mensaje','Se registro al Cliente Exitosamente')
            ->with('icono','success');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('admin.clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('admin.clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        
        $request->validate([
            'nombres' => 'required',
            'apellidos' => 'required',
            'dni' => 'required|unique:clientes,dni,'.$cliente->id,
            'celular' => 'required',
            'fecha_nacimiento' => 'required',
            'correo'=>'required|max:50|unique:clientes,correo,'.$cliente->id,
            'direccion' => 'nullable' // Campo que puede ser nulo


        ]);

        $cliente->nombres = $request->nombres;
        $cliente->apellidos = $request->apellidos;
        $cliente->dni = $request->dni;
        $cliente->celular = $request->celular;
        $cliente->fecha_nacimiento = $request->fecha_nacimiento;
        $cliente->correo = $request->correo;
        $cliente->direccion = $request->direccion;
        $cliente->save();

        

        return redirect()->route('admin.clientes.index')
            ->with('mensaje','Se actualizo al Cliente Exitosamente')
            ->with('icono','success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function confirmdelete($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('admin.clientes.delete', compact('cliente'));
    }

    public function destroy($id)
    {
        Cliente::destroy($id);
        return redirect()->route('admin.clientes.index')
            ->with('mensaje','El cliente ha sido eliminado correctamente. ')
            ->with('icono','success');
    }
}
