<?php

namespace App\Http\Controllers;

use App\Models\Horario;
use App\Models\Encargado;
use App\Models\Area;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $areas = Area::all(); 
        $horarios = Horario::with('encargado','area')->get();
        return view('admin.horarios.index',compact('horarios','areas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        $encargados = Encargado::all(); 
        $areas = Area::all(); 
        $horarios = Horario::with('encargado','area')->get();
        return view('admin.horarios.create', compact('encargados','areas','horarios'));

    }

    public function cargar_datos_areas($id){
        //echo "respuesta desde el controller". $id;
        try{
            $horarios = Horario::with('encargado','area')->where('area_id',$id)->get();
            //print_r($horarios);
            return view('admin.horarios.cargar_datos_areas',compact('horarios'));
        }catch(\Exception $exception){
            return response ()->json(['mensaje' => 'Error' ]);
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //$datos = request()->all();
        //return response()->json($datos);

        $request->validate([
            'dia' => 'required',
            'hora_inicio' => 'required|date_format:H:i',
            'hora_fin' => 'required|date_format:H:i|after:hora_inicio',  
        ]);

        //verificar si el horario ya existe para ese dia y rango de horas 
        $horarioExistente = Horario::where('dia', $request->dia)
        ->where(function ($query) use ($request) {
            $query->where(function ($query) use ($request) {
                $query->where('hora_inicio', '>=', $request->hora_inicio)
                ->where('hora_inicio', '<', $request->hora_fin);
            })
                ->orWhere(function ($query) use ($request) {
                    $query->where('hora_fin', '>', $request->hora_inicio)
                    ->where('hora_fin', '<=', $request->hora_fin);
                })
                ->orWhere(function ($query) use ($request) {
                    $query->where('hora_inicio', '<', $request->hora_inicio)
                    ->where('hora_fin', '>', $request->hora_fin);
                });

        })
        ->exists();

        if ($horarioExistente) {
            return redirect()->back()
                ->withInput()
                ->with('mensaje', 'Ya existe un horario que se superpone con el horario ingresado')
                ->with('icono', 'error');
            }

    
        // Crear el nuevo Horario con todos los campos necesarios
        Horario::create($request->all());
    
        // Redirigir con mensaje de éxito
        return redirect()->route('admin.horarios.index')
            ->with('mensaje', 'Se registró al Secretario Exitosamente')
            ->with('icono', 'success');
            
    }
    


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $horario = Horario::find($id);
        return view('admin.horarios.show', compact('horario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Horario $horario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Horario $horario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Horario $horario)
    {
        //
    }
}
