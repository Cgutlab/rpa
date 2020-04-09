<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destacado extends Model
{
    protected $fillable = [
        'titulo', 'texto', 'imagen', 'ruta', 'orden',
    ];
}
