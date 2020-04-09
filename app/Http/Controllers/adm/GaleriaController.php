<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Extensions\Helpers;
use Illuminate\Http\Request;
use Illuminate\Html;
use App\Producto;
use App\Galeria;
use App\Marca;
use App\Color;
use App\Talla;

class GaleriaController extends Controller
{
    //
    public function createGaleria($id)
    {
        $usuario = Auth::user();
        $productos = Producto::find($id);        
        $marcas = Marca::orderBy('orden', 'ASC')->pluck('titulo', 'id')->all();        
        $colores = Color::orderBy('orden', 'ASC')->pluck('titulo', 'id')->all();        
        $tallas = Talla::orderBy('orden', 'ASC')->pluck('titulo', 'id')->all();        
        $galerias_seccion = 'active';
        $galerias_create = 'active';
        return view('adm.galerias.crearGaleria', compact('tallas','colores','marcas','usuario','galerias_seccion','galerias_create', 'productos', 'id_productos'));
    }

    public function storeGaleria(Request $request)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'galerias');
        $file_save ? $datos['imagen'] = $file_save : false;

        $galeria = Galeria::create($datos);

        $success = 'Galeria creada correctamente';

        return back()->with('success', $success);
    }

    public function showGaleria()
    {                
        $usuario = Auth::user();
        $galerias = Galeria::all();
        $galerias_seccion = 'active';
        $galerias_edit = 'active';
        $galerias = Galeria::paginate(8);

        return view('adm.galerias.editarGalerias', compact('usuario', 'galerias','galerias_seccion','galerias_edit'));
    }

    public function listsGaleria($id)
    {                   
        $productos = Producto::find($id);
        $galerias = Galeria::where('id_producto', $id)->paginate(15);
        $usuario = Auth::user();
        $galerias_seccion = 'active';
        $galerias_edit = 'active';

        return view('adm.galerias.editarGalerias', compact('usuario', 'galerias','galerias_seccion','galerias_edit','productos'));
    }

    public function editGaleria($id)
    {
        $galeria = Galeria::find($id);
        $productos = Producto::orderBy('orden', 'ASC')->pluck('titulo', 'id')->all();        
        $marcas = Marca::orderBy('orden', 'ASC')->pluck('titulo', 'id')->all();        
        $colores = Color::orderBy('orden', 'ASC')->pluck('titulo', 'id')->all();        
        $tallas = Talla::orderBy('orden', 'ASC')->pluck('titulo', 'id')->all();                
        $usuario = Auth::user();
        $galerias_seccion = 'active';
        $galerias_edit = 'active';
        return view('adm.galerias.editarGaleria', compact('productos', 'marcas', 'colores', 'tallas','galeria','usuario','galerias_seccion','galerias_edit','productos'));
    }

    public function updateGaleria(Request $request, $id)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'galerias');
        $file_save ? $datos['imagen'] = $file_save : false;

        $galeria = Galeria::find($id);
        $galeria->fill($datos);
        $galeria->save();
        
        $success = 'Galeria editada correctamente';
        return back()->with('success', $success);
    }

    public function destroyGaleria($id)
    {
        $galeria = Galeria::find($id);
        $galeria->delete();
        $success = 'Galeria eliminada correctamente';
        return back()->with('success', $success);
    }
}
