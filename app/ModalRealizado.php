<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModalRealizado extends Model
{
	protected $table = "modal_realizados";
    protected $fillable = [
	    'imagen',	'imagen1',	'imagen2',	'titulo',	'subtitulo',	'texto',	'ruta',	'orden'
    ];
}
