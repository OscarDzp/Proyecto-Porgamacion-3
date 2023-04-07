@extends('layout')


@section('title', 'Crear')



@section('content')

    <div class="container">
        <div class="row-titulo">
            <div class="col">
                <h1>Crear Usuario</h1>
            </div>
        </div>
        <form class="row" action="{{route('usuarios.store')}}" method="POST">
            @csrf
            <div class="col col-12 mt-3">
                <label for="idUsuario">ID Usuario</label>
                <input type="text" name="idUsuario" class="form-control" required>
            </div>

            <div class="col col-12 mt-3">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>

            <div class="col col-12 mt-3">
                <label for="apellido">Apellido</label>
                <input type="text" name="apellido" class="form-control" required>
            </div>

            <div class="col col-12 mt-3">
                <label for="imagen">Foto de perfil</label>
                <input type="text" name="imagen" class="form-control">
            </div>

            <div class="col col-12 mt-3">
                <label for="puesto">Puesto</label>
                <input type="text" name="puesto" class="form-control" required>
            </div>

            <div class="col col-12 mt-3">
                <label for="correo">Correo electrónico</label>
                <input type="text" name="correo" class="form-control" required>
            </div>

            <div class="col col-12 mt-3">
                <label for="telefono">Número telefónico</label>
                <input type="text" name="telefono" class="form-control" required>
            </div>

            {{--Preguntar un un dropdown de generos --}}
            <div class="col col-12 mt-3">
                <label for="genero">Género</label>
                <input type="text" name="genero" class="form-control" required>
            </div>

            <div class="col col-12 mt-3">
                <label for="fecha">Fecha de nacimiento</label>
                <input type="date" name="fecha" class="form-control" required>
            </div>

            <div class="col col-12 mt-3">
                <label for="cedula">Cédula</label>
                <input type="text" name="cedula" class="form-control" required>
            </div>

            <div class="col col-12 mt-3">
                <label for="biografia">Biografía</label>
                <input type="text" name="biografia" class="form-control" required>
            </div>

            <div class="col col-12 mt-3 acciones">
                <div class="boton">
                    <input type="submit" class="btn btn-secondary" value="Enviar">
                </div>
            </div>

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
                    <a href="{{route('usuarios.index')}}" class="btn btn-dark"> Regresar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
