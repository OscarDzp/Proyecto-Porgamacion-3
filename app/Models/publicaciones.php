<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publicaciones extends Model
{
    use HasFactory;


    protected $fillable =['idPublicacion','idUsuario','titulo','descripcion','imagen'];

}
