<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Rutas para el administrador
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index')->middleware('auth');

//Rutas para el administrador - Usuarios
Route::get('/admin/usuarios', [App\Http\Controllers\UsuarioController::class, 'index'])->name('admin.usuarios.index')->middleware('auth');

//Rutas para el administrador - Usuarios - create
Route::get('/admin/usuarios/create', [App\Http\Controllers\UsuarioController::class, 'create'])->name('admin.usuarios.create')->middleware('auth');

//Rutas para el administrador - Usuarios - store
Route::post('/admin/usuarios/create', [App\Http\Controllers\UsuarioController::class, 'store'])->name('admin.usuarios.store')->middleware('auth');

//Rutas para el administrador - Usuarios - show
Route::get('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'show'])->name('admin.usuarios.show')->middleware('auth');

//Rutas para el administrador - Usuarios - edit
Route::get('/admin/usuarios/{id}/edit', [App\Http\Controllers\UsuarioController::class, 'edit'])->name('admin.usuarios.edit')->middleware('auth');

//Rutas para el administrador - Usuarios - edit - Actualizar Usuario
Route::put('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'update'])->name('admin.usuarios.update')->middleware('auth');

//Rutas para el administrador - Usuarios - Confirm-delete
Route::get('/admin/usuarios/{id}/confirm-delete', [App\Http\Controllers\UsuarioController::class, 'confirmDelete'])->name('admin.usuarios.confirmDelete')->middleware('auth');

//Rutas para el administrador - Usuarios - delete
Route::delete('/admin/usuarios/{id}', [App\Http\Controllers\UsuarioController::class, 'destroy'])->name('admin.usuarios.destroy')->middleware('auth');




//Rutas para el administrador - Secretarias
Route::get('/admin/secretarias', [App\Http\Controllers\SecretariaController::class, 'index'])->name('admin.secretarias.index')->middleware('auth');

//Rutas para el administrador - Secretarias - create
Route::get('/admin/secretarias/create', [App\Http\Controllers\SecretariaController::class, 'create'])->name('admin.secretarias.create')->middleware('auth');

//Rutas para el administrador - Secretarias - store
Route::post('/admin/secretarias/create', [App\Http\Controllers\SecretariaController::class, 'store'])->name('admin.secretarias.store')->middleware('auth');

//Rutas para el administrador - Secretarias - edit
Route::get('/admin/secretarias/{id}', [App\Http\Controllers\SecretariaController::class, 'show'])->name('admin.secretarias.show')->middleware('auth');

//Rutas para el administrador - Secretarias - edit
Route::get('/admin/secretarias/{id}/edit', [App\Http\Controllers\SecretariaController::class, 'edit'])->name('admin.secretarias.edit')->middleware('auth');

//Rutas para el administrador - Secretarias - edit - Actualizar Usuario
Route::put('/admin/secretarias/{id}', [App\Http\Controllers\SecretariaController::class, 'update'])->name('admin.secretarias.update')->middleware('auth');

//Rutas para el administrador - Secretarias - Confirm-delete
Route::get('/admin/secretarias/{id}/confirm-delete', [App\Http\Controllers\SecretariaController::class, 'confirmDelete'])->name('admin.secretarias.confirmDelete')->middleware('auth');

//Rutas para el administrador - Secretarias - delete
Route::delete('/admin/secretarias/{id}', [App\Http\Controllers\SecretariaController::class, 'destroy'])->name('admin.secretarias.destroy')->middleware('auth');




//Rutas para el administrador - clientes
Route::get('/admin/clientes', [App\Http\Controllers\ClienteController::class, 'index'])->name('admin.clientes.index')->middleware('auth');

//Rutas para el administrador - clientes - create
Route::get('/admin/clientes/create', [App\Http\Controllers\ClienteController::class, 'create'])->name('admin.clientes.create')->middleware('auth');

//Rutas para el administrador - clientes - store
Route::post('/admin/clientes/create', [App\Http\Controllers\ClienteController::class, 'store'])->name('admin.clientes.store')->middleware('auth');

//Rutas para el administrador - clientes - edit
Route::get('/admin/clientes/{id}', [App\Http\Controllers\ClienteController::class, 'show'])->name('admin.clientes.show')->middleware('auth');

//Rutas para el administrador - clientes - edit
Route::get('/admin/clientes/{id}/edit', [App\Http\Controllers\ClienteController::class, 'edit'])->name('admin.clientes.edit')->middleware('auth');

//Rutas para el administrador - clientes - edit - Actualizar Usuario
Route::put('/admin/clientes/{id}', [App\Http\Controllers\ClienteController::class, 'update'])->name('admin.clientes.update')->middleware('auth');

//Rutas para el administrador - clientes - Confirm-delete
Route::get('/admin/clientes/{id}/confirm-delete', [App\Http\Controllers\ClienteController::class, 'confirmDelete'])->name('admin.clientes.confirmDelete')->middleware('auth');

//Rutas para el administrador - clientes - delete
Route::delete('/admin/clientes/{id}', [App\Http\Controllers\ClienteController::class, 'destroy'])->name('admin.clientes.destroy')->middleware('auth');




//Rutas para el administrador - areas
Route::get('/admin/areas', [App\Http\Controllers\AreaController::class, 'index'])->name('admin.areas.index')->middleware('auth');

//Rutas para el administrador - areas - create
Route::get('/admin/areas/create', [App\Http\Controllers\AreaController::class, 'create'])->name('admin.areas.create')->middleware('auth');

//Rutas para el administrador - areas - store
Route::post('/admin/areas/create', [App\Http\Controllers\AreaController::class, 'store'])->name('admin.areas.store')->middleware('auth');

//Rutas para el administrador - areas - edit
Route::get('/admin/areas/{id}', [App\Http\Controllers\AreaController::class, 'show'])->name('admin.areas.show')->middleware('auth');

//Rutas para el administrador - areas - edit
Route::get('/admin/areas/{id}/edit', [App\Http\Controllers\AreaController::class, 'edit'])->name('admin.areas.edit')->middleware('auth');

//Rutas para el administrador - areas - edit - Actualizar Usuario
Route::put('/admin/areas/{id}', [App\Http\Controllers\AreaController::class, 'update'])->name('admin.areas.update')->middleware('auth');

//Rutas para el administrador - areas - Confirm-delete
Route::get('/admin/areas/{id}/confirm-delete', [App\Http\Controllers\AreaController::class, 'confirmDelete'])->name('admin.areas.confirmDelete')->middleware('auth');

//Rutas para el administrador - areas - delete
Route::delete('/admin/areas/{id}', [App\Http\Controllers\AreaController::class, 'destroy'])->name('admin.areas.destroy')->middleware('auth');


//Rutas para el administrador Cliente - vehiculos
Route::get('/admin/vehiculos', [App\Http\Controllers\VehiculoController::class, 'index'])->name('admin.vehiculos.index')->middleware('auth');

//Rutas para el administrador Cliente - vehiculos - create
Route::get('/admin/vehiculos/create', [App\Http\Controllers\VehiculoController::class, 'create'])->name('admin.vehiculos.create')->middleware('auth');

//Rutas para el administrador Cliente  - vehiculos - store
Route::post('/admin/vehiculos/create', [App\Http\Controllers\VehiculoController::class, 'store'])->name('admin.vehiculos.store')->middleware('auth');

//Rutas para el administrador Cliente - vehiculos - edit
Route::get('/admin/vehiculos/{id}', [App\Http\Controllers\VehiculoController::class, 'show'])->name('admin.vehiculos.show')->middleware('auth');

//Rutas para el administrador Cliente - vehiculos - edit
Route::get('/admin/vehiculos/{id}/edit', [App\Http\Controllers\VehiculoController::class, 'edit'])->name('admin.vehiculos.edit')->middleware('auth');

//Rutas para el administrador Cliente - vehiculos - edit - Actualizar Usuario
Route::put('/admin/vehiculos/{id}', [App\Http\Controllers\VehiculoController::class, 'update'])->name('admin.vehiculos.update')->middleware('auth');

//Rutas para el administrador Cliente - vehiculos - Confirm-delete
Route::get('/admin/vehiculos/{id}/confirm-delete', [App\Http\Controllers\VehiculoController::class, 'confirmDelete'])->name('admin.vehiculos.confirmDelete')->middleware('auth');

//Rutas para el administrador Cliente - vehiculos - delete
Route::delete('/admin/vehiculos/{id}', [App\Http\Controllers\VehiculoController::class, 'destroy'])->name('admin.vehiculos.destroy')->middleware('auth');


//Rutas para el administrador Cliente - vehiculos - delete
Route::get('/admin/vehiculos_', [App\Http\Controllers\VehiculoController::class, 'update'])->name('admin.vehiculos.update')->middleware('auth');

