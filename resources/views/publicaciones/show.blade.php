@extends('layout')


@section('title', 'publicacion')



@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Vista Publicacion</h1>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
            <h2>Titulo: {{$publicacion->titulo}}</h2>
            <h2>Descipcion: {{$publicacion->descripcion}}</h2>
            <h2>Id de reaccion: {{$publicacion->idR}}</h2>
            <h2>Id de Usuario: {{$publicacion->idU}}</h2>
                </div>
        </div>

    <div class="col-md-4">
        <div class="card">
            <img class="card-img-top img-fluid" src="{{$publicacion->imagen}}" alt="Foto de perfil del usuario">
        </div>
    </div>
            <div class="row mt-3">
                <div class="col-auto">
                    <div class="boton mx-2">
                    <a href="{{route('publicaciones.index')}}" class="btn btn-dark">Regresar</a>
                </div>
                </div>

                    <div class="col-auto">
                        <div class="boton mx-2">
                    <a href="{{route('publicaciones.edit', $publicacion)}}" class="btn btn-primary">Editar</a>
                </div>
                    </div>

                <div class="col-auto">
                    <div class="boton mx-2">
                <form class="" action="{{route('publicaciones.destroy', $publicacion)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Eliminar">

                </form>
            </div>
        </div>
       </div>

        </div>
    </div>

@endsection
