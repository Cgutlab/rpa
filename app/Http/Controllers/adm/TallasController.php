<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Extensions\Helpers;
use Illuminate\Http\Request;
use Illuminate\Html;
use App\Talla;

class TallasController extends Controller
{
    //
    public function createTallas()
    {
        $usuario = Auth::user();
        $tallas_seccion = 'active';
        $tallas_create = 'active';

        return view('adm.tallas.crearTalla', compact('usuario','tallas_seccion','tallas_create'));
    }

    public function storeTallas(Request $request)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'tallas');
        $file_save ? $datos['imagen'] = $file_save : false;

        Talla::create($datos);
        $success = 'Talla creado correctamente';
        return back()->with('success', $success);
    }

    public function showTallas()
    {                
        $usuario = Auth::user();
        $tallas = Talla::all();
        $tallas_seccion = 'active';
        $tallas_edit = 'active';
        $tallas = Talla::paginate(8);

        return view('adm.tallas.editarTallas', compact('usuario', 'tallas','tallas_seccion','tallas_edit'));
    }

    public function editTallas($id)
    {
        $talla = Talla::find($id);
        $usuario = Auth::user();
        $tallas_seccion = 'active';
        $tallas_edit = 'active';

        return view('adm.tallas.editarTalla', compact('talla','usuario','tallas_seccion','tallas_edit'));
    }

    public function updateTallas(Request $request, $id)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'tallas');
        $file_save ? $datos['imagen'] = $file_save : false;

        $talla = Talla::find($id);
        $talla->fill($datos);
        $talla->save();
        $success = 'Talla editada correctamente';
        return back()->with('success', $success);
    }

    public function destroyTallas($id)
    {
        $talla = Talla::find($id);
        $talla->delete();
        $success = 'Talla eliminado correctamente';
        return back()->with('success', $success);
    }
}
