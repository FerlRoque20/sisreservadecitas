<?php

namespace App\Http\Controllers;

use App\Models\Configuracione;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ConfiguracioneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $configuraciones = Configuracione::all();
        return view('admin.configuraciones.index',compact('configuraciones'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.configuraciones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$datos = request()->all();
        //return response()->json($datos);
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required',
            'direccion' => 'required',
            'telefono' => 'required',
            'correo' => 'required',
            'logo' => 'required',
        ]);

        $configuracion = new Configuracione();

        $configuracion->nombre = $request->nombre;
        $configuracion->direccion = $request->direccion;
        $configuracion->telefono = $request->telefono;
        $configuracion->correo = $request->correo;
        $configuracion->logo = $request->file('logo')->store('logos','public');

        $configuracion->save();

        return redirect()->route('admin.configuraciones.index')
            ->with('mensaje', 'Se registro la configuración de la manera correcta')
            ->with('icono', 'success');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $configuracion = Configuracione::find($id);
        return view('admin.configuraciones.show',compact('configuracion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Configuracione $configuracione)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Configuracione $configuracione)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Configuracione $configuracione)
    {
        //
    }
}
