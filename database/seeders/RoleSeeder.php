<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         ///seeder para los roles y permisos admin,secretarios, encargado, clientes, usuarios
         $admin = Role::create(['name'=>'admin']);
         $secretaria = Role::create(['name'=>'secretaria']);
         $encargado = Role::create(['name'=>'encargado']);
         $cliente = Role::create(['name'=>'cliente']);
         $usuario = Role::create(['name'=>'usuario']);
 
         
         Permission::create(['name'=>'admin.index']);
 
 
         //rutas para el admin - usuarios
         Permission::create(['name'=>'admin.usuarios.index'])->syncRoles([$admin]);
         Permission::create(['name'=>'admin.usuarios.create'])->syncRoles([$admin]);
         Permission::create(['name'=>'admin.usuarios.store'])->syncRoles([$admin]);
         Permission::create(['name'=>'admin.usuarios.show'])->syncRoles([$admin]);
         Permission::create(['name'=>'admin.usuarios.edit'])->syncRoles([$admin]);
         Permission::create(['name'=>'admin.usuarios.update'])->syncRoles([$admin]);
         Permission::create(['name'=>'admin.usuarios.confirmDelete'])->syncRoles([$admin]);
         Permission::create(['name'=>'admin.usuarios.destroy'])->syncRoles([$admin]);
 
 
         //rutas para el admin - Configuraciones
         Permission::create(['name'=>'admin.configuraciones.index'])->syncRoles([$admin]);
         Permission::create(['name'=>'admin.configuraciones.create'])->syncRoles([$admin]);
         Permission::create(['name'=>'admin.configuraciones.store'])->syncRoles([$admin]);
         Permission::create(['name'=>'admin.configuraciones.show'])->syncRoles([$admin]);
         Permission::create(['name'=>'admin.configuraciones.edit'])->syncRoles([$admin]);
         Permission::create(['name'=>'admin.configuraciones.update'])->syncRoles([$admin]);
         Permission::create(['name'=>'admin.configuraciones.confirmDelete'])->syncRoles([$admin]);
         Permission::create(['name'=>'admin.configuraciones.destroy'])->syncRoles([$admin]);


         //Rutas para el administrador - Secretarias
         Permission::create(['name'=>'admin.secretarias.index'])->syncRoles([$admin]);
         Permission::create(['name'=>'admin.secretarias.create'])->syncRoles([$admin]);
         Permission::create(['name'=>'admin.secretarias.store'])->syncRoles([$admin]);
         Permission::create(['name'=>'admin.secretarias.show'])->syncRoles([$admin]);
         Permission::create(['name'=>'admin.secretarias.edit'])->syncRoles([$admin]);
         Permission::create(['name'=>'admin.secretarias.update'])->syncRoles([$admin]);
         Permission::create(['name'=>'admin.secretarias.confirmDelete'])->syncRoles([$admin]);
         Permission::create(['name'=>'admin.secretarias.destroy'])->syncRoles([$admin]);
 
 
         //Rutas para el administrador - clientes
         Permission::create(['name'=>'admin.clientes.index'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.clientes.create'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.clientes.store'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.clientes.show'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.clientes.edit'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.clientes.update'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.clientes.confirmDelete'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.clientes.destroy'])->syncRoles([$admin,$secretaria]);
 
 
         //Rutas para el administrador - areas
         Permission::create(['name'=>'admin.areas.index'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.areas.create'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.areas.store'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.areas.show'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.areas.edit'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.areas.update'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.areas.confirmDelete'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.areas.destroy'])->syncRoles([$admin,$secretaria]);
 
 
         //Rutas para el administrador Cliente - vehiculos
         Permission::create(['name'=>'admin.vehiculos.index'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.vehiculos.create'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.vehiculos.store'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.vehiculos.show'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.vehiculos.edit'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.vehiculos.update'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.vehiculos.confirmDelete'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.vehiculos.destroy'])->syncRoles([$admin,$secretaria]);
 
 
         //Rutas para el administrador Cliente - encargados
         Permission::create(['name'=>'admin.encargados.index'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.encargados.create'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.encargados.store'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.encargados.show'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.encargados.edit'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.encargados.update'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.encargados.confirmDelete'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.encargados.destroy'])->syncRoles([$admin,$secretaria]);
 
 
         //Rutas para el administrador Cliente - horarios
         Permission::create(['name'=>'admin.horarios.index'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.horarios.create'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.horarios.store'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.horarios.show'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.horarios.edit'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.horarios.update'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.horarios.confirmDelete'])->syncRoles([$admin,$secretaria]);
         Permission::create(['name'=>'admin.horarios.destroy'])->syncRoles([$admin,$secretaria]);
 
         //Rutas para el administrador Cliente - areas - Ajax
         Permission::create(['name'=>'admin.horarios.cargar_datos_areas'])->syncRoles([$admin,$secretaria]);
        
         //Rutas para el Pagina WEB Usuarios - areas - Ajax
         Permission::create(['name'=>'cargar_datos_areas'])->syncRoles([$admin,$usuario]);
         Permission::create(['name'=>'cargar_reserva_encargados'])->syncRoles([$admin,$usuario]);
         Permission::create(['name'=>'ver_reservas'])->syncRoles([$admin,$usuario]);
         Permission::create(['name'=>'admin.eventos.create'])->syncRoles([$admin,$usuario]);
         Permission::create(['name'=>'admin.eventos.destroy'])->syncRoles([$admin,$usuario]);







    }
}
