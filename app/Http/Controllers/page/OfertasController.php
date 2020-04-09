<?php



namespace App\Http\Controllers\page;



use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Categoria;



use App\Producto;

use App\Galeria;

use App\Marca;

use App\Talla;



class OfertasController extends Controller

{

    public function index()

    {
        $all0_categorias = Categoria::orderBy('orden','asc')->get();
        $all1_categorias = Categoria::orderBy('orden','asc')->get();
        $all2_categorias = Categoria::orderBy('orden','asc')->get();
        $all3_categorias = Categoria::orderBy('orden','asc')->get();
        $all4_categorias = Categoria::orderBy('orden','asc')->get();
        $all5_categorias = Categoria::orderBy('orden','asc')->get();
        $all_productos = Producto::orderBy('orden','asc')->get();
            $categorias = Categoria::orderBy('orden','asc')->get();

            $selec_categorias = Categoria::where('id_padre', '0')->orderBy('orden','asc')->get();

        $productos = Producto::where('oferta', '<>', 'ninguna')->orderBy('orden','asc')->paginate(9);

    	$galerias = Galeria::orderBy('orden','asc')->get();

    	$marcas = Marca::orderBy('orden','asc')->get();

        $active='ofertas';

        $contador = 0;
    	$variable = 0;

        return view('page.productos', compact('variable','all0_categorias','all1_categorias','all2_categorias','all3_categorias','all4_categorias','all5_categorias','all_productos',  'selec_categorias','marcas','galerias','productos','active','categorias'));

    }

/*

    public function filter()

    {

        $productos = Producto::orderBy('orden','asc')->paginate(9);

    	$marcas = Marca::orderBy('orden','asc')->get();

        $active='productos';

    	$contador = 0;

         return view('page.productos', compact('productos','marcas','active'));

    }    

*/    

}