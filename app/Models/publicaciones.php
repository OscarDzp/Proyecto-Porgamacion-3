<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publicaciones extends Model
{
    use HasFactory;


    protected $fillable =['idUsuario','nombre','apellido','cedula','genero','telefono','correo','fecha','puesto','imagen','biografia'];

}
