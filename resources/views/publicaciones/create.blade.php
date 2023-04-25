@extends('layout')


@section('title', 'Crear Publicación')



@section('content')

    <div class="container">
        <div class="row-titulo">
            <div class="col">
                <h1>Crear Publicación</h1>
            </div>
        </div>
        <form class="row" action="{{route('publicaciones.store')}}" method="POST">
    @csrf
      @include('publicaciones.form')
        </form>
        @if(session()->has('success'))
            <div class="alert alert-primary alert-dismissible mt-4 fade show" role="alert">
                {{ session()->get('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
        @endif
    </div>
@endsection
