<?php

namespace App\Http\Controllers;

use App\Models\Reaccion;
use App\Http\Requests\StoreReaccionRequest;
use App\Http\Requests\UpdateReaccionRequest;
use Illuminate\Support\Facades\Storage;
use Psy\Readline\Hoa\Console;

class ReaccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reacciones = Reaccion::with("publicaciones")->get();
        return view('reacciones.index',['reacciones' => $reacciones]);

//        return reaccion::get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view ( 'reacciones.create', ['reaccion'=> new Reaccion()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReaccionRequest $request)
    {
        $fields = $request->validate([
            'nombre' => 'required|string',
            'icono' =>'nullable|string',
//            'icono' =>'image|mimes:jpeg,png,jpg,webp|max:1024',
        ]);

//        $icono = $request->file('icono')->store('public/images');
//        $fields['icono']=$icono;

        Reaccion::create($fields);
        return redirect()->route('reacciones.create')->with('success', 'La Reaccion ' . $fields['nombre'] . ' ha sido creado exitosamenete');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reaccion $reaccion)
    {
//        $reaccion->icono = Storage::url($reaccion->icono);
        return view ('reacciones.show', ['reaccion' => $reaccion]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reaccion $reaccion)
    {
        return view ('reacciones.edit', ['reaccion'=>$reaccion]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReaccionRequest $request, Reaccion $reaccion)
    {
        $fields = $request->validate([
            'nombre' => 'required|string',
            'icono' =>'nullable|string',
        ]);

//        if($request->hasFile('imagen')) {
//            Storage::delete($reaccion->icono);
//            $icono = $request->file('icono')->store('public/image');
//            $fields['icono'] = $icono;
//        } else {
//            $fields['imagen'] = $reaccion->imagen;
//        }



        $reaccion->update($fields);
        return redirect()->route('reacciones.edit', $reaccion)->with('success', 'La Reaccion '. $fields['nombre'].  " ha sido Actualizada exitosamente");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reaccion $reaccion)
    {
        $reaccion->delete();
        return redirect()->route('reacciones.index');
    }
}
