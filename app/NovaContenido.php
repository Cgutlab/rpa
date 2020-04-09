<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NovaContenido extends Model
{
    protected $table = "nova_contenido";
    protected $fillable = [
    	'imagen',	'titulo',	'texto'
    ];
}
