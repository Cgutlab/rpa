<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServicioGaleria extends Model
{
    protected $table = "servicio_galeria";
    protected $fillable = [
    	'imagen','titulo','texto','orden'
    ];
}