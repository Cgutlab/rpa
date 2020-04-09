<?php



namespace App\Http\Controllers\page;



use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Categoria;

use App\Producto;
use App\Galeria;

use App\Marca;

use App\Talla;



class MarcasController extends Controller

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


        $marcaxs = Marca::orderBy('orden','asc')->paginate(9);

        $selec_categorias = Categoria::where('id_padre', '0')->orderBy('orden','asc')->get();

      	$marcas = Marca::orderBy('orden','asc')->get();



        $active='marcas';

    	$contador = 0;

        $variable = '0';

        return view('page.marcas', compact('variable','contador','all0_categorias','all1_categorias','all2_categorias','all3_categorias','all4_categorias','all5_categorias','all_productos',  'marcaxs','selec_categorias','marcas','active'));

    }

    public function filtro($id)
    {      
        $all0_categorias = Categoria::orderBy('orden','asc')->get();
        $all1_categorias = Categoria::orderBy('orden','asc')->get();
        $all2_categorias = Categoria::orderBy('orden','asc')->get();
        $all3_categorias = Categoria::orderBy('orden','asc')->get();
        $all4_categorias = Categoria::orderBy('orden','asc')->get();
        $all5_categorias = Categoria::orderBy('orden','asc')->get();
        $all_productos = Producto::orderBy('orden','asc')->get();

        $productos = Producto::where('id_marca',$id)->orderBy('orden','asc')->paginate(9);
        $selec_categorias = Categoria::where('id_padre', '0')->orderBy('orden','asc')->get();
        $marcas = Marca::orderBy('orden','asc')->get();
        $galerias = Galeria::orderBy('orden','asc')->get();
        $active='marcas';
        $contador = 0;
        $variable = '0';

        return view('page.fmarcas', compact('variable','contador','all0_categorias','all1_categorias','all2_categorias','all3_categorias','all4_categorias','all5_categorias','all_productos',  'galerias','productos','selec_categorias','marcas','active'));
    }

}