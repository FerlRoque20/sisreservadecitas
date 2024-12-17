<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::class);
    }
    
    public function encargado() {
        return $this->belongsTo(Encargado::class);
    }
    
    public function area() {
        return $this->belongsTo(Area::class);
    }

    
}
