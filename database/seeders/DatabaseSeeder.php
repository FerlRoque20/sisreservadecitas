<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\Secretaria;
use App\Models\Encargado;
use App\Models\Area;


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

        $this->call([RoleSeeder::class,]);


        //ADMINISTRADOR
        User::create([
            'name'=>'Administrador',
            'email'=>'administrador@gmail.com',
            'password'=>hash::make('123456789')
        ])->assignRole('admin');

        //SECRETARIO
        User::create([
            'name'=>'Secretario',
            'email'=>'secretario@gmail.com',
            'password'=>hash::make('123456789')
        ])->assignRole('secretaria');

        Secretaria::create([
            'nombres' => 'Secretaria',
            'apellidos' => 'secretario',
            'dni' => '78546321',
            'celular' => '977777777',
            'fecha_nacimiento' => '10/10/2001',
            'direccion' => 'Calle Salsa Nora',
            'user_id' => '2'
        ]);

        //ADMINISTRADOR CORREO
        User::create([
            'name'=>'Administrador',
            'email'=>'logicainformatica18@gmail.com',
            'password'=>hash::make('123456789')
        ]);

        //ENCARGADO
        User::create([
            'name'=>'Mecanico1',
            'email'=>'mecanico1@gmail.com',
            'password'=>hash::make('123456789')
        ])->assignRole('encargado');

        Encargado::create([
            'nombres' => 'Mecanico1',
            'apellidos' => 'Torres',
            'celular' => '963587024',
            'especialidad' => 'Tecnico Automotriz',
            'user_id' => '3'
        ]);

        User::create([
            'name'=>'Mecanico2',
            'email'=>'mecanico2@gmail.com',
            'password'=>hash::make('123456789')
        ])->assignRole('encargado');


        Encargado::create([
            'nombres' => 'Mecanico2',
            'apellidos' => 'Lujan',
            'celular' => '963587034',
            'especialidad' => 'Tecnico Automotriz',
            'user_id' => '4'
        ]);

        User::create([
            'name'=>'Mecanico3',
            'email'=>'mecanico3@gmail.com',
            'password'=>hash::make('123456789')
        ])->assignRole('encargado');

        encargado::create([
            'nombres' => 'Mecanico3',
            'apellidos' => 'Marin',
            'celular' => '963585034',
            'especialidad' => 'Tecnico Automotriz',
            'user_id' => '5'
        ]);

        //AREA
        Area::create([
            'celular' => '945394391',
            'disponibilidad' => 'Disponible',
            'especialidad' => 'Tecnico Automotriz',
            'ubicacion' => '1ra FILA',
        ]);
        
        Area::create([
            'celular' => '945394891',
            'disponibilidad' => 'Disponible',
            'especialidad' => 'Tecnico Automotriz',
            'ubicacion' => '2da FILA',
        ]);

        Area::create([
            'celular' => '945304391',
            'disponibilidad' => 'Disponible',
            'especialidad' => 'Tecnico Automotriz',
            'ubicacion' => '3ra FILA',
        ]);

        //CLIENTE
        User::create([
            'name'=>'Cliente1',
            'email'=>'cliente1@gmail.com',
            'password'=>hash::make('123456789')
        ])->assignRole('cliente');

        //USUARIO
        User::create([
            'name'=>'Usuario1',
            'email'=>'usuario1@gmail.com',
            'password'=>hash::make('123456789')
        ])->assignRole('usuario');


        $this->call([ClienteSeeder::class,]);

    }
}
