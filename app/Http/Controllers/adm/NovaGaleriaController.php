<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Extensions\Helpers;
use Illuminate\Http\Request;
use Illuminate\Html;
use App\NovaGaleria;
use App\NovaProducto;

class NovaGaleriaController extends Controller
{
    //
    public function createGaleria($id)
    {
        $productos = NovaProducto::find($id);
        $usuario = Auth::user();
        $galerias_seccion = 'active';
        $galerias_create = 'active';
        return view('adm.novaimg.crearNovaGaleria', compact('usuario','galerias_seccion','galerias_create', 'productos', 'id_productos'));
    }

    public function storeGaleria(Request $request)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'novaimg');
        $file_save ? $datos['imagen'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('imagen1'), 'novaimg');
        $file_save ? $datos['imagen1'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('imagen2'), 'novaimg');
        $file_save ? $datos['imagen2'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('ficha'), 'novaimg');
        $file_save ? $datos['ficha'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('dibujo'), 'novaimg');
        $file_save ? $datos['dibujo'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('dibujo1'), 'novaimg');
        $file_save ? $datos['dibujo1'] = $file_save : false;

        NovaGaleria::create($datos);
        $success = 'Galeria creado correctamente';
        return back()->with('success', $success);
    }

    public function showGaleria()
    {                
        $usuario = Auth::user();
        $galerias = NovaGaleria::all();
        $galerias_seccion = 'active';
        $galerias_edit = 'active';
        $galerias = NovaGaleria::paginate(8);

        return view('adm.novaimg.editarNovaGalerias', compact('usuario', 'galerias','galerias_seccion','galerias_edit'));
    }

    public function listsGaleria($id)
    {                   
        $productos = NovaProducto::find($id);
        $galerias = NovaGaleria::where('id_nova_productos', $id)->paginate(15);
        $usuario = Auth::user();
        $galerias_seccion = 'active';
        $galerias_edit = 'active';

        return view('adm.novaimg.editarNovaGalerias', compact('usuario', 'galerias','galerias_seccion','galerias_edit','productos'));
    }

    public function editGaleria($id)
    {
        $productos = NovaProducto::all();
        $galeria = NovaGaleria::find($id);
        $usuario = Auth::user();
        $galerias_seccion = 'active';
        $galerias_edit = 'active';
        return view('adm.novaimg.editarNovaGaleria', compact('galeria','usuario','galerias_seccion','galerias_edit','productos'));
    }

    public function updateGaleria(Request $request, $id)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'novaimg');
        $file_save ? $datos['imagen'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('imagen1'), 'novaimg');
        $file_save ? $datos['imagen1'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('imagen2'), 'novaimg');
        $file_save ? $datos['imagen2'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('ficha'), 'novaimg');
        $file_save ? $datos['ficha'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('dibujo'), 'novaimg');
        $file_save ? $datos['dibujo'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('dibujo1'), 'novaimg');
        $file_save ? $datos['dibujo1'] = $file_save : false;

        $galeria = NovaGaleria::find($id);
        $galeria->fill($datos);
        $galeria->save();
        $success = 'Galeria editada correctamente';
        return back()->with('success', $success);
    }

    public function destroyGaleria($id)
    {
        $galeria = NovaGaleria::find($id);
        $galeria->delete();
        $success = 'Galeria eliminado correctamente';
        return back()->with('success', $success);
    }
}
