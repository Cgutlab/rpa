<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoNovedad extends Model
{
    protected $table = "productos_novedads";
    protected $fillable = [
    	'imagen', 'titulo', 'extracto', 'texto', 'orden', 'ficha', 'fecha', 'id_categorias_novedads'
    ];

    public function CategoriaNovedad()
    {
    	return $this->belongsTo('App\CategoriaNovedad', 'id_categorias_novedads');
    }    

    public function GaleriaNovedad()
    {
    	return $this->hasMany('App\GaleriaNovedad');
    }
}