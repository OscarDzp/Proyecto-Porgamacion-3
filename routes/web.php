<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PublicacionesController;
use App\Http\Controllers\ReaccionesController;

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

Route::get('/',[UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('/crear',[UsuarioController::class, 'create'])->name('usuarios.create');
Route::post('/',[UsuarioController::class, 'store'])->name('usuarios.store');
Route::get('/{usuario}',[UsuarioController::class, 'show'])->name('usuarios.show');
Route::get('/{usuario}/editar',[UsuarioController::class, 'edit'])->name('usuarios.edit');
Route::patch('/{usuario}',[UsuarioController::class, 'update'])->name('usuarios.update');
Route::delete('/{usuario}',[UsuarioController::class, 'destroy'])->name('usuarios.destroy');

//Route::get('/',[PublicacionesController::class, 'index'])->name('publicaciones.index');
//Route::get('/crear',[PublicacionesController::class, 'create'])->name('publicaciones.create');
//Route::post('/',[PublicacionesController::class, 'store'])->name('publicaciones.store');
//Route::get('/{publicacion}',[PublicacionesController::class, 'show'])->name('publicaciones.show');
//Route::get('/{publicacion}/editar',[PublicacionesController::class, 'edit'])->name('publicaciones.edit');
//Route::patch('/{publicacion}',[PublicacionesController::class, 'update'])->name('publicaciones.update');
//Route::delete('/{publicacion}',[PublicacionesController::class, 'destroy'])->name('publicaciones.destroy');
//Route::delete('/{publicacion}',[PublicacionesController::class, 'destroy'])->name('publicaciones.destroy');
