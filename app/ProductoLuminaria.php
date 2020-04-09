<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoLuminaria extends Model
{
    protected $table = "productos_luminarias";
    protected $fillable = [
		'imagen','imagen1','imagen2','titulo','texto','texto1','ficha','dibujo','dibujo1','ruta','orden','id_categorias_luminarias'
    ];

    public function categorialuminaria()
    {
    	return $this->belongsTo('App\CategoriaLuminaria', 'id');
    }    
    
}