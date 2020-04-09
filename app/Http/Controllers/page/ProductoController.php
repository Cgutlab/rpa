<?php



namespace App\Http\Controllers\page;



use Illuminate\Support\Collection;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Categoria;

use App\Producto;

use App\Galeria;

use App\Talla;

use App\Color;

use App\Marca;



class ProductoController extends Controller

{

    public function index($id)

    {    	
        $all0_categorias = Categoria::orderBy('orden','asc')->get();
        $all1_categorias = Categoria::orderBy('orden','asc')->get();
        $all2_categorias = Categoria::orderBy('orden','asc')->get();
        $all3_categorias = Categoria::orderBy('orden','asc')->get();
        $all4_categorias = Categoria::orderBy('orden','asc')->get();
        $all5_categorias = Categoria::orderBy('orden','asc')->get();
        $all_productos = Producto::orderBy('orden','asc')->get();
        

	    $categorys = Categoria::where('id',$id)->get();

    	$productos = Producto::orderBy('orden', 'asc')->get();

    	$productoIs = Producto::where('id',$id)->orderBy('orden', 'asc')->first();

        $galerias = Galeria::where('id_producto',$id)->orderBy('orden', 'asc')->get();



        $marcas = Marca::orderBy('orden', 'asc')->get();

        $variable = Producto::orderBy('orden','asc')->first();
        $variable = $productoIs->id_categoria;

        $colores = Color::orderBy('orden', 'asc')->get();

	    $tallas = Talla::orderBy('orden', 'asc')->get();

	    

	    $active='productos';

	    $cont=0;



        return view('page.producto', compact('variable','all0_categorias','all1_categorias','all2_categorias','all3_categorias','all4_categorias','all5_categorias','all_productos',  'marcas','colores','productoIs','galerias','tallas','active','categorys','productos','cont'));

    }

}