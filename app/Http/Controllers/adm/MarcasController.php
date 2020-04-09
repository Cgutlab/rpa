<?php



namespace App\Http\Controllers\adm;



use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;

use App\Extensions\Helpers;

use Illuminate\Http\Request;

use Illuminate\Html;

use App\Marca;



class MarcasController extends Controller

{

    //

    public function createMarcas()

    {

        $usuario = Auth::user();

        $marcas_seccion = 'active';

        $marcas_create = 'active';



        return view('adm.marcas.crearMarca', compact('usuario','marcas_seccion','marcas_create'));

    }



    public function storeMarcas(Request $request)

    {

        $datos = $request->all();



        $file_save = Helpers::saveImage($request->file('imagen'), 'marcas');

        $file_save ? $datos['imagen'] = $file_save : false;



        Marca::create($datos);

        $success = 'Marca creado correctamente';

        return back()->with('success', $success);

    }



    public function showMarcas()

    {                

        $usuario = Auth::user();

        $marcas = Marca::all();

        $marcas_seccion = 'active';

        $marcas_edit = 'active';

        $marcas = Marca::orderBy('orden', 'asc')->paginate(8);



        return view('adm.marcas.editarMarcas', compact('usuario', 'marcas','marcas_seccion','marcas_edit'));

    }



    public function editMarcas($id)

    {

        $marca = Marca::find($id);

        $usuario = Auth::user();

        $marcas_seccion = 'active';

        $marcas_edit = 'active';



        return view('adm.marcas.editarMarca', compact('marca','usuario','marcas_seccion','marcas_edit'));

    }



    public function updateMarcas(Request $request, $id)

    {

        $datos = $request->all();



        $file_save = Helpers::saveImage($request->file('imagen'), 'marcas');

        $file_save ? $datos['imagen'] = $file_save : false;



        $marca = Marca::find($id);

        $marca->fill($datos);

        $marca->save();

        $success = 'Marca editada correctamente';

        return back()->with('success', $success);

    }



    public function destroyMarcas($id)

    {

        $marca = Marca::find($id);

        $marca->delete();

        $success = 'Marca eliminado correctamente';

        return back()->with('success', $success);

    }

}

