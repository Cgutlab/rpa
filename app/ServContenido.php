<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServContenido extends Model
{
	protected $table = "serv_contenido";
    protected $fillable = [
	    'imagen',	'titulo',	'texto',	'ruta'
    ];
}
