<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encargado extends Model
{
    use HasFactory;
    protected $fillable = ['numero', 'apellido', 'especialidad'];

    public function areas()
    {
        return $this->belongsTo(Area::class);
    }

    public function horarios()
    {
        return $this->hasMany(Horario::class);
    }
}
