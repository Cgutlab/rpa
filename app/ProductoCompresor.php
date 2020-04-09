<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoCompresor extends Model
{
    protected $table = "productos_compresors";
    protected $fillable = [
    	'imagen','imagen1','imagen2','titulo','texto','texto1','ficha','dibujo','dibujo1','ruta','orden','id_categorias_compresors'
    ];

    public function CategoriaCompresor()
    {
    	return $this->belongsTo('App\CategoriaCompresor', 'id_categorias_compresors');
    }    
}