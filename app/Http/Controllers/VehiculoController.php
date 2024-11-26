<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Notifications\NotificationVehiculo;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Auth;


class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vehiculos = Vehiculo::with('user')->get(); // Obtiene vehículos con sus usuarios asociados
        return view('admin.vehiculos.index', compact('vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.vehiculos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //$datos = request()->all();
        //return response()->json($datos);
        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'año' => 'required',
            'color' => 'required',
            'placa' => 'required|unique:vehiculos',
            'tipo_conbustible' => 'required',
        ]);

        $usuario = Auth::user();

        if (!$usuario) {
            // Si no hay usuario autenticado, redirige con un error
            return redirect()->back()->with('mensaje', 'Debe estar autenticado para registrar un vehículo.')
                ->with('icono', 'error');
        }

        $vehiculo = new Vehiculo();
        $vehiculo->user_id = $usuario->id;
        $vehiculo->marca = $request->marca;
        $vehiculo->modelo = $request->modelo;
        $vehiculo->año = $request->año;
        $vehiculo->color = $request->color;
        $vehiculo->placa = $request->placa;
        $vehiculo->tipo_conbustible = $request->tipo_conbustible;
        $vehiculo->save();

        return redirect()->route('admin.vehiculos.index')
        ->with('mensaje','Se registro Exitosamente')
        ->with('icono','success');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $vehiculo = Vehiculo::with('user')->findOrFail($id);
        return view('admin.vehiculos.show', compact('vehiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $vehiculo = Vehiculo::with('user')->findOrFail($id);
        return view('admin.vehiculos.edit', compact('vehiculo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $vehiculo = Vehiculo::find($id);

        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'año' => 'required',
            'color' => 'required',
            'placa' => 'required|unique:vehiculos,placa,'. $vehiculo->id,
            'tipo_conbustible' => 'required',


        ]);

        $vehiculo->marca = $request->marca;
        $vehiculo->modelo = $request->modelo;
        $vehiculo->año = $request->año;   
        $vehiculo->color = $request->color;
        $vehiculo->placa = $request->placa;
        $vehiculo->tipo_conbustible = $request->tipo_conbustible;
        $vehiculo->save();

        return redirect()->route('admin.vehiculos.index')
        ->with('mensaje','Se actualizo al Secretario Exitosamente')
        ->with('icono','success');

        /* Notificacion */
        $recipient = 'alvaradocami717@gmail.com';
        $name = 'Usuario';
    
        Notification::route('mail', $recipient)->notify(new NotificationVehiculo($name));
    
        return " enviado";
    }

       
    public function confirmDelete($id)
    {
        $vehiculo = Vehiculo::with('user')->findOrFail($id);
        return view('admin.vehiculos.delete', compact('vehiculo'));
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $vehiculo = Vehiculo::find($id);
    
        // Eliminar el vehículo
        $vehiculo->delete();
    
        return redirect()->route('admin.vehiculos.index')
            ->with('mensaje', 'El vehículo se eliminó exitosamente')
            ->with('icono', 'success');
    }    

}
