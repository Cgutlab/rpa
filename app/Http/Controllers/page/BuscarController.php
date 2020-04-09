<?php



namespace App\Http\Controllers\page;



use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

use App\Categoria;

use App\Metadato;

use App\Producto;

use App\Galeria;

use App\Marca;

use App\Talla;


class BuscarController extends Controller

{

    public function index() {

        $busca=0;
$categorias = Categoria::orderBy('orden','asc')->paginate(9);

$selec_categorias = Categoria::where('id_padre', '0')->orderBy('orden','asc')->get();

$marcas = Marca::orderBy('orden','asc')->get();
        $categorias = Categoria::orderBy('orden','asc')->paginate(9);

        $selec_categorias = Categoria::orderBy('orden','asc')->get();

      $marcas = Marca::orderBy('orden','asc')->get();
               $galerias = Galeria::all();

    	$active = 'buscar';

        return view('page.buscar', compact('selec_categorias','metadato','active','busca','galerias','categorias','selec_categorias','marcas'));

    }



    public function getResults (Request $request) {



        $busqueda = $request->busqueda;
        $selec_categorias = Categoria::where('id_padre', '0')->orderBy('orden','asc')->get();
        $busca=1;

        $active = 'buscar';

        $productos = Producto::where('titulo', 'like', '%' . $busqueda . '%')->orwhere('codigo', 'like', '%' . $busqueda . '%')->orwhere('texto', 'like', '%' . $busqueda . '%')->orwhere('oferta', 'like', '%' . $busqueda . '%')->get();

        return view('page.filtrados', compact('selec_categorias','productos', 'busqueda', 'busca', 'metadato', 'active'));

    }



    public function filter (Request $request) {


        $categorias = Categoria::orderBy('orden','ASC')->get();
        $selec_categorias = Categoria::where('id_padre', '0')->orderBy('orden','asc')->get();
        $marcas = Marca::orderBy('orden','ASC')->get();

        $productos = Producto::all();

        $galerias = Galeria::all();

        $buscar = 0;

        $active = 'productos';

        if($request->input('categoria')!='categoria' && $request->input('categoria')!='')

        {

            $consultas = Producto::where('id_categoria',$request->input('categoria'))->get();

            $buscar = 1;



        }

        elseif($request->input('marca')!='marca' && $request->input('marca')!='')

        {

            $active = 'marcas';

            $consultas = Producto::where('id_marca',$request->input('marca'))->get();  

            $buscar = 2; 

         

        } elseif($request->input('codigo')!='' && $request->input('codigo')!=null)

        {

            $consultas = Producto::where('codigo','like', '%'.$request->input('codigo').'%')->orwhere('titulo','like','%'.$request->input('codigo').'%')->orwhere('oferta','like','%'.$request->input('codigo').'%')->get();

            $buscar = 3;

        

        }        



        return view('page.filtrados', compact('selec_categorias','consultas','buscar','galerias','productos','titulo','metadatos','active','familias','categorias','marcas','productos'));

    }

}

