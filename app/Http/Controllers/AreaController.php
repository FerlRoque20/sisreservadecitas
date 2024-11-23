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
     */
    public function index()
    {
        $areas = Area::all();
        return view('admin.areas.index',compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.areas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'celular' => 'required|digits:9|unique:areas',
            'disponibilidad' => 'required',
            'especialidad' => 'required',
            'ubicacion' => 'required',
        ]);

        Area::create($request->only(['celular', 'disponibilidad', 'especialidad', 'ubicacion']));

        return redirect()->route('admin.areas.index')
            ->with('mensaje', 'Se registró el área exitosamente')
            ->with('icono', 'success');
    }

    public function show(Area $area)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Area $area)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Area $area)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Area $area)
    {
        //
    }
}
