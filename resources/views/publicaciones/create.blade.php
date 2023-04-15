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
      @include('publicaciones.form')
        </form>
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
