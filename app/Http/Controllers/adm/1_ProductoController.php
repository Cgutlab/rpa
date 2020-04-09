<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Extensions\Helpers;
use Illuminate\Http\Request;
use Illuminate\Html;
use App\Categoria;
use App\Producto;
use App\Galeria;
use App\Marca;
use App\Color;
use App\Talla;

class ProductoController extends Controller
{
    //
    public function createProducto($id)
    {
        $usuario = Auth::user();
        $categorias = Categoria::find($id);        
        $marcas = Marca::orderBy('orden', 'ASC')->pluck('titulo', 'id')->all();        
        $colores = Color::orderBy('orden', 'ASC')->pluck('titulo', 'id')->all();        
        $tallas = Talla::orderBy('orden', 'ASC')->pluck('titulo', 'id')->all();        
        $productos_seccion = 'active';
        $productos_create = 'active';
        return view('adm.productos.crearProducto', compact('tallas','colores','marcas','usuario','productos_seccion','productos_create', 'categorias', 'id_categorias'));
    }

    public function storeProducto(Request $request)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'productos');
        $file_save ? $datos['imagen'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('ficha'), 'productos');
        $file_save ? $datos['ficha'] = $file_save : false;

        $producto = Producto::create($datos);
        $producto->tallas()->sync($request->get('tallas'));
        $producto->colores()->sync($request->get('colores'));

        $success = 'Producto creado correctamente';

        return back()->with('success', $success);
    }

    public function showProducto()
    {                
        $usuario = Auth::user();
        $productos = Producto::all();
        $productos_seccion = 'active';
        $productos_edit = 'active';
        $productos = Producto::paginate(8);


        return view('adm.productos.editarProductos', compact('usuario', 'productos','productos_seccion','productos_edit'));
    }

    public function listsProducto($id)
    {                   
        $categorias = Categoria::find($id);
        $productos = Producto::where('id_categoria', $id)->paginate(15);
        $usuario = Auth::user();
        $productos_seccion = 'active';
        $productos_edit = 'active';
        $conincide = '0';        

        $galerias = Galeria::orderBy('orden', 'asc')->get();

        return view('adm.productos.editarProductos', compact('conincide','usuario', 'galerias','productos','productos_seccion','productos_edit','categorias'));
    }

    public function editProducto($id)
    {
        $producto = Producto::find($id);
        $categorias = Categoria::orderBy('orden', 'ASC')->pluck('titulo', 'id')->all();        
        $marcas = Marca::orderBy('orden', 'ASC')->pluck('titulo', 'id')->all();        
        $colores = Color::orderBy('orden', 'ASC')->pluck('titulo', 'id')->all();        
        $tallas = Talla::orderBy('orden', 'ASC')->pluck('titulo', 'id')->all();                
        $usuario = Auth::user();
        $productos_seccion = 'active';
        $productos_edit = 'active';
        return view('adm.productos.editarProducto', compact('categorias', 'marcas', 'colores', 'tallas','producto','usuario','productos_seccion','productos_edit','categorias'));
    }

    public function updateProducto(Request $request, $id)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'productos');
        $file_save ? $datos['imagen'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('ficha'), 'productos');
        $file_save ? $datos['ficha'] = $file_save : false;

        $producto = Producto::find($id);
        $producto->fill($datos);
        $producto->save();
        $producto->colores()->sync($request->get('colores'));
        $producto->tallas()->sync($request->get('tallas'));
        
        $success = 'Producto editada correctamente';
        return back()->with('success', $success);
    }

    public function destroyProducto($id)
    {
        $producto = Producto::find($id);
        $producto->delete();
        $success = 'Producto eliminado correctamente';
        return back()->with('success', $success);
    }
}
