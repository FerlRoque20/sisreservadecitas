<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encargado extends Model
{
    use HasFactory;
    protected $fillable = ['nombres', 'apellidos','telefono', 'especialidad'];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function horarios()
    {
        return $this->hasMany(Horario::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function events(){
        return $this->hasMany(Event::class);
    }

}
