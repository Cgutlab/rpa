<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Extensions\Helpers;
use Illuminate\Http\Request;
use Illuminate\Html;
use App\NovaContenido;

class NovaContenidoController extends Controller
{
    //
    public function create()
    {
        $usuario = Auth::user();
        $contenidos_seccion = 'active';
        $contenidos_create = 'active';

        return view('adm.novacontenido.crearNovaContenido', compact('usuario','contenidos_seccion','contenidos_create'));
    }

    public function store(Request $request)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'novacontenido');
        $file_save ? $datos['imagen'] = $file_save : false;

        NovaContenido::create($datos);
        $success = 'Contenido creado correctamente';
        return back()->with('success', $success);
    }

    public function show()
    {                
        $usuario = Auth::user();
        $contenidos = NovaContenido::all();
        $contenidos_seccion = 'active';
        $contenidos_edit = 'active';
        $contenidos = NovaContenido::paginate(8);

        return view('adm.novacontenido.editarNovaContenidos', compact('usuario', 'contenidos','contenidos_seccion','contenidos_edit'));
    }

    public function edit($id)
    {
        $usuario = Auth::user();
        $contenido = NovaContenido::find($id);
        $contenidos_seccion = 'active';
        $contenidos_edit = 'active';

        return view('adm.novacontenido.editarNovaContenido', compact('contenido','usuario','contenidos_seccion','contenidos_edit'));
    }

    public function update(Request $request, $id)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'novacontenido');
        $file_save ? $datos['imagen'] = $file_save : false;

        $contenido = NovaContenido::find($id);
        $contenido->fill($datos);
        $contenido->save();
        $success = 'Contenido editado correctamente';
        return back()->with('success', $success);
    }

    public function destroy($id)
    {
        $contenido = NovaContenido::find($id);
        $contenido->delete();
        $success = 'Contenido eliminado correctamente';
        return back()->with('success', $success);
    }
}
