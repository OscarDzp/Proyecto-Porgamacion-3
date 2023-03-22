@extends('layout')


@section('title', 'Mostrar Publicacion')



@section('content')

    <div class="container">
        <div class="row-titulo">
            <div class="col">
                <h1>Vista Publicaciones</h1>
                <br>
            </div>
        </div>


    <div class="row contenido">
        <h2>ID: {{$publicaciones->id}}</h2>
        <h2>ID Publicacion: {{$publicaciones->idPublicacion}}</h2>
        <h2>ID Usuario: {{$publicaciones->idUsuario}}</h2>
        <h2>Descripcion: {{$publicaciones->descripcion}}</h2>
        <h2>Titulo: {{$publicaciones->titulo}}</h2>
        <h2>Imagen: {{$publicaciones->imagen}}</h2>
    </div>

        <div class="row-acciones">
            <div class="col-auto">
                <div class="boton">
                    <a href="{{route('publicacion.index')}}" class="btn btn-dark">Regresar</a>
                </div>
            </div>
            <div class="col-auto">
                <form class="" action="{{route('publicacion.destroy', $publicaciones)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Eliminar">
                </form>
            </div>
        </div>

</div>
@endsection
