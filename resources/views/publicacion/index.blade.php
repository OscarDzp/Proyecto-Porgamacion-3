@extends('layout')


@section('title', 'Publicaciones')



@section('content')

    <div class="container">
        <div class="row-titulo">
            <div class="col">
                <h1>Publicaciones </h1>
                <br>
            </div>
        </div>

        <div class="row-acciones">
            <div class="col-auto">
                <div class="boton">
                    <a href="{{route('publicacion.create')}}" class="btn btn-success"> Crear</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col tarjetas">
                <div class="container">
                    <div class="row">
                        @foreach($publicacion as $publicaciones)
                            <div class="col-12 col-sm-12">
                                <a href="{{route('publicacion.show', $publicaciones)}}" class="tarjeta">
                                    <h2>{{$publicaciones->titulo}}</h2>
                                </a>
                                <br>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
