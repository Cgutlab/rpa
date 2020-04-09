<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    protected $table    = "galerias";
    protected $fillable = [
    	'imagen','orden','id_producto'
    ];

    public function productos()
    {
        return $this->belongsTo('App\Productos', 'id_producto');
    }    
}
