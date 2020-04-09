<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Extensions\Helpers;
use Illuminate\Http\Request;
use Illuminate\Html;
use App\Color;

class ColoresController extends Controller
{
    //
    public function createColores()
    {
        $usuario = Auth::user();
        $colores_seccion = 'active';
        $colores_create = 'active';

        return view('adm.colores.crearColor', compact('usuario','colores_seccion','colores_create'));
    }

    public function storeColores(Request $request)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'colores');
        $file_save ? $datos['imagen'] = $file_save : false;

        Color::create($datos);
        $success = 'Color creado correctamente';
        return back()->with('success', $success);
    }

    public function showColores()
    {                
        $usuario = Auth::user();
        $colores = Color::all();
        $colores_seccion = 'active';
        $colores_edit = 'active';
        $colores = Color::paginate(8);

        return view('adm.colores.editarColores', compact('usuario', 'colores','colores_seccion','colores_edit'));
    }

    public function editColores($id)
    {
        $color = Color::find($id);
        $usuario = Auth::user();
        $colores_seccion = 'active';
        $colores_edit = 'active';

        return view('adm.colores.editarColor', compact('color','usuario','colores_seccion','colores_edit'));
    }

    public function updateColores(Request $request, $id)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'colores');
        $file_save ? $datos['imagen'] = $file_save : false;

        $color = Color::find($id);
        $color->fill($datos);
        $color->save();
        $success = 'Color editada correctamente';
        return back()->with('success', $success);
    }

    public function destroyColores($id)
    {
        $color = Color::find($id);
        $color->delete();
        $success = 'Color eliminado correctamente';
        return back()->with('success', $success);
    }
}
