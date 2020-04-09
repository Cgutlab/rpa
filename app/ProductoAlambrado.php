<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoAlambrado extends Model
{
	protected $table = "productos_alambrados";
    protected $fillable = [
    	'imagen',	'imagen1',	'imagen2',	'titulo',	'texto',	'texto1',	'ficha',	'ruta',	'orden',	'seccion'
    ];
}
