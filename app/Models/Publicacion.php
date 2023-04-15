<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function usuarios(){
        return $this->belongsTo("App\Models\usuario", "idU");
    }
    public function reacciones(){
        return $this->belongsTo("App\Models\Reaccion", "idR");
    }
}
