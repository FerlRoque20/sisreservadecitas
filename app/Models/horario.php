<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class horario extends Model
{
    use HasFactory;
    protected $fillable = [
        'dia',
        'fecha_inicio',
        'fecha_fin'
    ];
    public function encargados(){
        return $this->belongsTo(Encargado::class);
    }
    public function areas(){
        return $this->belongsTo(Area::class);
    }
}
