<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    use HasFactory;

    protected $fillable=['idUsuario','nombre','apellido','imagen','puesto','correo','telefono','genero','fecha','cedula','biografia'];
}
