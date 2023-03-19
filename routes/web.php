<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

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
