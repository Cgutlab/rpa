<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table    = "marcas";
    protected $fillable = [
    	'imagen','titulo','orden'
    ];

    public function productos()
    {
        return $this->belongsToMany('App\Producto', 'id_producto');
    }
}
