<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'descripcion', 'imagen'];

    public function publicaciones()
    {
        return $this->belongsTo("App\Models\usuario", "idUsuario");
    }
}
