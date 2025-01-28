<?php

namespace App\Http\Controllers;

use App\Models\Configuracione;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ConfiguracioneController extends Controller
{
    /**
     * Display a listing of the resource.
     * Muestra una lista de todas las configuraciones almacenadas en la base de datos.
     */
    public function index()
    {
        // Se obtienen todas las configuraciones de la base de datos.
        $configuraciones = Configuracione::all();

        // Se pasa la lista de configuraciones a la vista 'admin.configuraciones.index' para mostrarla.
        return view('admin.configuraciones.index', compact('configuraciones'));
    }

    /**
     * Show the form for creating a new resource.
     * Muestra el formulario para crear una nueva configuración.
     */
    public function create()
    {
        return view('admin.configuraciones.create');
    }

    /**
     * Store a newly created resource in storage.
     * Guarda una nueva configuración en la base de datos después de validar los datos del formulario.
     */
    public function store(Request $request)
    {
        // Validación de los datos del formulario antes de guardarlos.
        $request->validate([
            'nombre' => 'required', // El nombre es obligatorio.
            'direccion' => 'required', // La dirección es obligatoria.
            'telefono' => 'required', // El teléfono es obligatorio.
            'correo' => 'required', // El correo es obligatorio.
            'logo' => 'required', // El logo es obligatorio.
        ]);

        // Se crea una nueva configuración.
        $configuracion = new Configuracione();

        // Se asignan los datos del formulario al modelo.
        $configuracion->nombre = $request->nombre;
        $configuracion->direccion = $request->direccion;
        $configuracion->telefono = $request->telefono;
        $configuracion->correo = $request->correo;

        // Se guarda el logo subido en el directorio 'logos' dentro del almacenamiento público.
        $configuracion->logo = $request->file('logo')->store('logos', 'public');

        // Se guarda la nueva configuración en la base de datos.
        $configuracion->save();

        // Redirige a la vista de lista de configuraciones con un mensaje de éxito.
        return redirect()->route('admin.configuraciones.index')
            ->with('mensaje', 'Se registró la configuración correctamente')
            ->with('icono', 'success');
    }

    /**
     * Display the specified resource.
     * Muestra los detalles de una configuración específica.
     */
    public function show($id)
    {
        // Se obtiene la configuración con el ID especificado.
        $configuracion = Configuracione::find($id);

        // Se pasa la configuración a la vista 'admin.configuraciones.show' para mostrar los detalles.
        return view('admin.configuraciones.show', compact('configuracion'));
    }

    /**
     * Show the form for editing the specified resource.
     * Muestra el formulario para editar una configuración existente.
     */
    public function edit($id)
    {
        // Se obtiene la configuración a editar, identificando por su ID.
        $configuracion = Configuracione::find($id);

        // Se pasa la configuración a la vista 'admin.configuraciones.edit' para que el usuario pueda modificarla.
        return view('admin.configuraciones.edit', compact('configuracion'));
    }

    /**
     * Update the specified resource in storage.
     * Actualiza los datos de una configuración existente en la base de datos.
     */
    public function update(Request $request, $id)
    {
        // Validación de los datos del formulario de edición.
        $request->validate([
            'nombre' => 'required', // El nombre es obligatorio.
            'direccion' => 'required', // La dirección es obligatoria.
            'telefono' => 'required', // El teléfono es obligatorio.
            'correo' => 'required', // El correo es obligatorio.
        ]);

        // Se busca la configuración a actualizar por su ID.
        $configuracion = Configuracione::find($id);

        // Se actualizan los campos de la configuración con los nuevos datos.
        $configuracion->nombre = $request->nombre;
        $configuracion->direccion = $request->direccion;
        $configuracion->telefono = $request->telefono;
        $configuracion->correo = $request->correo;

        // Si se ha subido un nuevo logo, se elimina el anterior y se guarda el nuevo logo.
        if ($request->hasFile('logo')) {
            // Se elimina el logo anterior del almacenamiento público.
            Storage::delete('public/'.$configuracion->logo);

            // Se guarda el nuevo logo en el directorio 'logos'.
            $configuracion->logo = $request->file('logo')->store('logos', 'public');
        }

        // Se guardan los cambios en la base de datos.
        $configuracion->save();

        // Redirige a la vista de lista de configuraciones con un mensaje de éxito.
        return redirect()->route('admin.configuraciones.index')
            ->with('mensaje', 'Se actualizó la configuración correctamente')
            ->with('icono', 'success');
    }

    /**
     * Remove the specified resource from storage.
     * Elimina una configuración específica de la base de datos.
     */
    public function confirmDelete($id)
    {
        // Se obtiene la configuración que se va a eliminar.
        $configuracion = Configuracione::find($id);

        // Se pasa la configuración a la vista 'admin.configuraciones.delete' para confirmar la eliminación.
        return view('admin.configuraciones.delete', compact('configuracion'));
    }

    /**
     * Remove the specified resource from storage.
     * Elimina una configuración de la base de datos, incluyendo su logo.
     */
    public function destroy($id)
    {
        // Se obtiene la configuración con el ID especificado.
        $configuracion = Configuracione::find($id);

        // Se elimina el archivo del logo asociado a la configuración.
        Storage::delete('public/'.$configuracion->logo);

        // Se elimina la configuración de la base de datos.
        $configuracion->destroy($id);

        // Redirige a la lista de configuraciones con un mensaje de éxito.
        return redirect()->route('admin.configuraciones.index')
            ->with('mensaje', 'Se eliminó la configuración exitosamente')
            ->with('icono', 'success');
    }
}
