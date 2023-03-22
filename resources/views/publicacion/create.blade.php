@extends('layout')


@section('title', 'crear publicacion')



@section('content')

    <div class="container">
        <div class="row-titulo">
            <div class="col">
                <h1>Crear Publicacion</h1>
            </div>
        </div>
        <form class="row" action="{{route('publicacion.store')}}" method="POST">
            @csrf
            <div class="col col-12 mt-3">
                <label for="idPublicacion">ID Publicacion</label>
                <input type="text" name="idPublicacion" class="form-control" required>
            </div>

            <div class="col col-12 mt-3">
                <label for="idUsuario">ID Usuario</label>
                <input type="text" name="idUsuario" class="form-control" required>
            </div>

            <div class="col col-12 mt-3">
                <label for="descripcion">Descripcion </label>
                <input type="text" name="descripcion" class="form-control" required>
            </div>

            <div class="col col-12 mt-3">
                <label for="titulo">Titulo de Publicacion</label>
                <input type="text" name="titulo" class="form-control" required>
            </div>

            <div class="col col-12 mt-3">
                <label for="imagen">Imagen de Publicacion</label>
                <input type="image" name="imagen" class="form-control">
            </div>

            <div class="col col-12 mt-3 acciones">
                <div class="boton">
                    <input type="submit" class="btn btn-secondary" value="Enviar">
                </div>
            </div>


        </form>
        @if(session()->has('success'))
            <div class="alter alter-primary alter-dismissible mt-4 fade show" role="alert">
                {{session()->get('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>

        @endif

        <br>

        <div class="row-acciones">
            <div class="col-auto">
                <div class="boton">
                    <a href="{{route('publicacion.index')}}" class="btn btn-dark"> Regresar</a>
                </div>
            </div>
        </div>
    </div>

@endsection
