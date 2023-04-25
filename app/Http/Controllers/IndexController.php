<?php

namespace App\Http\Controllers;
use App\Models\Publicacion;
use App\Http\Requests\StorePublicacionRequest;
use App\Http\Requests\UpdatePublicacionRequest;
use App\Models\Reaccion;
use App\Models\usuario;

class IndexController extends Controller
{
    public function index()
    {
        $publicaciones = Publicacion::with("usuarios","Reacciones")->get();
        return view('Principal.index', ['publicaciones' => $publicaciones]);

    }

}
