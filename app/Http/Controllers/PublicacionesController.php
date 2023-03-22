<?php

namespace App\Http\Controllers;

use App\Models\publicaciones;
use App\Http\Requests\StorepublicacionesRequest;
use App\Http\Requests\UpdatepublicacionesRequest;

class PublicacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publicaciones = Publicaciones::get();
        return view('publicacion.index', ['publicacion' => $publicaciones]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('publicacion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepublicacionesRequest $request)
    {
        $fields = $request->validate([
            'idPublicacion' => 'required|numeric',
            'idUsuario'=> 'required|numeric',
            'descripcion'=> 'required|string',
            'titulo'=>'required|string|max:69',
            'imagen'=>'nullable|image'
        ]);

        Publicaciones::create($fields);
        return redirect()->route('publicacion.create')->with('success','La Publicacion'.$fields['titulo'].'Ha sido creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(publicaciones $publicaciones)
    {
        return view('publicacion.show' , ['publicaciones' => $publicaciones]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(publicaciones $publicaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepublicacionesRequest $request, publicaciones $publicaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publicaciones $publicaciones)
    {
       $publicaciones->delete();
      return redirect()->route('publicacion.index');
    }
}
