@extends('layout')


@section('title', 'Crear')



@section('content')
    <div class="container">
        <div class="row-titulo">
            <div class="col">
                <h1>Crear Reacion</h1>
            </div>
        </div>
        <form class="row" action="{{route('reacciones.store')}}" method="POST">
    @csrf

            <div class="col col-12 mt-3">
                <label for="nombre">Nombre reaccion</label>
                <input required value="{{old ('nombre', $reaccion->nombre) }}" type="text" name="nombre" class="form-control" >
            </div>

            <div class="col col-12 mt-3">
                <label for="icono">icono</label>
                <input required value="{{old ('icono', $reaccion->icono) }} "type="file" name="icono" class="form-control">
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
                        <a href="{{route('reacciones.index')}}" class="btn btn-dark"> Regresar</a>
                    </div>
                </div>
            </div>
    </div>

@endsection
