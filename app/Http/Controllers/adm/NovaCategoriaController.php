<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Extensions\Helpers;
use Illuminate\Http\Request;
use Illuminate\Html;
use App\NovaCategoria;

class NovaCategoriaController extends Controller
{
    //
    public function createCategoria()
    {
        $usuario = Auth::user();
        $categorias_seccion = 'active';
        $categorias_create = 'active';

        return view('adm.novacat.crearNovaCategoria', compact('usuario','categorias_seccion','categorias_create'));
    }

    public function storeCategoria(Request $request)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'novacat');
        $file_save ? $datos['imagen'] = $file_save : false;

        NovaCategoria::create($datos);
        $success = 'Categoria creado correctamente';
        return back()->with('success', $success);
    }

    public function showCategoria()
    {                
        $usuario = Auth::user();
        $categorias = NovaCategoria::all();
        $categorias_seccion = 'active';
        $categorias_edit = 'active';
        $categorias = NovaCategoria::paginate(8);

        return view('adm.novacat.editarNovaCategorias', compact('usuario', 'categorias','categorias_seccion','categorias_edit'));
    }

    public function editCategoria($id)
    {
        $usuario = Auth::user();
        $categoria = NovaCategoria::find($id);
        $categorias_seccion = 'active';
        $categorias_edit = 'active';

        return view('adm.novacat.editarNovaCategoria', compact('categoria','usuario','categorias_seccion','categorias_edit'));
    }

    public function updateCategoria(Request $request, $id)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'novacat');
        $file_save ? $datos['imagen'] = $file_save : false;

        $categoria = NovaCategoria::find($id);
        $categoria->fill($datos);
        $categoria->save();
        $success = 'Categoria editada correctamente';
        return back()->with('success', $success);
    }

    public function destroyCategoria($id)
    {
        $categoria = NovaCategoria::find($id);
        $categoria->delete();
        $success = 'Categoria eliminado correctamente';
        return back()->with('success', $success);
    }
}
