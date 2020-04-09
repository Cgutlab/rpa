<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Extensions\Helpers;
use Illuminate\Http\Request;
use Illuminate\Html;
use App\Color;

class AdmController extends Controller
{
    //
    public function create()
    {
        $usuario = Auth::user();
        $colores_seccion = 'active';
        $colores_create = 'active';

        return view('adm.colores.crearColor', compact('usuario','colores_seccion','colores_create'));
    }

    public function store(Request $request)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'colores');
        $file_save ? $datos['imagen'] = $file_save : false;

        Color::create($datos);
        $success = 'Color creado correctamente';
        return back()->with('success', $success);
    }

    public function show()
    {                
        $usuario = Auth::user();
        $colores = Color::all();
        $colores_seccion = 'active';
        $colores_edit = 'active';
        $colores = Color::paginate(8);

        return view('adm.colores.editar', compact('usuario', 'colores','colores_seccion','colores_edit'));
    }

    public function edit($id)
    {
        $color = Color::find($id);
        $usuario = Auth::user();
        $colores_seccion = 'active';
        $colores_edit = 'active';

        return view('adm.colores.editarColor', compact('color','usuario','colores_seccion','colores_edit'));
    }

    public function update(Request $request, $id)
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

    public function destroy($id)
    {
        $color = Color::find($id);
        $color->delete();
        $success = 'Color eliminado correctamente';
        return back()->with('success', $success);
    }
}
