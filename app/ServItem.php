<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServItem extends Model
{
	protected $table = "serv_items";
    protected $fillable = [
    	'imagen',	'titulo',	'texto',	'ruta',	'orden'
    ];
}
