@extends('layout')


@section('title', 'Reaccion')



@section('content')
    <div class="container">
        <div class="row-titulo">
            <div class="col">
                <h1>Reaccion</h1>
                <br>
            </div>
        </div>

        <div class="row-acciones">
            <div class="col-auto">
                <div class="boton">
                    <a href="{{route('reacciones.create')}}" class="btn btn-success"> Crear</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col tarjetas">
                <div class="container">
                    <div class="row">
                        @foreach($reacciones as $reaccion)
                            <div class="col-12 col-sm-12">
                                <a href="{{route ('reacciones.show', $reaccion)}}" class="tarjeta">
                                    <h2>{{$reaccion->nombre}}</h2>
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
