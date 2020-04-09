<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicioArticulo extends Model
{
    protected $table = "servicio_articulo";
    protected $fillable = [
    	'imagen','titulo','texto','orden'
    ];
}