<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Dato;
use App\Logo;
use App\Red;
use App\Categoria;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       /* Schema::defaultStringLenght(191);*/
        $headerRedes = Red::where('seccion', 'superior')->orderBy('orden','asc')->get();
        $footerRedes = Red::where('seccion', 'inferior')->orderBy('orden','asc')->get();

        $dropdown_familias = Categoria::where('id_padre', '0')->orderBy('orden','asc')->get();


        $titulo1    = Dato::where('tipo','titulo1')->first();
        $direccion1 = Dato::where('tipo','direccion1')->first();
        $telefono1  = Dato::where('tipo','telefono1')->first();
        $correo1    = Dato::where('tipo','correo1')->first();
        $titulo2    = Dato::where('tipo','titulo2')->first();
        $direccion2 = Dato::where('tipo','direccion2')->first();
        $telefono2  = Dato::where('tipo','telefono2')->first();
        $correo2    = Dato::where('tipo','correo2')->first();        
        $titulo3    = Dato::where('tipo','titulo3')->first();
        $direccion3 = Dato::where('tipo','direccion3')->first();
        $telefono3  = Dato::where('tipo','telefono3')->first();
        $correo3    = Dato::where('tipo','correo3')->first();        
        $imagen1    = Dato::where('tipo','imagen1')->first();        
        $imagen2    = Dato::where('tipo','imagen2')->first();        
        $imagen3    = Dato::where('tipo','imagen3')->first();        
        $sucursales    = Dato::where('tipo','sucursales')->first();        
        $logoh = Logo::where('tipo','header')->first();
        $footer = Logo::where('tipo','footer')->first();
        $fuuter = Logo::where('tipo','fuuter')->first();
        $favicon= Logo::where('tipo','favicon')->first();

        view()->share([
            'dropdown_familias' => $dropdown_familias,
            'headerRedes' => $headerRedes,
            'footerRedes' => $footerRedes,
            'titulo1' => $titulo1,
            'direccion1' => $direccion1,
            'telefono1' => $telefono1,
            'correo1' => $correo1,
            'imagen1' => $imagen1,
            'imagen2' => $imagen2,
            'imagen3' => $imagen3,
            'titulo2' => $titulo2,
            'direccion2' => $direccion2,
            'telefono2' => $telefono2,
            'correo2' => $correo2,
            'titulo3' => $titulo3,
            'direccion3' => $direccion3,
            'telefono3' => $telefono3,
            'correo3' => $correo3,
            'sucursales' => $sucursales,
            'logoh' => $logoh,
            'footer' => $footer,
            'fuuter' => $fuuter,
            'favicon' => $favicon,
            ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
