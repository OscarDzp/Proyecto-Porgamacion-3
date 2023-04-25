@extends('layout')


@section('title', 'Publicacion')



@section('content')
    <div class="container">
        <div class="row-titulo">
            <div class="col">
                <h1>Publicación</h1>
                <br>
            </div>
        </div>
        <div class="row-acciones">
            <div class="col-auto">
                <div class="boton">
                    <a href="{{route('publicaciones.create')}}" class="btn btn-success">Crear</a>
                    <a href="{{route('index')}}" class="btn btn-danger">Regresar</a>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            @foreach($publicaciones as $publicacion)
                <div class="col-12 col-sm-12">
                    <div class="publicacion">
                        <a href="{{route('publicaciones.show', $publicacion)}}" class="publicacion-link">
                            <div class="publicacion-imagen" style="background-image: url('{{$publicacion->imagen}}')"></div>
                            <div class="publicacion-contenido">
                                <h2 class="publicacion-titulo">{{$publicacion->titulo}}</h2>
                                <p class="publicacion-descripcion">{{$publicacion->descripcion}}</p>
                                <a href="#" class="card-link"><img class="card-img-top img-thumbnail" src="{{$publicacion->reacciones->icono}}" alt="Foto de perfil del usuario"></a>
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



@endsection
