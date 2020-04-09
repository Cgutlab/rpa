<?php

namespace App\Http\Controllers\page;

use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\NovaCategoria;
use App\NovaContenido;
use App\PrcGaleria;
use App\NovaAnuncio;
use App\PrcItem;


class ProcesoController extends Controller
{
    public function index($id)
    {    	
$dropdowns = PrcItem::orderBy('orden','asc')->get();        
	    $categorys = NovaCategoria::where('id',$id)->get();
    	$productos = PrcItem::orderBy('orden', 'asc')->get();
    	$contenido = NovaContenido::find(1);
    	$productoIs = PrcItem::where('id',$id)->orderBy('orden', 'asc')->first();
	    $galerias = PrcGaleria::orderBy('orden', 'asc')->get();
	    $anuncios = NovaAnuncio::orderBy('orden', 'asc')->get();

	    $active='proceso/'.$id;
	    $cont=0;

        return view('page.proceso', compact('dropdowns','productoIs','galerias','contenido','active','anuncios','categorys','productos','cont'));
    }
}