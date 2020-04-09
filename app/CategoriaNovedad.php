<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class CategoriaNovedad extends Model

{

	protected $table = "categorias_novedads";

    protected $fillable = [

        'imagen', 'titulo', 'texto', 'orden',

    ];

    

    public function ProductoNovedad()

    {

    	return $this->hasMany('App\ProductoNovedad');

    }

}