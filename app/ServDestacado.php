<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServDestacado extends Model
{
	protected $table = "serv_destacados";
    protected $fillable = [
    	'imagen',	'titulo',	'texto',	'ruta',	'orden',	'seccion'
    ];
}
