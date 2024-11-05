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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();

            $table->string('nombres', 100);
            $table->string('apellidos', 100);
            $table->string('dni', 8)->unique();  
            $table->string('celular', 9)->unique();  
            $table->string('fecha_nacimiento'); 
            $table->string('correo', 100)->unique();
            $table->string('direccion', 255)->nullable();
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
