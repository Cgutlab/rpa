<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicioDestacado extends Model
{
    protected $table = "servicio_destacado";
    protected $fillable = [
    	'imagen','titulo','texto','orden'
    ];
}