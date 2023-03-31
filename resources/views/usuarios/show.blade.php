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
            <div class="col-md-6">
            <h2>ID del usuario: {{$usuario->id}}</h2>
{{--            <h2>Foto de perfil: {{$usuario->imagen}}</h2>--}}
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
            <div class="col-md-6">
                <img src="{{$usuario->imagen}}" alt="Foto de perfil del usuario">
            </div>
        </div>

        <div class="row-acciones">
            <div class="col-auto d-flex justify-content-start align-items-center">
                <div class="boton mx-2">
                    <a href="{{route('usuarios.index')}}" class="btn btn-dark">Regresar</a>
                </div>

            <div class="boton mx-2">
                        <a href="{{route('usuarios.edit', $usuario)}}" class="btn btn-primary">Editar</a>
                </div>

            <div class="boton mx-2">
                <form class="" action="{{route('usuarios.destroy', $usuario)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Eliminar">

                </form>
            </div>
        </div>
</div>
    </div>

@endsection
