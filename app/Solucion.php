<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solucion extends Model
{
    protected $table = "soluciones";
    protected $fillable = [
        'titulo', 'descripcion', 'imagen'
    ];
}
