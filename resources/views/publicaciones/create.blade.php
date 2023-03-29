@extends('layout')


@section('title', 'Crear')



@section('content')

    <div class="container">
        <div class="row-titulo">
            <div class="col">
                <h1>Crear Publicacion</h1>
            </div>
        </div>
        <form class="row" action="{{route('publicaciones.store')}}" method="POST">
    @csrf
            <div class="col col-12 mt-3">
                <label for="titulo">Nombre</label>
                <input type="text" name="titulo" class="form-control" required>
            </div>

            <div class="col col-12 mt-3">
                <label for="descripcion">Apellido</label>
                <input type="text" name="descripcion" class="form-control" required>
            </div>

            <div class="col col-12 mt-3">
                <label for="imagen">Imagen</label>
                <input type="image" name="imagen" class="form-control">
            </div>
            <div class="col col-12 mt-3">
                <label for="idR">id reaccion</label>
                <input type="text" name="idR" class="form-control" required>
            </div>

            <div class="col col-12 mt-3">
                <label for="idU">id Usuario</label>
                <input type="text" name="idU" class="form-control" required>
            </div>


            <div class="col col-12 mt-3 acciones">
                <div class="boton">
                    <input type="submit" class="btn btn-secondary" value="Enviar">
                </div>
            </div>

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
                        <a href="{{route('publicaciones.index')}}" class="btn btn-dark"> Regresar</a>
                    </div>
                </div>
            </div>
    </div>
@endsection
