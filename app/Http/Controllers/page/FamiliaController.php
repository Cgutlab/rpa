<?php



namespace App\Http\Controllers\page;



use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Categoria;

use App\Producto;

use App\Marca;
use App\Galeria;

use App\Talla;



class FamiliaController extends Controller

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


        $categorias = Categoria::where('id_padre', '0')->paginate(9);

        

        $selec_categorias = Categoria::where('id_padre', '0')->orderBy('orden','asc')->get();

      $marcas = Marca::orderBy('orden','asc')->get();

      $variable = '0';

        $active='productos';

    	$contador = 0;

 

        return view('page.familia', compact('variable','all0_categorias','all1_categorias','all2_categorias','all3_categorias','all4_categorias','all5_categorias','all_productos','categorias','selec_categorias','marcas','active'));

    }

    public function prueba($id)
    {
        
        $variable = $id;
        $all0_categorias = Categoria::orderBy('orden','asc')->get();
        $all1_categorias = Categoria::orderBy('orden','asc')->get();
        $all2_categorias = Categoria::orderBy('orden','asc')->get();
        $all3_categorias = Categoria::orderBy('orden','asc')->get();
        $all4_categorias = Categoria::orderBy('orden','asc')->get();
        $all5_categorias = Categoria::orderBy('orden','asc')->get();
        $all_productos = Producto::orderBy('orden','asc')->get();
        $interruptor = 0;
        $desactiva = 0;

        $all_categorias = Categoria::all();

        $all1_active = Categoria::find($id)->first();
        $all2_active = Categoria::find($all1_active->id)->first();
        $all3_active = Categoria::find($all2_active->id)->first();
        $all4_active = Categoria::find($all3_active->id)->first();
        $all5_active = Categoria::find($all4_active->id)->first();

        $imagenes = '';
        $activar = $id;

        $categorias = Categoria::where('id_padre', $id)->orderBy('orden','asc')->paginate(9);      
        $productos = Producto::where('id_categoria', $id)->orderBy('orden','asc')->paginate(9);     
        $galerias = Galeria::orderBy('orden', 'asc')->get(); 

        $selec_categorias = Categoria::where('id_padre', '0')->orderBy('orden','asc')->get();
        $marcas = Marca::orderBy('orden','asc')->get();

        $active='productos';

        $contador = 0;

        return view('page.prueba', compact('imagenes','galerias','productos','all_categorias','interruptor','desactiva','all1_active','all2_active','all3_active','all4_active','all5_active','activar','variable','all0_categorias','all1_categorias','all2_categorias','all3_categorias','all4_categorias','all5_categorias','all_productos','categorias','selec_categorias','marcas','active'));
    }

}
