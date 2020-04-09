<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrcItem extends Model
{
    protected $table = "prc_items";
    protected $fillable = [
		'imagen',	'titulo',	'subtitulo',	'texto',	'orden'
    ];

    public function PrcGaleria()
    {
    	return $this->hasMany('App\PrcGaleria');
    }
}
