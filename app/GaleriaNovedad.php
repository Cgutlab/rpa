<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GaleriaNovedad extends Model
{
    protected $table = "galerias_novedads";
    protected $fillable = [
		'imagen','orden','id_productos_novedads'
    ];

    public function ProductoNovedad()
    {
    	return $this->belongsTo('App\ProductoNovedad', 'id_productos_novedads');
    }   
    
}