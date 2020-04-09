<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NovaProducto extends Model
{
    protected $table = "nova_productos";
    protected $fillable = [    	
        'titulo', 'subtitulo', 'texto', 'orden', 'ruta', 'id_nova_categorias'
     ];

    public function NovaGaleria()
    {
    	return $this->hasMany('App\NovaGaleria');
    }

    public function NovaCategoria()
    {
    	return $this->belongsTo('App\NovaCategoria', 'id_nova_categorias');
    }
}
