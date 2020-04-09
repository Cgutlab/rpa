<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModeloGaleria extends Model
{
	protected $table = "modelos_galerias";
    protected $fillable = [
        'imagen', 'titulo', 'orden', 'seccion',
    ];
}
