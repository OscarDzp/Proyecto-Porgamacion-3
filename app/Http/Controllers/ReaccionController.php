<?php

namespace App\Http\Controllers;

use App\Models\Reaccion;
use App\Http\Requests\StoreReaccionRequest;
use App\Http\Requests\UpdateReaccionRequest;

class ReaccionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return reaccion::get();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreReaccionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Reaccion $reaccion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reaccion $reaccion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReaccionRequest $request, Reaccion $reaccion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reaccion $reaccion)
    {
        //
    }
}
