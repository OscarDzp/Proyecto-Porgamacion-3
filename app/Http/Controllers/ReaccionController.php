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

        ]);

        Reaccion::create($fields);
        return redirect()->route('reacciones.create')->with('success', 'La Reaccion ' . $fields['nombre'] . ' ha sido creado exitosamenete');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reaccion $reaccion)
    {
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
        $reaccion->update($fields);
        return redirect()->route('reacciones.edit', $reaccion)->with('success', 'La Reaccion '. $fields['nombre'].  " ha sido Actualizada exitosamente");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reaccion $reaccion)
    {
        try{
            $reaccion->delete();
            return redirect()->route('reacciones.index');
        } catch (\Exception $e){
            return  redirect()->back()->with('error', 'La Reaccion no se puede eliminar porque está siendo utilizado en una publicación.');
        }
    }
}
