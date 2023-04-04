<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PublicacionController;
use App\Http\Controllers\ReaccionController;

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

//Route::get('/usuarios',[UsuarioController::class, 'index'])->name('usuarios.index');
//Route::get('/crear/usuarios',[UsuarioController::class, 'create'])->name('usuarios.create');
//Route::post('/usuarios',[UsuarioController::class, 'store'])->name('usuarios.store');
//Route::get('/usuarios/{usuario}',[UsuarioController::class, 'show'])->name('usuarios.show');
//Route::get('/usuarios/{usuario}/editar',[UsuarioController::class, 'edit'])->name('usuarios.edit');
//Route::patch('/usuarios/{usuario}/update',[UsuarioController::class, 'update'])->name('usuarios.update');
//Route::delete('/usuarios/{usuario}/destroy',[UsuarioController::class, 'destroy'])->name('usuarios.destroy');
//
//Route::get('/publicaciones',[PublicacionController::class, 'index'])->name('publicaciones.index');
//Route::get('/publicaciones/crear',[PublicacionController::class, 'create'])->name('publicaciones.create');
//Route::post('/publicaciones',[PublicacionController::class, 'store'])->name('publicaciones.store');
//Route::get('/publicaciones/{publicacion}',[PublicacionController::class, 'show'])->name('publicaciones.show');
//Route::get('/publicaciones/{publicacion}/editar',[PublicacionController::class, 'edit'])->name('publicaciones.edit');
//Route::patch('/publicaciones/{publicacion}/update',[PublicacionController::class, 'update'])->name('publicaciones.update');
//Route::delete('/publicaciones/{publicacion}/destroy',[PublicacionController::class, 'destroy'])->name('publicaciones.destroy');

//Route::get('/',[ReaccionController::class, 'index'])->name('reacciones.index');
//Route::get('/crear',[ReaccionController::class, 'create'])->name('reacciones.create');
//Route::post('/',[ReaccionController::class, 'store'])->name('reacciones.store');
//Route::get('/{reaccion}',[ReaccionController::class, 'show'])->name('reacciones.show');
//Route::get('/{reaccion}/editar',[ReaccionController::class, 'edit'])->name('reacciones.edit');
//Route::patch('/{reaccion}',[ReaccionController::class, 'update'])->name('reacciones.update');
//Route::delete('/{reaccion}',[ReaccionController::class, 'destroy'])->name('reacciones.destroy');

Route:: resource("/usuarios", UsuarioController::class);
Route:: resource("/publicaciones", PublicacionController::class);
Route:: resource("/reacciones", ReaccionController::class);


