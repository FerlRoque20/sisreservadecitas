<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;
    protected $fillable = ['dia', 'hora_inicio', 'hora_fin', 'encargado_id', 'area_id'];
    
    public function encargado(){
        return $this->belongsTo(Encargado::class);
    }
    
    public function area(){
        return $this->belongsTo(Area::class);
    }
}
