@extends('layout')


@section('title', ' Show publicacion')



@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Publicación</h1>
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
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 ">
                        <div class="card" style="width: 30rem;">
                            <div class="d-flex align-items-center">
                                <img src="{{$publicacion->usuarios->imagen}}" class="rounded-end" style="max-width: 80px;" alt="Imagen de usuario">
                                <h3 class="ml-3 mr-3">{{$publicacion->usuarios->nombre}}</h3>
                            </div>
                            <h6 class="mt-3 ml-3">{{$publicacion->titulo}}</h6>
                            <div class="card-body">
                                <p class="card-text">{{$publicacion->descripcion}}</p>
                            </div>
                            <div class="d-flex flex-column">
                                <img src="{{$publicacion->imagen}}" class="card-img-top mt-3" alt="Imagen de publicación">
                                <div class="d-flex align-items-start mt-2">
                                    <img src="{{$publicacion->reacciones->icono}}" class="img-fluid" style="max-width: 30px;" alt="Icono de reacción">
                                 </div>
                          </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
