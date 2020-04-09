<?php



namespace App\Http\Controllers\page;



use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Homecliente;

use App\Destacado;

use App\Contenido;

use App\Categoria;

use App\Slider;

use App\Red;

use App\ServDestacado;

use App\Marca;



class HomeController extends Controller

{

    public function index(){

      $sliders = Slider::where('seccion', 1)->orderBy('orden','asc')->get();

      $categorias = Categoria::where('id_padre', '0')->get();

      $destacados = Destacado::orderBy('orden','asc')->get();

      $servicios = ServDestacado::orderBy('orden','asc')->get();

      $marcas = Marca::orderBy('orden','asc')->get();

      $contenidos = Contenido::all();

      $active='home';

        return view('page.home', compact('categorias', 'sliders','destacados','marcas','contenidos', 'servicios','active'));

    }

}

