@extends('layout')


@section('title', 'Editar perfil')



@section('content')

    <div class="container">
        <div class="row titulo">
            <div class="col">
                <h1>Editar Usuario</h1>
            </div>
        </div>
        <form class="row" action="{{route('usuarios.update',$usuario) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            @include('usuarios.form')
        @if(session()->has('success'))
            <div class="alert alert-primary alert-dismissible mt-4 fade show" role="alert">
                {{ session()->get('success')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
            </div>
        @endif
        </form>
    </div>

@endsection
