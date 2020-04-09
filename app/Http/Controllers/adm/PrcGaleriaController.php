<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Extensions\Helpers;
use Illuminate\Http\Request;
use Illuminate\Html;
use App\PrcGaleria;
use App\PrcItem;

class PrcGaleriaController extends Controller
{
    //
    public function create($id)
    {
        $items = PrcItem::find($id);
        $usuario = Auth::user();
        $galerias_seccion = 'active';
        $galerias_create = 'active';
        return view('adm.prcimg.crearPrcGaleria', compact('usuario','galerias_seccion','galerias_create', 'items'));
    }

    public function store(Request $request)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'prcimg');
        $file_save ? $datos['imagen'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('imagen1'), 'prcimg');
        $file_save ? $datos['imagen1'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('imagen2'), 'prcimg');
        $file_save ? $datos['imagen2'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('ficha'), 'prcimg');
        $file_save ? $datos['ficha'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('dibujo'), 'prcimg');
        $file_save ? $datos['dibujo'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('dibujo1'), 'prcimg');
        $file_save ? $datos['dibujo1'] = $file_save : false;

        PrcGaleria::create($datos);
        $success = 'Galeria creado correctamente';
        return back()->with('success', $success);
    }

    public function show()
    {                
        $usuario = Auth::user();
        $galerias = PrcGaleria::all();
        $galerias_seccion = 'active';
        $galerias_edit = 'active';
        $galerias = PrcGaleria::paginate(8);

        return view('adm.prcimg.editarPrcGalerias', compact('usuario', 'galerias','galerias_seccion','galerias_edit'));
    }

    public function lists($id)
    {                   
        $items = PrcItem::find($id);
        $galerias = PrcGaleria::where('id_prc_items', $id)->paginate(15);
        $usuario = Auth::user();
        $galerias_seccion = 'active';
        $galerias_edit = 'active';

        return view('adm.prcimg.editarPrcGalerias', compact('usuario', 'galerias','galerias_seccion','galerias_edit','items'));
    }

    public function edit($id)
    {
        $items = PrcItem::all();
        $galeria = PrcGaleria::find($id);
        $usuario = Auth::user();
        $galerias_seccion = 'active';
        $galerias_edit = 'active';
        return view('adm.prcimg.editarPrcGaleria', compact('galeria','usuario','galerias_seccion','galerias_edit','items'));
    }

    public function update(Request $request, $id)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'prcimg');
        $file_save ? $datos['imagen'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('imagen1'), 'prcimg');
        $file_save ? $datos['imagen1'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('imagen2'), 'prcimg');
        $file_save ? $datos['imagen2'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('ficha'), 'prcimg');
        $file_save ? $datos['ficha'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('dibujo'), 'prcimg');
        $file_save ? $datos['dibujo'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('dibujo1'), 'prcimg');
        $file_save ? $datos['dibujo1'] = $file_save : false;

        $galeria = PrcGaleria::find($id);
        $galeria->fill($datos);
        $galeria->save();
        $success = 'Galeria editada correctamente';
        return back()->with('success', $success);
    }

    public function destroy($id)
    {
        $galeria = PrcGaleria::find($id);
        $galeria->delete();
        $success = 'Galeria eliminada correctamente';
        return back()->with('success', $success);
    }
}
