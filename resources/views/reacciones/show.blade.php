@extends('layout')


@section('title', 'Ver Reacción')


@section('content')

    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Vista Reaccion</h1>
                <div class="row mt-3 ml-auto">
                    <div class="col-auto">
                        <div class="boton mx-2">
                <a href="{{route('reacciones.edit', $reaccion)}}" class="btn btn-primary">Editar</a>
                </div>
            </div>
            <div class="col-auto">
                <div class="boton mx-2">
                <a href="{{route('reacciones.index')}}" class="btn btn-dark">Regresar</a>
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
            <br>
                <div class="card" style="width: 20rem; margin: 0 auto;">
                    <img src="{{$reaccion->icono}}" class="card-img-top"  " alt="...">
                    <div class="card-body">
                        <h1 class="card-text">{{$reaccion->nombre}}</h1>
                    </div>
                </div>
              </div>
        </div>
    </div>
@endsection
