<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdAlambrado extends Model
{
    protected $table = "productos_alambrados";
    protected $fillable = [
    	'imagen','imagen1','imagen2','titulo','texto1','texto2','ficha','ruta','orden','seccion'
    ];
}