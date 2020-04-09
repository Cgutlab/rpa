<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RealizadoModal extends Model
{
    protected $table = "realizados_modal";
    protected $fillable = [
    	'imagen','imagen1','imagen2','titulo','subtitulo','texto','orden'
    ];
}