<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListaDeProductos extends Model
{
    protected $table = "listarproductos";
    protected $fillable = [
        'titulo', 'texto'
    ];
}