<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Empresa;
use App\Slider;
use App\Marca;

class EmpresaController extends Controller
{
    public function index(){
    	$sliders = Slider::where('seccion', 2)->orderBy('orden','asc')->get();
    	$empresa = Empresa::find(1);
    	$marcas = Marca::orderBy('orden','asc')->get();
      $active='empresa';
    	 return view('page.empresa', compact('marcas','dropdowns','empresa','active','sliders','tiempos','publicacions'));
    }
}
