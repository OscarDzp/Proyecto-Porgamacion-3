@extends('layout')


@section('title', 'reaccion')



@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Vista Reaccion</h1>
            </div>
        </div>


        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
            <h2>Id Publicacion: {{$reaccion->id}}</h2>
            <h2>Nombre: {{$reaccion->nombre}}</h2>
{{--            <h2>Icono: {{$reaccion->icono}}</h2>--}}
                   </div>
            </div>

            <div class="row mt-3">
                <div class="col-auto">
                    <div class="boton mx-2">
                <img class="card-img-top img-fluid" src="{{$reaccion->icono}}" alt="icono">
            </div>
        </div>
                <div class="row mt-3">
                    <div class="col-auto">
                        <div class="boton mx-2">
                    <a href="{{route('reacciones.index')}}" class="btn btn-dark">Regresar</a>
                </div>
            </div>

                <div class="col-auto">
                    <div class="boton mx-2">
                    <a href="{{route('reacciones.edit', $reaccion)}}" class="btn btn-primary">Editar</a>
                </div>
            </div>

                <div class="col-auto">
                    <div class="boton mx-2">
                <form class="" action="{{route('reacciones.destroy', $reaccion)}}" method="POST">
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
