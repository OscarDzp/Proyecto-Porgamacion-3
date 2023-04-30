<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PublicacionController;
use App\Http\Controllers\ReaccionController;
use App\Http\Controllers\IndexController;
?>

@extends('layout')

@section('title', 'Index Principal')

@section('content')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="https://i.redd.it/34w6wswd3zr91.png" class="rounded-end" style="max-width: 100px;" alt="Imagen de logo">
    <a class="navbar-brand" href="">Twister Social</a>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('usuarios.index')}}">Usuarios <span class="sr-only"></span></a>
            </li>
        </ul>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('publicaciones.index')}}">Publicaciones <span class="sr-only"></span></a>
            </li>
        </ul>
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{route('reacciones.index')}}">Reacciones <span class="sr-only"></span></a>
            </li>
        </ul>
</nav>
<div class="container">
    <div class="row">
        <div class="d-flex align-items-center">
        </div>
        <div class="col-md-3">
        </div >
        @foreach($publicaciones as $publicacion)
            <div class="col-12 col-sm-12">
                <div class="publicacion">
                    <div class="d-flex align-items-center">
                        <img src="{{$publicacion->usuarios->imagen}}" class="rounded-end" style="max-width: 80px;" alt="Imagen de usuario">
                        <h3 class="ml-3 mr-3">{{$publicacion->usuarios->nombre}}</h3>
                    </div>
                    <a href="{{route('publicaciones.show', $publicacion)}}" class="publicacion-link">
                        <div class="publicacion-imagen" style="background-image: url('{{$publicacion->imagen}}')"></div>
                        <div class="publicacion-contenido">
                            <h2 class="publicacion-titulo">{{$publicacion->titulo}}</h2>
                            <p class="publicacion-descripcion">{{$publicacion->descripcion}}</p>
                            <div class="d-flex align-items-start mt-2">
                                <img src="{{$publicacion->reacciones->icono}}" class="img-fluid" style="max-width: 30px;" alt="Icono de reacción">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
</body>
</html>
@endsection
