<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PrcGaleria extends Model
{
    protected $table = "prc_galerias";
    protected $fillable = [    	
        'imagen','titulo','texto','orden','id_prc_items'
    ];

    public function PrcItem()
    {
    	return $this->belongsTo('App\TecnoItem', 'id_prc_items');
    }
}
