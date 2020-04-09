<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $table    = "colores";
    protected $fillable = [
    	'titulo','codigo','orden'
    ];

    public function productos()
    {
        return $this->belongsToMany('App\Producto', 'color_producto', 'id_color', 'id_producto');
    }
}
