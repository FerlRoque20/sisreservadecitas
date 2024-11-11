<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            
            $table->string('numero', 2)->unique();  
            $table->string('celular', 9)->unique();  
            $table->string('encargado');
            $table->string('disponiviidad'); 
            $table->string('especialidad', 100);
            $table->string('ubicacion', 100);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('areas');
    }
};
