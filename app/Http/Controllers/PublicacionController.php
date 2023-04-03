<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use App\Http\Requests\StorePublicacionRequest;
use App\Http\Requests\UpdatePublicacionRequest;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publicaciones = Publicacion::get();
        return view('publicaciones.index', ['publicaciones' => $publicaciones]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ( 'publicaciones.create', ['publicacion'=> new Publicacion()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePublicacionRequest $request)
    {

     $fields =  $request->validate([
         'titulo' => 'required|string',
         'descripcion' => 'required|string',
          'imagen' =>'nullable|image|mimes:jpeg,png,jpg',
         'idR'=>'required|string',
         'idU'=>'required|string',
     ]);
        Publicacion :: create($fields);
        return redirect()->route('publicaciones.create')->with('success', 'Publicacion '. $fields['titulo']. " ha sido creada exitosamenete");
    }

    /**
     * Display the specified resource.
     */
    public function show(Publicacion $publicacion)
    {
        return view ('publicaciones.show', ['publicacion'=> $publicacion]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publicacion $publicacion)
    {
        return view ('publicaciones.edit', ['publicacion'=> $publicacion]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePublicacionRequest $request, Publicacion $publicacion)
    {
        $fields =  $request->validate([
            'titulo' => 'required|string',
            'descripcion' => 'required|string',
            'imagen' =>'nullable|image',
            'idR'=>'required|string',
            'idU'=>'required|string',
        ]);
        $publicacion->update($fields);
        return redirect()->route('publicaciones.edit',$publicacion)->with('success', 'La Publicacion '. $fields['titulo']. " ha sido creado exitosamenete");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publicacion $publicacion)
    {
        $publicacion->delete();
        return redirect()->route('publicaciones.index');
    }
}
