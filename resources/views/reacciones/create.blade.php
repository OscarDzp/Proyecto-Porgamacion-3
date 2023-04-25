@extends('layout')

@section('title', 'Crear Reacción')

@section('content')
    <div class="container">
        <div class="row-titulo">
            <div class="col">
                <h1>Crear Reacción</h1>
            </div>
        </div>
        <form class="row" action="{{route('reacciones.store')}}" method="POST">
    @csrf
            @include('reacciones.form')
            @if($errors->any())
                <ul class="list-disc">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            @if(session()->has('success'))
                <div class="alert alert-primary alert-dismissible mt-4 fade show" role="alert">
                    {{ session()->get('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>
    @endif
@endsection
