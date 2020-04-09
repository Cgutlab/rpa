<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Extensions\Helpers;
use Illuminate\Http\Request;
use Illuminate\Html;
use App\TecnoItem;

class TecnoItemController extends Controller
{
    //
    public function create()
    {
        $usuario = Auth::user();
        $items_seccion = 'active';
        $items_create = 'active';

        return view('adm.tecnoitem.crearTecnoItem', compact('usuario','items_seccion','items_create'));
    }

    public function store(Request $request)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'tecnoitem');
        $file_save ? $datos['imagen'] = $file_save : false;

        TecnoItem::create($datos);
        $success = 'Item creado correctamente';
        return back()->with('success', $success);
    }

    public function show()
    {                
        $usuario = Auth::user();
        $items = TecnoItem::all();
        $items_seccion = 'active';
        $items_edit = 'active';
        $items = TecnoItem::paginate(8);

        return view('adm.tecnoitem.editarTecnoItems', compact('usuario', 'items','items_seccion','items_edit'));
    }

    public function edit($id)
    {
        $usuario = Auth::user();
        $item = TecnoItem::find($id);
        $items_seccion = 'active';
        $items_edit = 'active';

        return view('adm.tecnoitem.editarTecnoItem', compact('item','usuario','items_seccion','items_edit'));
    }

    public function update(Request $request, $id)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'tecnoitem');
        $file_save ? $datos['imagen'] = $file_save : false;

        $item = TecnoItem::find($id);
        $item->fill($datos);
        $item->save();
        $success = 'Item editado correctamente';
        return back()->with('success', $success);
    }

    public function destroy($id)
    {
        $item = TecnoItem::find($id);
        $item->delete();
        $success = 'Item eliminado correctamente';
        return back()->with('success', $success);
    }
}
