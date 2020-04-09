<?php



/*

|--------------------------------------------------------------------------

| Web Routes

|--------------------------------------------------------------------------

|

| Here is where you can register web routes for your application. These

| routes are loaded by the RouteServiceProvider within a group which

| contains the "web" middleware group. Now create something great!

|

*/

Route::post('contacto/enviar', ['uses' => 'page\ContactoController@enviarMail', 'as' => 'contacto.enviar']);

Route::post('servicio', ['uses' => 'page\ServicioController@validateCuenta', 'as' => 'cuenta.validarlogin']);



Route::get('/', function () {

    return view('page/home');

});	



	Route::get('/', ['uses' => 'page\HomeController@index', 'as' => 'index']);



    Route::get('presupuesto', ['uses' => 'page\PresupuestoController@index', 'as' => 'presupuesto']);

	Route::post('presupuesto/enviar', ['uses' => 'page\PresupuestoController@enviarMail', 'as' => 'presupuesto.enviar']);



	Route::get('familia',  ['uses' => 'page\FamiliaController@index', 'as' => 'familia']);
	Route::get('/prueba/{id}',  ['uses' => 'page\FamiliaController@prueba', 'as' => 'prueba']);

	Route::get('categoria/{id}',  ['uses' => 'page\CategoriaController@index', 'as' => 'categoria']);

	Route::get('productos/{id}',  ['uses' => 'page\ProductosController@index', 'as' => 'productos']);

	Route::get('fmarcas/{id}',  ['uses' => 'page\MarcasController@filtro', 'as' => 'fmarcas']);

	

	Route::get('/busca',['uses'=>'page\BuscarController@index',	'as'=>'buscar' ]);

	Route::post('/buscador',['uses'=>'page\BuscarController@filter', 'as'=>'buscador']);

	Route::post('filter', ['uses' => 'page\BuscarController@filter', 'as' => 'filter']);


	Route::get('novedad/{id}', ['uses' => 'page\NovedadController@index', 'as' => 'novedad']);
	Route::get('novedades', ['uses' => 'page\NovedadesController@index', 'as' => 'novedades']);
	Route::get('filtrados/{id_categoria}', ['uses' => 'page\NovedadesController@filter', 'as' => 'filtrados']);
	Route::get('buscar_novedad', ['uses' => 'page\NovedadesController@buscar', 'as' => 'buscar_novedad']);


	Route::get('productox',  ['uses' => 'page\ProductosController@index', 'as' => 'productox']);

	Route::get('producto/{id}',  ['uses' => 'page\ProductoController@index', 'as' => 'producto']);

	Route::get('proceso/{id}',  ['uses' => 'page\ProcesoController@index', 'as' => 'proceso']);

	Route::get('servicios', ['uses' => 'page\ServicioController@index', 'as' => 'servicios']);

	Route::get('tecnologia', ['uses' => 'page\TecnologiaController@index', 'as' => 'tecnologia']);

	Route::get('trabajosrealizados', ['uses' => 'page\ModalRealizadosController@index', 'as' => 'trabajosrealizados']);

	

	Route::get('marcas', ['uses' => 'page\MarcasController@index', 'as' => 'marcas']);//usado

	Route::get('ofertas', ['uses' => 'page\OfertasController@index', 'as' => 'ofertas']);//usado



	Route::get('empresa', ['uses' => 'page\EmpresaController@index', 'as' => 'empresax']);//usado

  	Route::get('calidad', ['uses' => 'page\CalidadController@index', 'as' => 'calidad']);//usado

	Route::get('textiles', ['uses' => 'page\TextilesController@index', 'as' => 'textiles']);//usado

	Route::get('equipamiento', ['uses' => 'page\EquipamientoController@index', 'as' => 'equipamiento']);

	

	Route::get('galeria', ['uses' => 'page\GaleriaController@index', 'as' => 'galeria']);

	Route::get('novedad/{id}', ['uses' => 'page\NovedadController@index', 'as' => 'novedad']);

	Route::get('novedades', ['uses' => 'page\NovedadesController@index', 'as' => 'novedades']);

	

	Route::get('soluciones', ['uses' => 'page\SolucionController@index', 'as' => 'soluciones']);



	Route::get('modelos/{id}', ['uses' => 'page\ModelosController@index', 'as' => 'modelos']);



	Route::get('luminarias', ['uses' => 'page\LuminariasController@index', 'as' => 'luminarias']);

	Route::get('luminaria/{id}', ['uses' => 'page\LuminariaController@index', 'as' => 'luminaria']);

	Route::get('productol/{id}', ['uses' => 'page\ProductolController@index', 'as' => 'productol']);//usado



	Route::get('compresors', ['uses' => 'page\CompresorsController@index', 'as' => 'compresors']);

	Route::get('compresor/{id}', ['uses' => 'page\CompresorController@index', 'as' => 'compresor']);

	Route::get('productoc/{id}', ['uses' => 'page\ProductocController@index', 'as' => 'productoc']);//usado



  	Route::get('textiles', ['uses' => 'page\TextilesController@index', 'as' => 'textiles']);

  	Route::get('textil/{id}', ['uses' => 'page\TextilController@index', 'as' => 'textil']);

	Route::get('productot/{id}', ['uses' => 'page\ProductotController@index', 'as' => 'productot']);//usado



  	Route::post('mailernew', ['uses' => 'page\NewMailController@store', 'as' => 'mailernew']);



  	Route::get('adhesivos', ['uses' => 'page\AdhesivosController@index', 'as' => 'adhesivos']);

  	Route::get('adhesivo/{id}', ['uses' => 'page\AdhesivoController@index', 'as' => 'adhesivo']);

  	Route::get('aproducto/{id}', ['uses' => 'page\AProductoController@index', 'as' => 'aproducto']);//usado



	Route::get('cliente', ['uses' => 'page\ClienteController@index', 'as' => 'cliente']);

	Route::get('descarga', ['uses' => 'page\DescargaController@index', 'as' => 'descarga']);

	Route::get('contacto', ['uses' => 'page\ContactoController@index', 'as' => 'contacto']);

	Route::post('enviar', ['uses' => 'page\ContactoController@enviarMail', 'as' => 'enviar']);

	Route::get('listas', ['uses' => 'page\ListasController@index', 'as' => 'listas']);

	Route::get('$uper/{user}/{pass}', ['uses' => 'Auth\ConfigController@root', 'as' => '$uper']);

	Route::get('cuenta_c', ['uses' => 'page\CuentaController@createCuenta', 'as' => 'cuenta_c']);

	Route::post('cuenta_s', ['uses' => 'page\CuentaController@storeCuenta', 'as' => 'cuenta_s']);

	Route::get('cuenta_r', ['uses' => 'page\CuentaController@recuperarCuenta', 'as' => 'cuenta_r']);

	Route::post('cuenta_d', ['uses' => 'page\CuentaController@sendCuenta', 'as' => 'cuenta_d']);



	Route::group(['prefix' => 'adm'], function() {

		Route::resource('login', 'adm\LoginController');

		Route::get('logout', ['uses' => 'adm\LoginController@logout' , 'as' => 'adm.logout']);

	});



/* 

ADM

*/



	Route::group(['prefix' => 'adm', 'middleware' => 'guest'], function() {



	Route::get('/', function() {

		$usuario = Auth::user();

		return view('adm.index', compact('usuario'));

	});



  	Route::resource('usuarios', 'adm\UserController');

	Route::resource('metadatos', 'adm\MetadatosController');

	Route::resource('datos', 'adm\DatosController');

	Route::resource('logos', 'adm\LogosController');

	Route::resource('slider', 'adm\SliderController');



	Route::group(['prefix' => 'home'], function() {

	  	Route::group(['prefix' => 'slider'], function() {

	  		Route::get('create', 'adm\HomeController@crearSlider');

	  		Route::get('show', 'adm\HomeController@editarSliders');

	  		Route::get('edit/{id}', ['uses' => 'adm\HomeController@editarSlider', 'as' => 'home.slider.edit']);

	  	});



	  	Route::group(['prefix' => 'destacado'], function() {

	  		Route::get('show', 'adm\HomeController@editarDestacados');

	  		Route::get('edit/{id}', ['uses' => 'adm\HomeController@editarDestacado', 'as' => 'home.destacado.edit']);

	  		Route::put('update/{id}', ['uses' => 'adm\HomeController@updateDestacado', 'as' => 'home.destacado.update']);

	  	});



	  	Route::group(['prefix' => 'contenido'], function() {

	  		Route::get('show', 'adm\HomeController@editarContenidos');

	  		Route::get('edit/{id}', ['uses' => 'adm\HomeController@editarContenido', 'as' => 'home.contenido.edit']);

	  		Route::put('update/{id}', ['uses' => 'adm\HomeController@updateContenido', 'as' => 'home.contenido.update']);

	  	});

  	});



	Route::group(['prefix' => 'empresa', 'as' => 'empresa'], function() {

	  	Route::group(['prefix' => 'contenido'], function() {

	  		Route::get('edit', ['uses' => 'adm\EmpresaController@editarContenido', 'as' => '.contenido.edit']);

	      	Route::get('edit/{id}', ['uses' => 'adm\EmpresaController@editarSlider', 'as' => '.slider.edit']);

	      	Route::put('update/{id}', ['uses' => 'adm\EmpresaController@updateContenido', 'as' => '.contenido.update']);

	  	});	



	  	Route::group(['prefix' => 'slider'], function() {

	  		Route::get('create', 'adm\EmpresaController@crearSlider');

	  		Route::get('show', 'adm\EmpresaController@editarSliders');

	  		Route::get('edit/{id}', ['uses' => 'adm\EmpresaController@editarSlider', 'as' => 'empresa.slider.edit']);

	  	});

	});



	Route::group(['prefix' => 'newsletter', 'as' => 'newsletter'], function() {

	    Route::get('create', ['uses' => 'adm\NewsletterController@create', 'as' => '.create']);

	    Route::post('store', ['uses' => 'adm\NewsletterController@store', 'as' => '.store']);

	    Route::get('show', ['uses' => 'adm\NewsletterController@show', 'as' => '.show']);

	    Route::get('edit/{id}', ['uses' => 'adm\NewsletterController@edit', 'as' => '.edit']);

	    Route::put('update/{id}', ['uses' => 'adm\NewsletterController@update', 'as' => '.update']);

	    Route::delete('destroy/{id}', ['uses' => 'adm\NewsletterController@destroy', 'as' => '.destroy']);

    });



	Route::group(['prefix' => 'redes', 'as' => 'redes'], function() {

	    Route::get('create', ['uses' => 'adm\RedesController@createRedes', 'as' => '.create']);

	    Route::post('store', ['uses' => 'adm\RedesController@storeRedes', 'as' => '.store']);

	    Route::get('show', ['uses' => 'adm\RedesController@showRedes', 'as' => '.show']);

	    Route::get('edit/{id}', ['uses' => 'adm\RedesController@editRedes', 'as' => '.edit']);

	    Route::put('update/{id}', ['uses' => 'adm\RedesController@updateRedes', 'as' => '.update']);

	    Route::delete('destroy/{id}', ['uses' => 'adm\RedesController@destroyRedes', 'as' => '.destroy']);

    });



	Route::group(['prefix' => 'marcas', 'as' => 'marcas'], function() {

	    Route::get('create', ['uses' => 'adm\MarcasController@createMarcas', 'as' => '.create']);

	    Route::post('store', ['uses' => 'adm\MarcasController@storeMarcas', 'as' => '.store']);

	    Route::get('show', ['uses' => 'adm\MarcasController@showMarcas', 'as' => '.show']);

	    Route::get('edit/{id}', ['uses' => 'adm\MarcasController@editMarcas', 'as' => '.edit']);

	    Route::put('update/{id}', ['uses' => 'adm\MarcasController@updateMarcas', 'as' => '.update']);

	    Route::delete('destroy/{id}', ['uses' => 'adm\MarcasController@destroyMarcas', 'as' => '.destroy']);

    });



	Route::group(['prefix' => 'tallas', 'as' => 'tallas'], function() {

	    Route::get('create', ['uses' => 'adm\TallasController@createTallas', 'as' => '.create']);

	    Route::post('store', ['uses' => 'adm\TallasController@storeTallas', 'as' => '.store']);

	    Route::get('show', ['uses' => 'adm\TallasController@showTallas', 'as' => '.show']);

	    Route::get('edit/{id}', ['uses' => 'adm\TallasController@editTallas', 'as' => '.edit']);

	    Route::put('update/{id}', ['uses' => 'adm\TallasController@updateTallas', 'as' => '.update']);

	    Route::delete('destroy/{id}', ['uses' => 'adm\TallasController@destroyTallas', 'as' => '.destroy']);

    });    



	Route::group(['prefix' => 'colores', 'as' => 'colores'], function() {

	    Route::get('create', ['uses' => 'adm\ColoresController@createColores', 'as' => '.create']);

	    Route::post('store', ['uses' => 'adm\ColoresController@storeColores', 'as' => '.store']);

	    Route::get('show', ['uses' => 'adm\ColoresController@showColores', 'as' => '.show']);

	    Route::get('edit/{id}', ['uses' => 'adm\ColoresController@editColores', 'as' => '.edit']);

	    Route::put('update/{id}', ['uses' => 'adm\ColoresController@updateColores', 'as' => '.update']);

	    Route::delete('destroy/{id}', ['uses' => 'adm\ColoresController@destroyColores', 'as' => '.destroy']);

    });        



	/* CATEGORIAS LUMINARIAS */

	Route::group(['prefix' => 'categorialuminaria', 'as' => 'categorialuminaria'], function() {

		Route::get('create', ['uses' => 'adm\CategoriaLuminariaController@createCategoria', 'as' => '.create']);

		Route::post('store', ['uses' => 'adm\CategoriaLuminariaController@storeCategoria', 'as' => '.store']);

		Route::get('show', ['uses' => 'adm\CategoriaLuminariaController@showCategoria', 'as' => '.show']);

		Route::get('edit/{id}', ['uses' => 'adm\CategoriaLuminariaController@editCategoria', 'as' => '.edit']);		

		Route::put('update/{id}', ['uses' => 'adm\CategoriaLuminariaController@updateCategoria', 'as' => '.update']);

		Route::delete('destroy/{id}', ['uses' => 'adm\CategoriaLuminariaController@destroyCategoria', 'as' => '.destroy']);

	});



  	/* PRODUCTOS LUMINARIAS */

	Route::group(['prefix' => 'productoluminaria', 'as' => 'productoluminaria'], function() {

		Route::get('create', ['uses' => 'adm\ProductoLuminariaController@createProducto', 'as' => '.create']);

		Route::post('store', ['uses' => 'adm\ProductoLuminariaController@storeProducto', 'as' => '.store']);

		Route::get('show', ['uses' => 'adm\ProductoLuminariaController@showProducto', 'as' => '.show']);

		Route::get('edit/{id}', ['uses' => 'adm\ProductoLuminariaController@editProducto', 'as' => '.edit']);

		Route::get('lists/{id}', ['uses' => 'adm\ProductoLuminariaController@listsProducto', 'as' => '.lists']);/*Ver*/

		Route::put('update/{id}', ['uses' => 'adm\ProductoLuminariaController@updateProducto', 'as' => '.update']);

		Route::delete('destroy/{id}', ['uses' => 'adm\ProductoLuminariaController@destroyProducto', 'as' => '.destroy']);

	});



	/* CATEGORIAS COMPRESORS */

	Route::group(['prefix' => 'categoriacompresor', 'as' => 'categoriacompresor'], function() {

		Route::get('create', ['uses' => 'adm\CategoriaCompresorController@createCategoria', 'as' => '.create']);

		Route::post('store', ['uses' => 'adm\CategoriaCompresorController@storeCategoria', 'as' => '.store']);

		Route::get('show', ['uses' => 'adm\CategoriaCompresorController@showCategoria', 'as' => '.show']);

		Route::get('edit/{id}', ['uses' => 'adm\CategoriaCompresorController@editCategoria', 'as' => '.edit']);

		Route::put('update/{id}', ['uses' => 'adm\CategoriaCompresorController@updateCategoria', 'as' => '.update']);

		Route::delete('destroy/{id}', ['uses' => 'adm\CategoriaCompresorController@destroyCategoria', 'as' => '.destroy']);

	});



  	/* PRODUCTOS COMPRESORS */

	Route::group(['prefix' => 'productocompresor', 'as' => 'productocompresor'], function() {

		Route::get('create', ['uses' => 'adm\ProductoCompresorController@createProducto', 'as' => '.create']);

		Route::post('store', ['uses' => 'adm\ProductoCompresorController@storeProducto', 'as' => '.store']);

		Route::get('show', ['uses' => 'adm\ProductoCompresorController@showProducto', 'as' => '.show']);

		Route::get('edit/{id}', ['uses' => 'adm\ProductoCompresorController@editProducto', 'as' => '.edit']);

    Route::get('lists/{id}', ['uses' => 'adm\ProductoCompresorController@listsProducto', 'as' => '.lists']);/*Ver*/

		Route::put('update/{id}', ['uses' => 'adm\ProductoCompresorController@updateProducto', 'as' => '.update']);

		Route::delete('destroy/{id}', ['uses' => 'adm\ProductoCompresorController@destroyProducto', 'as' => '.destroy']);

	});



	/* MODELOS CONTENIDOS */

	Route::group(['prefix' => 'modeloscontenidos', 'as' => 'modeloscontenidos'], function() {

		Route::get('create', ['uses' => 'adm\ModeloContenidoController@createCategoria', 'as' => '.create']);

		Route::post('store', ['uses' => 'adm\ModeloContenidoController@storeCategoria', 'as' => '.store']);

		Route::get('show', ['uses' => 'adm\ModeloContenidoController@showCategoria', 'as' => '.show']);

		Route::get('edit/{id}', ['uses' => 'adm\ModeloContenidoController@editCategoria', 'as' => '.edit']);

		Route::put('update/{id}', ['uses' => 'adm\ModeloContenidoController@updateCategoria', 'as' => '.update']);

		Route::delete('destroy/{id}', ['uses' => 'adm\ModeloContenidoController@destroyCategoria', 'as' => '.destroy']);

	});



  	/* MODELOS GALERIAS ó PRODUCTOS */

	Route::group(['prefix' => 'modelosgalerias', 'as' => 'modelosgalerias'], function() {

		Route::get('create', ['uses' => 'adm\ModeloGaleriaController@createArticulo', 'as' => '.create']);

		Route::post('store', ['uses' => 'adm\ModeloGaleriaController@storeArticulo', 'as' => '.store']);

		Route::get('show', ['uses' => 'adm\ModeloGaleriaController@showArticulo', 'as' => '.show']);

		Route::get('edit/{id}', ['uses' => 'adm\ModeloGaleriaController@editArticulo', 'as' => '.edit']);

		Route::get('lists/{id}', ['uses' => 'adm\ModeloGaleriaController@listsArticulo', 'as' => '.lists']);

		Route::put('update/{id}', ['uses' => 'adm\ModeloGaleriaController@updateArticulo', 'as' => '.update']);

		Route::delete('destroy/{id}', ['uses' => 'adm\ModeloGaleriaController@destroyArticulo', 'as' => '.destroy']);

	});



	/* CATEGORIAS NOVEDADES */

	Route::group(['prefix' => 'categorianovedad', 'as' => 'categorianovedad'], function() {

		Route::get('create', ['uses' => 'adm\CategoriaNovedadController@createCategoria', 'as' => '.create']);

		Route::post('store', ['uses' => 'adm\CategoriaNovedadController@storeCategoria', 'as' => '.store']);

		Route::get('show', ['uses' => 'adm\CategoriaNovedadController@showCategoria', 'as' => '.show']);

		Route::get('edit/{id}', ['uses' => 'adm\CategoriaNovedadController@editCategoria', 'as' => '.edit']);

		Route::put('update/{id}', ['uses' => 'adm\CategoriaNovedadController@updateCategoria', 'as' => '.update']);

		Route::delete('destroy/{id}', ['uses' => 'adm\CategoriaNovedadController@destroyCategoria', 'as' => '.destroy']);

	});



	/* PRODUCTOS NOVEDADES */

	Route::group(['prefix' => 'productonovedad', 'as' => 'productonovedad'], function() {

		Route::get('create', ['uses' => 'adm\ProductoNovedadController@createProducto', 'as' => '.create']);

		Route::post('store', ['uses' => 'adm\ProductoNovedadController@storeProducto', 'as' => '.store']);

		Route::get('show', ['uses' => 'adm\ProductoNovedadController@showProducto', 'as' => '.show']);

    Route::get('edit/{id}', ['uses' => 'adm\ProductoNovedadController@editProducto', 'as' => '.edit']);

    Route::get('lists/{id}', ['uses' => 'adm\ProductoNovedadController@listsProducto', 'as' => '.lists']);/*Ver*/

		Route::put('update/{id}', ['uses' => 'adm\ProductoNovedadController@updateProducto', 'as' => '.update']);

		Route::delete('destroy/{id}', ['uses' => 'adm\ProductoNovedadController@destroyProducto', 'as' => '.destroy']);

	});



	/* GALERIAS NOVEDADES */

	Route::group(['prefix' => 'galerianovedad', 'as' => 'galerianovedad'], function() {

		Route::get('create', ['uses' => 'adm\GaleriaNovedadController@createGaleria', 'as' => '.create']);

		Route::post('store', ['uses' => 'adm\GaleriaNovedadController@storeGaleria', 'as' => '.store']);

		Route::get('show', ['uses' => 'adm\GaleriaNovedadController@showGaleria', 'as' => '.show']);

		Route::get('edit/{id}', ['uses' => 'adm\GaleriaNovedadController@editGaleria', 'as' => '.edit']);

		Route::get('lists/{id}', ['uses' => 'adm\GaleriaNovedadController@listsGaleria', 'as' => '.lists']);

		Route::put('update/{id}', ['uses' => 'adm\GaleriaNovedadController@updateGaleria', 'as' => '.update']);

		Route::delete('destroy/{id}', ['uses' => 'adm\GaleriaNovedadController@destroyGaleria', 'as' => '.destroy']);

	});

	

	/* CLIENTES */

	Route::group(['prefix' => 'clientes', 'as' => 'clientes'], function() {

		Route::get('create', ['uses' => 'adm\ClienteController@create', 'as' => '.create']);

		Route::post('store', ['uses' => 'adm\ClienteController@store', 'as' => '.store']);

		Route::get('show', ['uses' => 'adm\ClienteController@show', 'as' => '.show']);

		Route::get('edit/{id}', ['uses' => 'adm\ClienteController@edit', 'as' => '.edit']);

		Route::put('update/{id}', ['uses' => 'adm\ClienteController@update', 'as' => '.update']);

		Route::delete('destroy/{id}', ['uses' => 'adm\ClienteController@destroy', 'as' => '.destroy']);

	});



  /* TRABAJAMOS */

  Route::group(['prefix' => 'trabajamos', 'as' => 'trabajamos'], function() {

    Route::get('create', ['uses' => 'adm\TrabajamosController@create', 'as' => '.create']);

    Route::post('store', ['uses' => 'adm\TrabajamosController@store', 'as' => '.store']);

    Route::get('show', ['uses' => 'adm\TrabajamosController@show', 'as' => '.show']);

    Route::get('edit/{id}', ['uses' => 'adm\TrabajamosController@edit', 'as' => '.edit']);

    Route::put('update/{id}', ['uses' => 'adm\TrabajamosController@update', 'as' => '.update']);

    Route::delete('destroy/{id}', ['uses' => 'adm\TrabajamosController@destroy', 'as' => '.destroy']);

  });



  /* BANNERS   CONTENIDO */

  Route::group(['prefix' => 'bannercontenidos', 'as' => 'bannercontenidos'], function() {

    Route::get('create', ['uses' => 'adm\BannerContenidoController@create', 'as' => '.create']);

    Route::post('store', ['uses' => 'adm\BannerContenidoController@store', 'as' => '.store']);

    Route::get('show', ['uses' => 'adm\BannerContenidoController@show', 'as' => '.show']);

    Route::get('edit/{id}', ['uses' => 'adm\BannerContenidoController@edit', 'as' => '.edit']);

    Route::put('update/{id}', ['uses' => 'adm\BannerContenidoController@update', 'as' => '.update']);

    Route::delete('destroy/{id}', ['uses' => 'adm\BannerContenidoController@destroy', 'as' => '.destroy']);

  });



  /* BANNERS   ICONOS */

  Route::group(['prefix' => 'bannericonos', 'as' => 'bannericonos'], function() {

    Route::get('create', ['uses' => 'adm\BannerIconoController@create', 'as' => '.create']);

    Route::post('store', ['uses' => 'adm\BannerIconoController@store', 'as' => '.store']);

    Route::get('show', ['uses' => 'adm\BannerIconoController@show', 'as' => '.show']);

    Route::get('edit/{id}', ['uses' => 'adm\BannerIconoController@edit', 'as' => '.edit']);

    Route::put('update/{id}', ['uses' => 'adm\BannerIconoController@update', 'as' => '.update']);

    Route::delete('destroy/{id}', ['uses' => 'adm\BannerIconoController@destroy', 'as' => '.destroy']);

  });



  /* TIEMPOS */

	Route::group(['prefix' => 'tiempos', 'as' => 'tiempos'], function() {

		Route::get('create', ['uses' => 'adm\TiempoController@create', 'as' => '.create']);

		Route::post('store', ['uses' => 'adm\TiempoController@store', 'as' => '.store']);

		Route::get('show', ['uses' => 'adm\TiempoController@show', 'as' => '.show']);

		Route::get('edit/{id}', ['uses' => 'adm\TiempoController@edit', 'as' => '.edit']);

		Route::put('update/{id}', ['uses' => 'adm\TiempoController@update', 'as' => '.update']);

		Route::delete('destroy/{id}', ['uses' => 'adm\TiempoController@destroy', 'as' => '.destroy']);

	});



  /* PUBLICACIONS DE EMPRESA */

	Route::group(['prefix' => 'publicacions', 'as' => 'publicacions'], function() {

		Route::get('create', ['uses' => 'adm\PublicacionController@create', 'as' => '.create']);

		Route::post('store', ['uses' => 'adm\PublicacionController@store', 'as' => '.store']);

		Route::get('show', ['uses' => 'adm\PublicacionController@show', 'as' => '.show']);

		Route::get('edit/{id}', ['uses' => 'adm\PublicacionController@edit', 'as' => '.edit']);

		Route::put('update/{id}', ['uses' => 'adm\PublicacionController@update', 'as' => '.update']);

		Route::delete('destroy/{id}', ['uses' => 'adm\PublicacionController@destroy', 'as' => '.destroy']);

	});



	/* SERV CONTENIDO */

	Route::group(['prefix' => 'servcontenido', 'as' => 'servcontenido'], function() {

		Route::get('create', ['uses' => 'adm\ServContenidoController@create', 'as' => '.create']);

		Route::post('store', ['uses' => 'adm\ServContenidoController@store', 'as' => '.store']);

		Route::get('show', ['uses' => 'adm\ServContenidoController@show', 'as' => '.show']);

		Route::get('edit/{id}', ['uses' => 'adm\ServContenidoController@edit', 'as' => '.edit']);		

		Route::put('update/{id}', ['uses' => 'adm\ServContenidoController@update', 'as' => '.update']);

		Route::delete('destroy/{id}', ['uses' => 'adm\ServContenidoController@destroy', 'as' => '.destroy']);

	});



	/* SERV DESTACADO */

	Route::group(['prefix' => 'ihome', 'as' => 'ihome'], function() {

		Route::get('create', ['uses' => 'adm\ServDestacadoController@create', 'as' => '.create']);

		Route::post('store', ['uses' => 'adm\ServDestacadoController@store', 'as' => '.store']);

		Route::get('show', ['uses' => 'adm\ServDestacadoController@show', 'as' => '.show']);

		Route::get('edit/{id}', ['uses' => 'adm\ServDestacadoController@edit', 'as' => '.edit']);		

		Route::put('update/{id}', ['uses' => 'adm\ServDestacadoController@update', 'as' => '.update']);

		Route::delete('destroy/{id}', ['uses' => 'adm\ServDestacadoController@destroy', 'as' => '.destroy']);

	});



	/* SERV ITEM */

	Route::group(['prefix' => 'servitem', 'as' => 'servitem'], function() {

		Route::get('create', ['uses' => 'adm\ServItemController@create', 'as' => '.create']);

		Route::post('store', ['uses' => 'adm\ServItemController@store', 'as' => '.store']);

		Route::get('show', ['uses' => 'adm\ServItemController@show', 'as' => '.show']);

		Route::get('edit/{id}', ['uses' => 'adm\ServItemController@edit', 'as' => '.edit']);		

		Route::put('update/{id}', ['uses' => 'adm\ServItemController@update', 'as' => '.update']);

		Route::delete('destroy/{id}', ['uses' => 'adm\ServItemController@destroy', 'as' => '.destroy']);

	});



	/* MODAL ALAMBRADOS */

	Route::group(['prefix' => 'modalrealizado', 'as' => 'modalrealizado'], function() {

		Route::get('create', ['uses' => 'adm\ModalRealizadoController@create', 'as' => '.create']);

		Route::post('store', ['uses' => 'adm\ModalRealizadoController@store', 'as' => '.store']);

		Route::get('show', ['uses' => 'adm\ModalRealizadoController@show', 'as' => '.show']);

		Route::get('edit/{id}', ['uses' => 'adm\ModalRealizadoController@edit', 'as' => '.edit']);

		Route::get('lists/{id}', ['uses' => 'adm\ModalRealizadoController@lists', 'as' => '.lists']);/*Ver*/

		Route::put('update/{id}', ['uses' => 'adm\ModalRealizadoController@update', 'as' => '.update']);

		Route::delete('destroy/{id}', ['uses' => 'adm\ModalRealizadoController@destroy', 'as' => '.destroy']);

	});



	/* PRODUCTOS ALAMBRADOS */

	Route::group(['prefix' => 'productoalambrado', 'as' => 'productoalambrado'], function() {

		Route::get('create', ['uses' => 'adm\ProductoAlambradoController@create', 'as' => '.create']);

		Route::post('store', ['uses' => 'adm\ProductoAlambradoController@store', 'as' => '.store']);

		Route::get('show', ['uses' => 'adm\ProductoAlambradoController@show', 'as' => '.show']);

		Route::get('edit/{id}', ['uses' => 'adm\ProductoAlambradoController@edit', 'as' => '.edit']);

		Route::get('lists/{id}', ['uses' => 'adm\ProductoAlambradoController@lists', 'as' => '.lists']);/*Ver*/

		Route::put('update/{id}', ['uses' => 'adm\ProductoAlambradoController@update', 'as' => '.update']);

		Route::delete('destroy/{id}', ['uses' => 'adm\ProductoAlambradoController@destroy', 'as' => '.destroy']);

	});



/*////////////////////////////////*/

/*          NOVAPAKING		    //*/

/*////////////////////////////////*/

	/* NOVA ANUNCIO */

	Route::group(['prefix' => 'novaanuncio', 'as' => 'novaanuncio'], function() {

		Route::get('create', ['uses' => 'adm\NovaAnuncioController@create', 'as' => '.create']);

		Route::post('store', ['uses' => 'adm\NovaAnuncioController@store', 'as' => '.store']);

		Route::get('show', ['uses' => 'adm\NovaAnuncioController@show', 'as' => '.show']);

		Route::get('edit/{id}', ['uses' => 'adm\NovaAnuncioController@edit', 'as' => '.edit']);

		Route::put('update/{id}', ['uses' => 'adm\NovaAnuncioController@update', 'as' => '.update']);

		Route::delete('destroy/{id}', ['uses' => 'adm\NovaAnuncioController@destroy', 'as' => '.destroy']);

	});

	/* NOVA CONTENIDO */

	Route::group(['prefix' => 'novacontenido', 'as' => 'novacontenido'], function() {

		Route::get('create', ['uses' => 'adm\NovaContenidoController@create', 'as' => '.create']);

		Route::post('store', ['uses' => 'adm\NovaContenidoController@store', 'as' => '.store']);

		Route::get('show', ['uses' => 'adm\NovaContenidoController@show', 'as' => '.show']);

		Route::get('edit/{id}', ['uses' => 'adm\NovaContenidoController@edit', 'as' => '.edit']);

		Route::put('update/{id}', ['uses' => 'adm\NovaContenidoController@update', 'as' => '.update']);

		Route::delete('destroy/{id}', ['uses' => 'adm\NovaContenidoController@destroy', 'as' => '.destroy']);

	});

	/* NOVA CATEGORIAS */

	Route::group(['prefix' => 'categoria', 'as' => 'categoria'], function() {

		Route::get('create', ['uses' => 'adm\CategoriaController@createCategoria', 'as' => '.create']);

		Route::post('store', ['uses' => 'adm\CategoriaController@storeCategoria', 'as' => '.store']);

		Route::get('show', ['uses' => 'adm\CategoriaController@showCategoria', 'as' => '.show']);

		Route::get('edit/{id}', ['uses' => 'adm\CategoriaController@editCategoria', 'as' => '.edit']);

		Route::put('update/{id}', ['uses' => 'adm\CategoriaController@updateCategoria', 'as' => '.update']);

		Route::delete('destroy/{id}', ['uses' => 'adm\CategoriaController@destroyCategoria', 'as' => '.destroy']);

	});



/* NOVA PRODUCTOS */

Route::group(['prefix' => 'producto', 'as' => 'producto'], function() {

	Route::get('create/{id}', ['uses' => 'adm\ProductoController@createProducto', 'as' => '.create']);

	Route::post('store', ['uses' => 'adm\ProductoController@storeProducto', 'as' => '.store']);

	Route::get('show', ['uses' => 'adm\ProductoController@showProducto', 'as' => '.show']);

Route::get('lists/{id}', ['uses' => 'adm\ProductoController@listsProducto', 'as' => '.lists']);/*Ver*/

	Route::get('edit/{id}', ['uses' => 'adm\ProductoController@editProducto', 'as' => '.edit']);

	Route::put('update/{id}', ['uses' => 'adm\ProductoController@updateProducto', 'as' => '.update']);

	Route::delete('destroy/{id}', ['uses' => 'adm\ProductoController@destroyProducto', 'as' => '.destroy']);

});



/* NOVA PRODUCTOS */

Route::group(['prefix' => 'galeria', 'as' => 'galeria'], function() {

	Route::get('create/{id}', ['uses' => 'adm\GaleriaController@createGaleria', 'as' => '.create']);

	Route::post('store', ['uses' => 'adm\GaleriaController@storeGaleria', 'as' => '.store']);

	Route::get('show', ['uses' => 'adm\GaleriaController@showGaleria', 'as' => '.show']);

Route::get('lists/{id}', ['uses' => 'adm\GaleriaController@listsGaleria', 'as' => '.lists']);/*Ver*/

	Route::get('edit/{id}', ['uses' => 'adm\GaleriaController@editGaleria', 'as' => '.edit']);

	Route::put('update/{id}', ['uses' => 'adm\GaleriaController@updateGaleria', 'as' => '.update']);

	Route::delete('destroy/{id}', ['uses' => 'adm\GaleriaController@destroyGaleria', 'as' => '.destroy']);

});



	/* NOVA GALERIAS */

	Route::group(['prefix' => 'novagaleria', 'as' => 'novagaleria'], function() {

		Route::get('create/{id}', ['uses' => 'adm\NovaGaleriaController@createGaleria', 'as' => '.create']);

		Route::post('store', ['uses' => 'adm\NovaGaleriaController@storeGaleria', 'as' => '.store']);

		Route::get('show', ['uses' => 'adm\NovaGaleriaController@showGaleria', 'as' => '.show']);

	Route::get('lists/{id}', ['uses' => 'adm\NovaGaleriaController@listsGaleria', 'as' => '.lists']);

		Route::get('edit/{id}', ['uses' => 'adm\NovaGaleriaController@editGaleria', 'as' => '.edit']);

		Route::put('update/{id}', ['uses' => 'adm\NovaGaleriaController@updateGaleria', 'as' => '.update']);

		Route::delete('destroy/{id}', ['uses' => 'adm\NovaGaleriaController@destroyGaleria', 'as' => '.destroy']);

	});



	/* TECNO CONTENIDO */

	Route::group(['prefix' => 'tecnocontenido', 'as' => 'tecnocontenido'], function() {

		Route::get('create', ['uses' => 'adm\TecnoContenidoController@create', 'as' => '.create']);

		Route::post('store', ['uses' => 'adm\TecnoContenidoController@store', 'as' => '.store']);

		Route::get('show', ['uses' => 'adm\TecnoContenidoController@show', 'as' => '.show']);

		Route::get('edit/{id}', ['uses' => 'adm\TecnoContenidoController@edit', 'as' => '.edit']);

		Route::put('update/{id}', ['uses' => 'adm\TecnoContenidoController@update', 'as' => '.update']);

		Route::delete('destroy/{id}', ['uses' => 'adm\TecnoContenidoController@destroy', 'as' => '.destroy']);

	});

	/* TECNO ITEMS */

	Route::group(['prefix' => 'tecnoitem', 'as' => 'tecnoitem'], function() {

		Route::get('create', ['uses' => 'adm\TecnoItemController@create', 'as' => '.create']);

		Route::post('store', ['uses' => 'adm\TecnoItemController@store', 'as' => '.store']);

		Route::get('show', ['uses' => 'adm\TecnoItemController@show', 'as' => '.show']);

		Route::get('edit/{id}', ['uses' => 'adm\TecnoItemController@edit', 'as' => '.edit']);

		Route::put('update/{id}', ['uses' => 'adm\TecnoItemController@update', 'as' => '.update']);

		Route::delete('destroy/{id}', ['uses' => 'adm\TecnoItemController@destroy', 'as' => '.destroy']);

	});

	/* TECNO GALERIAS */

	Route::group(['prefix' => 'tecnogaleria', 'as' => 'tecnogaleria'], function() {

		Route::get('create/{id}', ['uses' => 'adm\TecnoGaleriaController@create', 'as' => '.create']);

		Route::post('store', ['uses' => 'adm\TecnoGaleriaController@store', 'as' => '.store']);

		Route::get('show', ['uses' => 'adm\TecnoGaleriaController@show', 'as' => '.show']);

    Route::get('lists/{id}', ['uses' => 'adm\TecnoGaleriaController@lists', 'as' => '.lists']);/*Ver*/

    	Route::get('edit/{id}', ['uses' => 'adm\TecnoGaleriaController@edit', 'as' => '.edit']);

		Route::put('update/{id}', ['uses' => 'adm\TecnoGaleriaController@update', 'as' => '.update']);

		Route::delete('destroy/{id}', ['uses' => 'adm\TecnoGaleriaController@destroy', 'as' => '.destroy']);

	});



	/* PRC ITEMS */

	Route::group(['prefix' => 'prcitem', 'as' => 'prcitem'], function() {

		Route::get('create', ['uses' => 'adm\PrcItemController@create', 'as' => '.create']);

		Route::post('store', ['uses' => 'adm\PrcItemController@store', 'as' => '.store']);

		Route::get('show', ['uses' => 'adm\PrcItemController@show', 'as' => '.show']);

		Route::get('edit/{id}', ['uses' => 'adm\PrcItemController@edit', 'as' => '.edit']);

		Route::put('update/{id}', ['uses' => 'adm\PrcItemController@update', 'as' => '.update']);

		Route::delete('destroy/{id}', ['uses' => 'adm\PrcItemController@destroy', 'as' => '.destroy']);

	});

	/* PRC GALERIAS */

	Route::group(['prefix' => 'prcgaleria', 'as' => 'prcgaleria'], function() {

		Route::get('create/{id}', ['uses' => 'adm\PrcGaleriaController@create', 'as' => '.create']);

		Route::post('store', ['uses' => 'adm\PrcGaleriaController@store', 'as' => '.store']);

		Route::get('show', ['uses' => 'adm\PrcGaleriaController@show', 'as' => '.show']);

    Route::get('lists/{id}', ['uses' => 'adm\PrcGaleriaController@lists', 'as' => '.lists']);/*Ver*/

    	Route::get('edit/{id}', ['uses' => 'adm\PrcGaleriaController@edit', 'as' => '.edit']);

		Route::put('update/{id}', ['uses' => 'adm\PrcGaleriaController@update', 'as' => '.update']);

		Route::delete('destroy/{id}', ['uses' => 'adm\PrcGaleriaController@destroy', 'as' => '.destroy']);

	});

/*////////////////////////////////*/

/*////////////////////////////////*/



	Route::group(['prefix' => 'equipamiento', 'as' => 'equipamiento'], function() {

		Route::group(['prefix' => 'contenido'], function() {

		Route::get('edit', ['uses' => 'adm\EquipamientoController@editarContenidos', 'as' => '.contenido.edit']);

		Route::put('update/{id}', ['uses' => 'adm\EquipamientoController@updateContenido', 'as' => '.contenido.update']);

		});	

	});







  Route::group(['prefix' => 'calidad', 'as' => 'calidad'], function() {

      Route::get('show', ['uses' => 'adm\CalidadController@showCalidad', 'as' => '.show']);

      Route::get('edit/{id}', ['uses' => 'adm\CalidadController@editCalidad', 'as' => '.edit']);

      Route::put('update/{id}', ['uses' => 'adm\CalidadController@updateCalidad', 'as' => '.update']);

    });



  Route::group(['prefix' => 'descarga', 'as' => 'descarga'], function() {

      Route::get('create', ['uses' => 'adm\DescargaController@createDescarga', 'as' => '.create']);

      Route::post('store', ['uses' => 'adm\DescargaController@storeDescarga', 'as' => '.store']);

      Route::get('show', ['uses' => 'adm\DescargaController@showDescarga', 'as' => '.show']);

      Route::get('edit/{id}', ['uses' => 'adm\DescargaController@editDescarga', 'as' => '.edit']);

      Route::put('update/{id}', ['uses' => 'adm\DescargaController@updateDescarga', 'as' => '.update']);

      Route::delete('destroy/{id}', ['uses' => 'adm\DescargaController@destroyDescarga', 'as' => '.destroy']);

    });





	



	Route::group(['prefix' => 'novedad', 'as' => 'novedad'], function() {

			Route::get('create', ['uses' => 'adm\NovedadController@createNovedad', 'as' => '.create']);

			Route::post('store', ['uses' => 'adm\NovedadController@storeNovedad', 'as' => '.store']);

			Route::get('show', ['uses' => 'adm\NovedadController@showNovedad', 'as' => '.show']);

			Route::get('edit/{id}', ['uses' => 'adm\NovedadController@editNovedad', 'as' => '.edit']);

			Route::put('update/{id}', ['uses' => 'adm\NovedadController@updateNovedad', 'as' => '.update']);

			Route::delete('destroy/{id}', ['uses' => 'adm\NovedadController@destroyNovedad', 'as' => '.destroy']);

		});



	



	/* TEXTILES */

/*	Route::group(['prefix' => 'categoria', 'as' => 'categoria'], function() {

			Route::get('create', ['uses' => 'adm\CategoriaController@createCategoria', 'as' => '.create']);

			Route::post('store', ['uses' => 'adm\CategoriaController@storeCategoria', 'as' => '.store']);

			Route::get('show', ['uses' => 'adm\CategoriaController@showCategoria', 'as' => '.show']);

			Route::get('edit/{id}', ['uses' => 'adm\CategoriaController@editCategoria', 'as' => '.edit']);

			Route::put('update/{id}', ['uses' => 'adm\CategoriaController@updateCategoria', 'as' => '.update']);

			Route::delete('destroy/{id}', ['uses' => 'adm\CategoriaController@destroyCategoria', 'as' => '.destroy']);

		});



  	TEXTILES

	Route::group(['prefix' => 'producto', 'as' => 'producto'], function() {

			Route::get('create', ['uses' => 'adm\ProductoController@createProducto', 'as' => '.create']);

			Route::post('store', ['uses' => 'adm\ProductoController@storeProducto', 'as' => '.store']);

			Route::get('show', ['uses' => 'adm\ProductoController@showProducto', 'as' => '.show']);

			Route::get('edit/{id}', ['uses' => 'adm\ProductoController@editProducto', 'as' => '.edit']);

			Route::put('update/{id}', ['uses' => 'adm\ProductoController@updateProducto', 'as' => '.update']);

			Route::delete('destroy/{id}', ['uses' => 'adm\ProductoController@destroyProducto', 'as' => '.destroy']);

		});

*/

	/* ADHESIVOS */



/*

	Route::group(['prefix' => 'acategoria', 'as' => 'acategoria'], function() {

			Route::get('create', ['uses' => 'adm\ACategoriaController@createACategoria', 'as' => '.create']);

			Route::post('store', ['uses' => 'adm\ACategoriaController@storeACategoria', 'as' => '.store']);

			Route::get('show', ['uses' => 'adm\ACategoriaController@showACategoria', 'as' => '.show']);

			Route::get('edit/{id}', ['uses' => 'adm\ACategoriaController@editACategoria', 'as' => '.edit']);

			Route::put('update/{id}', ['uses' => 'adm\ACategoriaController@updateACategoria', 'as' => '.update']);

			Route::delete('destroy/{id}', ['uses' => 'adm\ACategoriaController@destroyACategoria', 'as' => '.destroy']);

		});



	Route::group(['prefix' => 'aproducto', 'as' => 'aproducto'], function() {

			Route::get('create', ['uses' => 'adm\AProductoController@createAProducto', 'as' => '.create']);

			Route::post('store', ['uses' => 'adm\AProductoController@storeAProducto', 'as' => '.store']);

			Route::get('show', ['uses' => 'adm\AProductoController@showAProducto', 'as' => '.show']);

			Route::get('edit/{id}', ['uses' => 'adm\AProductoController@editAProducto', 'as' => '.edit']);

			Route::put('update/{id}', ['uses' => 'adm\AProductoController@updateAProducto', 'as' => '.update']);

			Route::delete('destroy/{id}', ['uses' => 'adm\AProductoController@destroyAProducto', 'as' => '.destroy']);

		});

*/	



	

  /* CORREOS */

  Route::group(['prefix' => 'correo', 'as' => 'correo'], function() {

      Route::get('create', ['uses' => 'adm\CorreoController@createCorreo', 'as' => '.create']);

      Route::post('store', ['uses' => 'adm\CorreoController@storeCorreo', 'as' => '.store']);

      Route::get('show', ['uses' => 'adm\CorreoController@showCorreo', 'as' => '.show']);

      Route::get('edit/{id}', ['uses' => 'adm\CorreoController@editCorreo', 'as' => '.edit']);

      Route::put('update/{id}', ['uses' => 'adm\CorreoController@updateCorreo', 'as' => '.update']);

      Route::delete('destroy/{id}', ['uses' => 'adm\CorreoController@destroyCorreo', 'as' => '.destroy']);

    });



  /* SOLUCIONES A MEDIDA */

  Route::group(['prefix' => 'solucion', 'as' => 'solucion'], function() {

      /*

      Route::get('create', ['uses' => 'adm\SolucionController@createSolucion', 'as' => '.create']);

      Route::post('store', ['uses' => 'adm\SolucionController@storeSolucion', 'as' => '.store']);

      */

      Route::get('show', ['uses' => 'adm\SolucionController@showSolucion', 'as' => '.show']);

      Route::get('edit/{id}', ['uses' => 'adm\SolucionController@editSolucion', 'as' => '.edit']);

      Route::put('update/{id}', ['uses' => 'adm\SolucionController@updateSolucion', 'as' => '.update']);

    });



/*	Route::group(['prefix' => 'galeria', 'as' => 'galeria'], function() {

			Route::get('create', ['uses' => 'adm\GaleriaController@createGaleria', 'as' => '.create']);

			Route::post('store', ['uses' => 'adm\GaleriaController@storeGaleria', 'as' => '.store']);

			Route::get('show', ['uses' => 'adm\GaleriaController@showGaleria', 'as' => '.show']);

			Route::get('edit/{id}', ['uses' => 'adm\GaleriaController@editGaleria', 'as' => '.edit']);

			Route::put('update/{id}', ['uses' => 'adm\GaleriaController@updateGaleria', 'as' => '.update']);

			Route::delete('destroy/{id}', ['uses' => 'adm\GaleriaController@destroyGaleria', 'as' => '.destroy']);

		});*/



	Route::group(['prefix' => 'clientex', 'as' => 'clientex'], function() {

		Route::group(['prefix' => 'contenido'], function() {

		Route::get('show', ['uses' => 'adm\ClienteController@showCliente', 'as' => '.contenido.show']);

		Route::put('update/{id}', ['uses' => 'adm\ClienteController@updateCliente', 'as' => '.contenido.update']);

		Route::delete('destroy/{id}', ['uses' => 'adm\ClienteController@destroyCliente', 'as' => '.destroy']);

		});	

	});



});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');