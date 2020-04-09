<?php
namespace App\Http\Controllers\adm;


use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use App\Extensions\Helpers;
use Illuminate\Http\Request;
use Illuminate\Html;

use Laracasts\Flash\Flash;

use App\Dato;

use Redirect;



class DatosController extends Controller

{



    public function index()

    {

        $datos = Dato::all();

        $usuario = Auth::user();

        $datos_seccion = 'active';

        $datos_edit = 'active';

        return view('adm.datos.editarDatos', compact('datos','usuario','datos_seccion','datos_edit'));

    }



    public function edit($id)

    {

        $dato = Dato::find($id);

        $usuario = Auth::user();

        $datos_seccion = 'active';

        $datos_edit = 'active';

        return view('adm.datos.editarDato', compact('dato','usuario','datos_seccion','datos_edit'));

    }



    public function update(Request $request, $id)

    {
        $datos = $request->all();

        $file_save = Helpers::saveImage($request->file('imagen'), 'imgcontact');
        $file_save ? $datos['imagen'] = $file_save : false;

        $dato = Dato::find($id);
        $dato->fill($datos);
        $dato->save();

/*
        $dato = Dato::find($id);

        $dato->fill($request->all());

        $file_save = Helpers::saveImage($request->file('imagen'), 'imgcontact');
        $file_save ? $datos['imagen'] = $file_save : false;

        $dato->save();
*/
        $success = 'Dato editado correctamente';

        return Redirect::to('adm/datos')->with('success', $success);

    }

}

