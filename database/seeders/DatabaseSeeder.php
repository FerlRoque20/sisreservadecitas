<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name'=>'Administrador',
            'email'=>'administrador@gmail.com',
            'password'=>hash::make('123456789')
        ]);

        User::create([
            'name'=>'Secretario',
            'email'=>'secretario@gmail.com',
            'password'=>hash::make('123456789')
        ]);

        User::create([
            'name'=>'Mecanico1',
            'email'=>'mecanico1@gmail.com',
            'password'=>hash::make('123456789')
        ]);

        User::create([
            'name'=>'Cliente1',
            'email'=>'cliente1@gmail.com',
            'password'=>hash::make('123456789')
        ]);

    }
}
