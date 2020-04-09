<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NovaCategoria extends Model
{
    protected $table = "nova_categorias";
    protected $fillable = [
    	'imagen',	'titulo',	'texto', 'orden'
    ];

    public function NovaProducto()
    {
    	return $this->hasMany('App\NovaProducto');
    }
}
