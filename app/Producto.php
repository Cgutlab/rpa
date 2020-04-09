<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table    = "productos";
    protected $fillable = [
    	'codigo','titulo','texto','orden','visible','oferta','ficha','id_categoria','id_marca'
    ];

    public function galerias()
    {
        return $this->HasMany('App\Producto', 'id_galeria');
    }

    public function categorias()
    {
        return $this->belongsTo('App\Categoria', 'id_categoria');
    }

    public function marcas()
    {
        return $this->belongsTo('App\Marca', 'id_marca');
    }       

    public function colores()
    {
        return $this->belongsToMany('App\Color', 'color_producto', 'id_producto', 'id_color');
    }

    public function tallas()
    {
        return $this->belongsToMany('App\Talla', 'talla_producto', 'id_producto', 'id_talla');
    }
}
