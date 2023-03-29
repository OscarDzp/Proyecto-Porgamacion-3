@extends('layout')


@section('title', 'Editar reaccion')



@section('content')
    <div class="container">
        <div class="row titulo">
            <div class="col">
                <h1>Editar Reaccion</h1>
            </div>
        </div>

        <div class="row acciones">
            <div class="col-auto">
                <div class="boton">
                    <a href="{{route('reacciones.show',$reaccion)}}" class="btn btn-primary">Regresar</a>
                </div>
            </div>
        </div>

        <form class="row" action="{{route('reacciones.update',$reaccion) }}" method="POST">
            @csrf
            @method('PATCH')
            @include('reacciones.form')
        </form>

        @if(session()->has('success'))
            <div class="alert alert-primary alert-dismissible mt-4 fade show" role="alert">
                {{ session()->get('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
        @endif
    </div>
@endsection
