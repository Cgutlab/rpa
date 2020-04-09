<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Correo extends Model
{
    protected $fillable = [
        'titulo', 'texto', 'imagen', 'orden',
    ];
}
