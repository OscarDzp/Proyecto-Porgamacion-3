<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use App\Http\Requests\StoreusuarioRequest;
use App\Http\Requests\UpdateusuarioRequest;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = Usuario::get();
        return view('usuarios.index', ['usuarios' => $usuarios]);
//        return usuario::with("publicaciones")->get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('usuarios.create', ['usuario'=> new Usuario()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreusuarioRequest $request)
    {
//        aqui se hacen las validaciones del formulario usuarios, preguntar si estas validaciones afectan sql

        $fields = $request->validate([
            'idUsuario' => 'required|numeric',
            'nombre' => 'required|string|max:50',
            'apellido' => 'required|string|max:50',
            'imagen' => 'nullable|image',
            'puesto' => 'required|string|max:80',
            'correo' => 'required|string|max:50',
            'telefono' => 'required|numeric',
            'genero' => 'required|string|max:10',
            'fecha' => 'date|required',
            'cedula' => 'required|numeric',
            'biografia' => 'required|string'
        ]);

        Usuario :: create($fields);
        return redirect()->route('usuarios.create')->with('success', 'Usuario'. $fields['nombre']. "ha sido creado exitosamente");
    }

    /**
     * Display the specified resource.
     */
    public function show(usuario $usuario)
    {

        return view('usuarios.show', ['usuario' => $usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(usuario $usuario)
    {
        return view('usuarios.edit', ['usuario'=>$usuario]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateusuarioRequest $request, usuario $usuario)
    {
        $fields = $request->validate([
            'idUsuario' => 'required|numeric',
            'nombre' => 'required|string|max:50',
            'apellido' => 'required|string|max:50',
            'imagen' => 'nullable|image',
            'puesto' => 'required|string|max:80',
            'correo' => 'required|string|max:50',
            'telefono' => 'required|numeric',
            'genero' => 'required|string|max:10',
            'fecha' => 'date|required',
            'cedula' => 'required|numeric',
            'biografia' => 'required|string'
        ]);

        $usuario->update($fields);
        return redirect()->route('usuarios.edit', $usuario)->with('success', 'El Usuario'. $fields['nombre']. "ha sido Editado exitosamente");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(usuario $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }
}
