<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table    = "categorias";
    protected $fillable = [
    	'imagen','titulo','orden','id_padre'
    ];

    public function productos()
    {
        return $this->belongsToMany('App\Producto', 'id_producto');
    }
}
