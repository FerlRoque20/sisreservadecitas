<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Horario;
use App\Models\User;

use App\Models\Encargado;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(encargado $encargado)
    {
        //
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
    public function destroy(encargado $encargado)
    {
        //
    }
}
