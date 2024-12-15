<?php

namespace App\Http\Controllers;

use App\Models\Area; // Importación correcta
use App\Models\Horario;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
       $areas = Area::all();
       return view ('index',compact('areas'));
    }

    public function cargar_datos_areas ($id){

        $area = Area::find($id);

        try{
            $horarios = Horario::with('encargado','area')->where('area_id',$id)->get();
            //print_r($horarios);
            return view('cargar_datos_area',compact('horarios','area'));
        }catch(\Exception $exception){
            return response ()->json(['mensaje' => 'Error' ]);
        }
    }
}