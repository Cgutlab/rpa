<?php

namespace App\Http\Controllers\adm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Extensions\Helpers;
use Illuminate\Http\Request;
use Illuminate\Html;
use App\NovaAnuncio;

class NovaAnuncioController extends Controller
{
    //
    public function create()
    {
        $usuario = Auth::user();
        $anuncios_seccion = 'active';
        $anuncios_create = 'active';

        return view('adm.novaanuncio.crearNovaAnuncio', compact('usuario','anuncios_seccion','anuncios_create'));
    }

    public function store(Request $request)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'novaanuncio');
        $file_save ? $datos['imagen'] = $file_save : false;

        NovaAnuncio::create($datos);
        $success = 'Contenido creado correctamente';
        return back()->with('success', $success);
    }

    public function show()
    {                
        $usuario = Auth::user();
        $anuncios = NovaAnuncio::all();
        $anuncios_seccion = 'active';
        $anuncios_edit = 'active';
        $anuncios = NovaAnuncio::paginate(8);

        return view('adm.novaanuncio.editarNovaAnuncios', compact('usuario', 'anuncios','anuncios_seccion','anuncios_edit'));
    }

    public function edit($id)
    {
        $usuario = Auth::user();
        $anuncio = NovaAnuncio::find($id);
        $anuncios_seccion = 'active';
        $anuncios_edit = 'active';

        return view('adm.novaanuncio.editarNovaAnuncio', compact('anuncio','usuario','anuncios_seccion','anuncios_edit'));
    }

    public function update(Request $request, $id)
    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'novaanuncio');
        $file_save ? $datos['imagen'] = $file_save : false;

        $anuncio = NovaAnuncio::find($id);
        $anuncio->fill($datos);
        $anuncio->save();
        $success = 'Contenido editado correctamente';
        return back()->with('success', $success);
    }

    public function destroy($id)
    {
        $anuncio = NovaAnuncio::find($id);
        $anuncio->delete();
        $success = 'Contenido eliminado correctamente';
        return back()->with('success', $success);
    }
}
