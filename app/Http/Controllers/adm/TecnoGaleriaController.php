<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Extensions\Helpers;
use Illuminate\Http\Request;
use Illuminate\Html;
use App\TecnoGaleria;
use App\TecnoItem;

class TecnoGaleriaController extends Controller
{
    //
    public function create($id)
    {
        $items = TecnoItem::find($id);
        $usuario = Auth::user();
        $galerias_seccion = 'active';
        $galerias_create = 'active';
        return view('adm.tecnoimg.crearTecnoGaleria', compact('usuario','galerias_seccion','galerias_create', 'items', 'id_items'));
    }

    public function store(Request $request)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'tecnoimg');
        $file_save ? $datos['imagen'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('imagen1'), 'tecnoimg');
        $file_save ? $datos['imagen1'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('imagen2'), 'tecnoimg');
        $file_save ? $datos['imagen2'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('ficha'), 'tecnoimg');
        $file_save ? $datos['ficha'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('dibujo'), 'tecnoimg');
        $file_save ? $datos['dibujo'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('dibujo1'), 'tecnoimg');
        $file_save ? $datos['dibujo1'] = $file_save : false;

        TecnoGaleria::create($datos);
        $success = 'Galeria creado correctamente';
        return back()->with('success', $success);
    }

    public function show()
    {                
        $usuario = Auth::user();
        $galerias = TecnoGaleria::all();
        $galerias_seccion = 'active';
        $galerias_edit = 'active';
        $galerias = TecnoGaleria::paginate(8);

        return view('adm.tecnoimg.editarTecnoGalerias', compact('usuario', 'galerias','galerias_seccion','galerias_edit'));
    }

    public function lists($id)
    {                   
        $items = TecnoItem::find($id);
        $galerias = TecnoGaleria::where('id_tecno_items', $id)->paginate(15);
        $usuario = Auth::user();
        $galerias_seccion = 'active';
        $galerias_edit = 'active';

        return view('adm.tecnoimg.editarTecnoGalerias', compact('usuario', 'galerias','galerias_seccion','galerias_edit','items'));
    }

    public function edit($id)
    {
        $items = TecnoItem::all();
        $galeria = TecnoGaleria::find($id);
        $usuario = Auth::user();
        $galerias_seccion = 'active';
        $galerias_edit = 'active';
        return view('adm.tecnoimg.editarTecnoGaleria', compact('galeria','usuario','galerias_seccion','galerias_edit','items'));
    }

    public function update(Request $request, $id)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'tecnoimg');
        $file_save ? $datos['imagen'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('imagen1'), 'tecnoimg');
        $file_save ? $datos['imagen1'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('imagen2'), 'tecnoimg');
        $file_save ? $datos['imagen2'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('ficha'), 'tecnoimg');
        $file_save ? $datos['ficha'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('dibujo'), 'tecnoimg');
        $file_save ? $datos['dibujo'] = $file_save : false;

        $file_save = Helpers::saveImage($request->file('dibujo1'), 'tecnoimg');
        $file_save ? $datos['dibujo1'] = $file_save : false;

        $galeria = TecnoGaleria::find($id);
        $galeria->fill($datos);
        $galeria->save();
        $success = 'Galeria editada correctamente';
        return back()->with('success', $success);
    }

    public function destroy($id)
    {
        $galeria = TecnoGaleria::find($id);
        $galeria->delete();
        $success = 'Galeria eliminada correctamente';
        return back()->with('success', $success);
    }
}
