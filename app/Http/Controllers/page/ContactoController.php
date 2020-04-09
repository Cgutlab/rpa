<?php



namespace App\Http\Controllers\page;



use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

use App\Mail\Contacto;

use App\Dato;

use App\Correo;

use App\Categoria;

use App\Producto;

use App\Marca;

use App\Talla;


class ContactoController extends Controller

{

    public function index(){

        $categorias = Categoria::orderBy('orden','asc')->paginate(9);

        $selec_categorias = Categoria::orderBy('orden','asc')->get();

      $marcas = Marca::orderBy('orden','asc')->get();

      $contador = 0;


      $active='contacto';
      $active2='contacto';

    	return view('page.contacto', compact('dropdowns','active','active2','categorias','selec_categorias','marcas'));

    }



    public function enviarMail(Request $request) {

      $datos = Dato::where('tipo', 'correo1')->first();



      $nombre = $request->input('nombre');

      $apellido = $request->input('apellido');

      $telefono = $request->input('telefono');

      $email = $request->input('email');

      $empresa = $request->input('empresa');

      $mensaje = $request->input('mensaje');

      $verion = $datos->texto;



      Mail::to($datos->texto)->send(new Contacto($nombre, $apellido, $telefono, $email, $empresa, $mensaje, $verion));



      if (count(Mail::failures()) > 0) {

          $success = 'Ha ocurrido un error al enviar el correo';

      }else{

          $success = 'Correo enviado correctamente';

      }



      return back()->with('success', $success);

    }

}

