<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModeloContenido extends Model
{
	protected $table = "modelos_contenidos";
    protected $fillable = [
        'titulo', 'texto', 'seccion'
    ];
}
