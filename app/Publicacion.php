<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
	protected $table = 'publicacions';
    protected $fillable = [
        'imagen', 'titulo', 'texto', 'orden'
    ];
}
