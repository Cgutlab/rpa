<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talla extends Model
{
    protected $table    = "tallas";
    protected $fillable = [
    	'imagen','titulo','orden'
    ];

    public function productos()
    {
        return $this->hasMany('App\Producto', 'id_producto');
    }
}
