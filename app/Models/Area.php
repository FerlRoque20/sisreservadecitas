<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $fillable = ['celular', 'disponibilidad', 'especialidad', 'ubicacion'];
    
    public function encargados(){
        return $this->hasMany(Encargado::class);
    }
    public function horarios(){
        return $this->hasMany(Horario::class);
    }
}
