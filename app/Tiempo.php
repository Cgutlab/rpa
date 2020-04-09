<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tiempo extends Model
{
	protected $table = 'tiempo';
    protected $fillable = [
        'imagen', 'titulo', 'texto', 'orden'
    ];
}
