@extends('layout')


@section('title', 'Usuario')



@section('content')
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>

<div class="container">
    <div class="row-titulo">
        <div class="col">
            <h1>Banner inicio</h1>
            <br>
        </div>
    </div>

<div class="acccines">
    <div class="row-acciones">
        <div class="col-auto">
            <div class="boton">
                <a href="{{route('publicaciones.create')}}" class="btn btn-success"> Crear publicacion</a>
            </div>
        </div>
    </div>
    <br>
</div>





</body>
</html>
