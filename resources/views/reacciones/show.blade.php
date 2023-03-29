@extends('layout')


@section('title', 'reaccion')



@section('content')
    <div class="container">
        <div class="row-titulo">
            <div class="col">
                <h1>Vista Reaccion</h1>
                <br>
            </div>
        </div>

        <div class="row contenido">
            <h2>Id Publicacion: {{$reaccion->id}}</h2>
            <h2>Nombre: {{$reaccion->nombre}}</h2>
            <h2>Icono: {{$reaccion->icono}}</h2>
        </div>

        <div class="row-acciones">
            <div class="col-auto">
                <div class="boton">
                    <a href="{{route('reacciones.index')}}" class="btn btn-dark">Regresar</a>
                </div>
            </div>

            <div class="col-auto">
                <div class="boton">
                    <a href="{{route('reacciones.edit', $reaccion)}}" class="btn btn-primary">Editar</a>
                </div>
            </div>

            <div class="col-auto">
                <form class="" action="{{route('reacciones.destroy', $reaccion)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Eliminar">

                </form>
            </div>
        </div>
    </div>





@endsection
