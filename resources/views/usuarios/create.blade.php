@extends('layout')


@section('title', 'Crear Usuario')


@section('content')

    <div class="container">
        <div class="row-titulo">
            <div class="col">
                <h1>Crear Usuario</h1>
            </div>
        </div>
        <form class="row" action="{{route('usuarios.store')}}" method="POST">
            @include('usuarios.form')
            @csrf
        </form>
        @if(session()->has('success'))
            <div class="alert alert-primary alert-dismissible mt-4 fade show" role="alert">
                {{ session()->get('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
        @endif
    </div>
@endsection
