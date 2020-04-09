<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TecnoGaleria extends Model
{
    protected $table = "tecno_galerias";
    protected $fillable = [    	
        'imagen','titulo','texto','orden','id_tecno_items'
    ];

    public function TecnoItem()
    {
    	return $this->belongsTo('App\TecnoItem', 'id_tecno_items');
    }
}
