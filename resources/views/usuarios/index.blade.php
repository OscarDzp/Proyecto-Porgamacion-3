@extends('layout')


@section('title', 'Usuario')



@section('content')
    <div class="container">
        <div class="row-titulo">
            <div class="col">
                <h1>Usuarios</h1>
                <br>
            </div>
        </div>

        <div class="row-acciones">
            <div class="col-auto">
                <div class="boton">
                    <a href="{{route('usuarios.create')}}" class="btn btn-success"> Crear</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col tarjetas">
                <div class="container">
                    <div class="row">
                        @foreach($usuarios as $usuario)
                            <div class="col-12 col-sm-12">
                                <a href="{{route('usuarios.show', $usuario)}}" class="tarjeta">
                                    <h2>{{$usuario->nombre}}</h2>

                                    <div>hola</div>
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
