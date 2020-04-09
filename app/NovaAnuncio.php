<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NovaAnuncio extends Model
{
    protected $table = "nova_anuncios";
    protected $fillable = [
    	'imagen',	'titulo',	'orden'
    ];
}
