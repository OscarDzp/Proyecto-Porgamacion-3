@extends('layout')


@section('title', 'Usuario')



@section('content')
    <div class="container">
        <div class="row-titulo">
            <div class="col">
                <h1>Usuarios</h1>
                <br>
            </div>
        </div>
        <div class="row-acciones">
            <div class="col-auto">
                <div class="boton">
                    <a href="{{route('usuarios.create')}}" class="btn btn-success"> Crear</a>
                    <a href="{{route('index')}}" class="btn btn-danger">Regresar</a>
                </div>
            </div>
        </div>
<div><br></div>
        <div class="row">
            @foreach($usuarios as $usuario)
            <div class="col-md-6 col-lg-4">
                <div class="usuario">
                    <a href="{{route('usuarios.show', $usuario)}}" class="usuario-link">
                        <div class="usuario-imagen" style="background-image: url('{{$usuario->imagen}}')"></div>
                                    <div class="usuario-contenido">
                                    <h2 class="usuario-titulo">{{$usuario->nombre, $usuario->apellido}}</h2>
                                        <h2 class="usuario-descripcion">{{$usuario->apellido}}</h2>
                                        <p class="usuario-descripcion">{{$usuario->genero}}</p>
                                    </div>
                                </a>
                        <br>
                  </div>
            </div>
            @endforeach
        </div>
    </div>


@endsection
