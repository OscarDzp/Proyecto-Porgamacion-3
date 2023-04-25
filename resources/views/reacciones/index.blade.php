@extends('layout')


@section('title', 'Reacción')


@section('content')
    <div class="container">
        <div class="row-titulo">
            <div class="col">
                <h1>Reacciones</h1>
                <br>
            </div>
        </div>
        <div class="row-acciones">
            <div class="col-auto">
                <div class="boton">
                    <a href="{{route('reacciones.create')}}" class="btn btn-success"> Crear</a>
                    <a href="{{route('index')}}" class="btn btn-danger">Regresar</a>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col tarjetas">
                <div class="container">
                    <div class="row">
                        @foreach($reacciones as $reaccion)
                            <div class="col-md-4 col-sm-6 mb-4">
                                <div class="card h-100">
                                    <a href="{{route ('reacciones.show', $reaccion)}}">
                                        <img class="card-img-top" src="{{$reaccion->icono}}" alt="{{$reaccion->nombre}}">
                                    </a>
                                    <div class="card-body">
                                        <h4 class="card-title">{{$reaccion->nombre}}</h4>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
