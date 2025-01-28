<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Unique;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     * Muestra una lista de todas las áreas registradas en la base de datos.
     */
    public function index()
    {
        // Se obtienen todas las áreas de la base de datos.
        $areas = Area::all();

        // Se pasa la lista de áreas a la vista 'admin.areas.index' para mostrarla.
        return view('admin.areas.index',compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     * Muestra el formulario para crear una nueva área.
     */
    public function create()
    {
        return view('admin.areas.create');
    }

    /**
     * Store a newly created resource in storage.
     * Guarda una nueva área en la base de datos después de validar los datos del formulario.
     */
    public function store(Request $request)
    {
        // Validación de los datos del formulario antes de guardarlos.
        $request->validate([
            'celular' => 'required|digits:9|unique:areas', // Valida que el celular sea único y tenga 9 dígitos.
            'disponibilidad' => 'required', // El campo disponibilidad es obligatorio.
            'especialidad' => 'required', // El campo especialidad es obligatorio.
            'ubicacion' => 'required', // El campo ubicación es obligatorio.
        ]);

        // Se crea una nueva área utilizando los datos validados.
        Area::create($request->all());

        // Redirige a la vista de lista de áreas con un mensaje de éxito.
        return redirect()->route('admin.areas.index')
            ->with('mensaje', 'Se registró el área exitosamente')
            ->with('icono', 'success');
    }

    /**
     * Display the specified resource.
     * Muestra una vista detallada de un área específica, identificada por su ID.
     */
    public function show($id)
    {
        // Se obtiene el área con el ID especificado, o se genera un error si no se encuentra.
        $area = Area::findOrFail($id);

        // Se pasa el área a la vista 'admin.areas.show' para mostrar los detalles.
        return view('admin.areas.show',compact('area'));
    }

    /**
     * Show the form for editing the specified resource.
     * Muestra el formulario para editar los detalles de un área existente.
     */
    public function edit($id)
    {
        // Se obtiene el área a editar, identificada por su ID.
        $area = Area::findOrFail($id);

        // Se pasa el área a la vista 'admin.areas.edit' para que el usuario pueda modificarla.
        return view('admin.areas.edit',compact('area'));
    }

    /**
     * Update the specified resource in storage.
     * Actualiza los datos de un área específica en la base de datos.
     */
    public function update(Request $request, $id)
    {
        // Validación de los datos del formulario de edición.
        $request->validate([
            'celular' => 'required', // El celular es obligatorio.
            'disponibilidad' => 'required', // La disponibilidad es obligatoria.
            'especialidad' => 'required', // La especialidad es obligatoria.
            'ubicacion' => 'required', // La ubicación es obligatoria.
        ]);

        // Se obtiene el área con el ID especificado.
        $area = Area::find($id);

        // Se actualizan los campos 'celular', 'disponibilidad', 'especialidad' y 'ubicacion' con los nuevos valores.
        $area->update($request->only(['celular', 'disponibilidad', 'especialidad', 'ubicacion']));

        // Redirige de nuevo a la lista de áreas con un mensaje de éxito.
        return redirect()->route('admin.areas.index')
            ->with('mensaje', 'Se actualizó el área exitosamente')
            ->with('icono', 'success');
    }

    /**
     * Show the form for confirming the deletion of the specified resource.
     * Muestra un formulario de confirmación antes de eliminar un área.
     */
    public function confirmdelete($id)
    {
        // Se obtiene el área que se va a eliminar.
        $area = Area::findOrFail($id);

        // Se pasa el área a la vista 'admin.areas.delete' para que el usuario confirme la eliminación.
        return view('admin.areas.delete', compact('area'));
    }

    /**
     * Remove the specified resource from storage.
     * Elimina un área de la base de datos.
     */
    public function destroy($id)
    {
        // Se obtiene el área con el ID especificado.
        $area = Area::find($id);

        // Se elimina el área de la base de datos.
        $area->delete();

        // Redirige de nuevo a la lista de áreas con un mensaje de éxito.
        return redirect()->route('admin.areas.index')
            ->with('mensaje', 'Se eliminó el área exitosamente')
            ->with('icono', 'success');
    }
}
