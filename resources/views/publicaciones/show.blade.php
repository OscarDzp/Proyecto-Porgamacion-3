@extends('layout')


@section('title', 'publicacion')



@section('content')

    <div class="container">
        <div class="row-titulo">
            <div class="col">
                <h1>Vista Publicacion</h1>
                <br>
            </div>
        </div>

        <div class="row contenido">
            <div class="col-md-6">
            <h2>Titulo: {{$publicacion->titulo}}</h2>
            <h2>Descipcion: {{$publicacion->descripcion}}</h2>
{{--            <h2>Imagen: {{$publicacion->imagen}}</h2>--}}
            <h2>Id de reaccion: {{$publicacion->idR}}</h2>
            <h2>Id de Usuario: {{$publicacion->idU}}</h2>

        </div>
                 <div class="col-md-6">
                          <img src="{{$publicacion->imagen}}" alt="publicacion">
                </div>
            </div>

        <div class="row-acciones">
            <div class="col-auto d-flex justify-content-start align-items-center">
                <div class="boton mx-2">
                    <a href="{{route('publicaciones.index')}}" class="btn btn-dark">Regresar</a>
                </div>


                <div class="boton mx-2">
                    <a href="{{route('publicaciones.edit', $publicacion)}}" class="btn btn-primary">Editar</a>
                </div>


            <div class="col-boton mx-2">
                <form class="" action="{{route('publicaciones.destroy', $publicacion)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Eliminar">

                </form>
            </div>
        </div>
    </div>

@endsection
