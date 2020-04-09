<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Novedad extends Model
{
    protected $table = "novedades";
    protected $fillable = [
    	'imagen', 'titulo', 'breve', 'resena', 'fecha', 'descripcion', 'pdf', 'id_categoria'
    ];

    public function categoria()
    {
    	return $this->belongsTo('App\Categoria', 'id_categoria');
    }    
}