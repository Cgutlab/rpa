<?php



namespace App\Http\Controllers\page;



use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Categoria;

use App\Producto;

use App\Galeria;

use App\Marca;

use App\Talla;



class ProductosController extends Controller

{

    public function index($id)

    {
        $selec_categorias = Categoria::where('id_padre', '0')->orderBy('orden','asc')->get();
                $categorias = Categoria::orderBy('orden','asc')->get();
                

        $productos = Producto::where('id_categoria',$id)->orderBy('orden','asc')->paginate(9);

    	$galerias = Galeria::orderBy('orden','asc')->get();

    	$marcas = Marca::orderBy('orden','asc')->get();

        $active='productos';

    	$contador = 0;

        return view('page.productos', compact('marcas','galerias','productos','active', 'categorias'));

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