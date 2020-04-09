<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NovaGaleria extends Model
{
    protected $table = "nova_galerias";
    protected $fillable = [
    	'imagen',	'titulo',	'texto',	'orden',	'id_nova_productos'
    ];

    public function NovaProducto()
    {
    	return $this->belongsTo('App\NovaProducto', 'id_nova_productos');
    }
}
