<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TecnoContenido extends Model
{
    protected $table = "tecno_contenido";
    protected $fillable = [
		'imagen','titulo','texto'
    ];
}