<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajamo extends Model
{
	protected $table = 'trabajamos';
    protected $fillable = [
        'imagen', 'titulo', 'subtitulo', 'texto', 'orden'
    ];
}
