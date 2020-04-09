<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicioContenido extends Model
{
    protected $table = "servicio_contenido";
    protected $fillable = [
    	'imagen','titulo','texto'
    ];
}