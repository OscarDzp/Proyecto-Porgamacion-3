<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use App\Http\Requests\StorePublicacionRequest;
use App\Http\Requests\UpdatePublicacionRequest;
use App\Models\Reaccion;
use App\Models\usuario;


class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publicaciones = Publicacion::with("usuarios","Reacciones")->get();
        return view('publicaciones.index', ['publicaciones' => $publicaciones]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $usuarios = Usuario::get();
        $reacciones = Reaccion::get();
        return view ( 'publicaciones.create', ['publicacion'=> new Publicacion(),'usuarios'=>$usuarios,'reacciones'=>$reacciones]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePublicacionRequest $request)
    {
     $fields =  $request->validate([
         'titulo' => 'required|string',
         'descripcion' => 'required|string',
          'imagen' =>'nullable|string',
         'idR'=>'required|string',
         'idU'=>'required|string',
     ]);
        Publicacion::create($fields);
        return redirect()->route('publicaciones.create')->with('success', 'La Publicacion '. $fields['titulo']. " ha sido creada exitosamenete");
    }

    /**
     * Display the specified resource.
     */
    public function show(Publicacion $publicacion)
    {
        $usuarios = Usuario::get();
        $reacciones = Reaccion::get();
        return view ('publicaciones.show', ['publicacion'=> $publicacion]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publicacion $publicacion)
    {
        $usuarios = Usuario::get();
        $reacciones = Reaccion::get();
        return view ('publicaciones.edit', ['publicacion'=>$publicacion,'usuarios'=>$usuarios,'reacciones'=>$reacciones]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePublicacionRequest $request, Publicacion $publicacion)
    {
        $fields =  $request->validate([
            'titulo' => 'required|string',
            'descripcion' => 'required|string',
            'imagen' =>'nullable|string',
            'idR'=>'required|string',
            'idU'=>'required|string',
        ]);
        $publicacion->update($fields);
        return redirect()->route('publicaciones.edit',$publicacion)->with('success', 'La Publicacion '. $fields['titulo']. " ha sido Actualizada exitosamenete");
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
