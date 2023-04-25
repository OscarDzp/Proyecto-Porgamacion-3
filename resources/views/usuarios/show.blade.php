@extends('layout')


@section('title', 'Perfil')


@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Administración del usuario</h1>
                <div class="row mt-3 ml-auto">
                    <div class="col-auto">
                        <div class="boton mx-2">
                            <a href="{{route('usuarios.index')}}" class="btn btn-dark">Regresar</a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="boton mx-2">
                            <a href="{{route('usuarios.edit', $usuario)}}" class="btn btn-primary">Editar</a>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="boton mx-2">
                            <form class="" action="{{route('usuarios.destroy', $usuario)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Eliminar">
                            </form>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="{{$usuario->imagen}}" alt="Foto de perfil del usuario">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-body">
                                <h2>ID del usuario: {{$usuario->id}}</h2>
                                <h2>Nombre: {{$usuario->nombre}}</h2>
                                <h2>Apellido: {{$usuario->apellido}}</h2>
                                <h2>Puesto: {{$usuario->puesto}}</h2>
                                <h2>Correo: {{$usuario->correo}}</h2>
                                <h2>Número telefónico: {{$usuario->telefono}}</h2>
                                <h2>Género: {{$usuario->genero}}</h2>
                                <h2>Fecha de nacimiento: {{$usuario->fecha}}</h2>
                                <h2>Cédula: {{$usuario->cedula}}</h2>
                                <h2>Biografía: {{$usuario->biografia}}</h2>
                            </div>
                        </div>
                    </div>
                    <h2 class="text-center" >Publicaciones</h2>
                    @foreach($usuario->publicaciones as $publicacion)
                    <div class="card mx-auto" style="width: 50rem;">
                        <br class="card-body">
                            <h5 class="card-title"> {{$publicacion -> titulo}}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary"></h6>
                            <p class="card-text">{{$publicacion -> descripcion}}</p>
                            <a href="#" class="card-link"><img class="card-img-top img-fluid" src="{{$publicacion->imagen}}" alt="Foto de perfil del usuario"></a>
                            <br>
                            <a href="#" class="card-link"><img class="card-img-top img-fluid icono-reaccion" src="{{$publicacion->reacciones->icono}}" alt="Foto de perfil del usuario"></a>
                            <br>
                        </div>
                    </div>
                        @endforeach
                </div>
            </div>
        </div>


@endsection
