<?php

namespace App\Http\Controllers\page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TecnoContenido;
use App\TecnoItem;
use App\TecnoGaleria;
use App\PrcItem;

class TecnologiaController extends Controller
{
    public function index(){
    $contenido = TecnoContenido::find(1);
$dropdowns = PrcItem::orderBy('orden','asc')->get();
    $items = TecnoItem::all();
    $galerias = TecnoGaleria::all();
    $active='tecnologia';
    $cont=0;
    return view('page.tecnologia', compact('dropdowns','contenido','galerias','items','active','cont'));
  }
}
