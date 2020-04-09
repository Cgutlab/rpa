<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $fillable = [
        'titulo', 'titulo2', 'texto', 'texto2','imagen','politica', 'descripcion','imagen2',
    ];
}
