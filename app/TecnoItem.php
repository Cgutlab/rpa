<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TecnoItem extends Model
{
    protected $table = "tecno_items";
    protected $fillable = [
		'imagen','titulo','subtitulo','texto','orden'
    ];

    public function TecnoGaleria()
    {
    	return $this->hasMany('App\TecnoGaleria');
    }
}
