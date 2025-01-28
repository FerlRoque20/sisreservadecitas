<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     * Muestra una lista de todos los clientes registrados en la base de datos.
     */
    public function index()
    {
        // Se obtienen todos los clientes de la base de datos.
        $clientes = Cliente::all();

        // Se pasa la lista de clientes a la vista 'admin.clientes.index' para mostrarla.
        return view('admin.clientes.index',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     * Muestra el formulario para crear un nuevo cliente.
     */
    public function create()
    {
        return view('admin.clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     * Guarda un nuevo cliente en la base de datos después de validar los datos del formulario.
     */
    public function store(Request $request)
    {
        // Validación de los datos del formulario antes de guardarlos.
        $request->validate([
            'nombres' => 'required', // El campo nombres es obligatorio.
            'apellidos' => 'required', // El campo apellidos es obligatorio.
            'dni' => 'required|unique:clientes', // El campo dni es obligatorio y debe ser único.
            'celular' => 'required', // El campo celular es obligatorio.
            'fecha_nacimiento' => 'required', // El campo fecha de nacimiento es obligatorio.
            'correo' => 'required|max:50|unique:clientes', // El correo es obligatorio, con un máximo de 50 caracteres y único.
            'direccion' => 'nullable', // El campo dirección es opcional.
        ]);

        // Se crea un nuevo cliente con los datos validados.
        $cliente = new Cliente();
        $cliente->nombres = $request->nombres;
        $cliente->apellidos = $request->apellidos;
        $cliente->dni = $request->dni;
        $cliente->celular = $request->celular;
        $cliente->fecha_nacimiento = $request->fecha_nacimiento;
        $cliente->correo = $request->correo;
        $cliente->direccion = $request->direccion;
        // Se guarda el cliente en la base de datos.
        $cliente->save();

        // Redirige a la vista de lista de clientes con un mensaje de éxito.
        return redirect()->route('admin.clientes.index')
            ->with('mensaje', 'Se registró al cliente exitosamente')
            ->with('icono', 'success');
    }

    /**
     * Display the specified resource.
     * Muestra una vista detallada de un cliente específico, identificado por su ID.
     */
    public function show($id)
    {
        // Se obtiene el cliente con el ID especificado, o se genera un error si no se encuentra.
        $cliente = Cliente::findOrFail($id);

        // Se pasa el cliente a la vista 'admin.clientes.show' para mostrar los detalles.
        return view('admin.clientes.show', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     * Muestra el formulario para editar los detalles de un cliente existente.
     */
    public function edit($id)
    {
        // Se obtiene el cliente a editar, identificando por su ID.
        $cliente = Cliente::findOrFail($id);

        // Se pasa el cliente a la vista 'admin.clientes.edit' para que el usuario pueda modificarlo.
        return view('admin.clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     * Actualiza los datos de un cliente específico en la base de datos.
     */
    public function update(Request $request, $id)
    {
        // Se obtiene el cliente a actualizar, identificando por su ID.
        $cliente = Cliente::find($id);

        // Validación de los datos del formulario de edición.
        $request->validate([
            'nombres' => 'required', // El campo nombres es obligatorio.
            'apellidos' => 'required', // El campo apellidos es obligatorio.
            'dni' => 'required|unique:clientes,dni,'.$cliente->id, // Se permite que el DNI sea el mismo para el cliente que se está actualizando.
            'celular' => 'required', // El celular es obligatorio.
            'fecha_nacimiento' => 'required', // La fecha de nacimiento es obligatoria.
            'correo' => 'required|max:50|unique:clientes,correo,'.$cliente->id, // Se permite que el correo sea el mismo para el cliente que se está actualizando.
            'direccion' => 'nullable', // La dirección es opcional.
        ]);

        // Se actualizan los campos del cliente con los nuevos valores proporcionados en el formulario.
        $cliente->nombres = $request->nombres;
        $cliente->apellidos = $request->apellidos;
        $cliente->dni = $request->dni;
        $cliente->celular = $request->celular;
        $cliente->fecha_nacimiento = $request->fecha_nacimiento;
        $cliente->correo = $request->correo;
        $cliente->direccion = $request->direccion;
        // Se guarda la actualización en la base de datos.
        $cliente->save();

        // Redirige a la lista de clientes con un mensaje de éxito.
        return redirect()->route('admin.clientes.index')
            ->with('mensaje', 'Se actualizó al cliente exitosamente')
            ->with('icono', 'success');
    }

    /**
     * Show the form for confirming the deletion of the specified resource.
     * Muestra un formulario de confirmación antes de eliminar un cliente.
     */
    public function confirmdelete($id)
    {
        // Se obtiene el cliente que se va a eliminar, identificando por su ID.
        $cliente = Cliente::findOrFail($id);

        // Se pasa el cliente a la vista 'admin.clientes.delete' para que el usuario confirme la eliminación.
        return view('admin.clientes.delete', compact('cliente'));
    }

    /**
     * Remove the specified resource from storage.
     * Elimina un cliente de la base de datos.
     */
    public function destroy($id)
    {
        // Se elimina el cliente identificado por el ID.
        Cliente::destroy($id);

        // Redirige a la lista de clientes con un mensaje de éxito.
        return redirect()->route('admin.clientes.index')
            ->with('mensaje', 'El cliente ha sido eliminado correctamente.')
            ->with('icono', 'success');
    }
}
