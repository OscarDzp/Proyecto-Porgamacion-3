@extends('layout')


@section('title', 'Perfil')



@section('content')
    <div class="container">
        <div class="row-titulo">
            <div class="col">
                <h1>Vista Usuario</h1>
                <br>
            </div>
        </div>



        <div class="row contenido">
            <h2>ID: {{$usuario->id}}</h2>
            <h2>Foto de perfil: {{$usuario->imagen}}</h2>
            <h2>Nombre: {{$usuario->nombre}}</h2>
            <h2>Apellido: {{$usuario->apellido}}</h2>
            <h2>Puesto: {{$usuario->puesto}}</h2>
            <h2>Correo: {{$usuario->correo}}</h2>
            <h2>Número telefónico: {{$usuario->telefono}}</h2>
            <h2>Genero: {{$usuario->genero}}</h2>
            <h2>Nacimineto: {{$usuario->fecha}}</h2>
            <h2>Cédula: {{$usuario->cedula}}</h2>
            <h2>Biografía: {{$usuario->biografia}}</h2>

        </div>

        <div class="row-acciones">
            <div class="col-auto">
                <div class="boton">
                    <a href="{{route('usuarios.index')}}" class="btn btn-dark">Regresar</a>
                </div>
            </div>
            <div class="col-auto">
                <form class="" action="{{route('usuarios.destroy', $usuario)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Eliminar">

                </form>
            </div>
        </div>
    </div>


@endsection
