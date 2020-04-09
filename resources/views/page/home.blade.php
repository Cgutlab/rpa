<!DOCTYPE html>

<html lang="es">

<head>



	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">

    <meta name="author" content="">

  <title>::RPA::</title>

	<link href="{{ asset('css/estilos.css') }}" rel="stylesheet">

    <!-- Bootstrap Core CSS -->

    <link href="{{ asset('css/materialize/materialize.min.css') }}" rel="stylesheet">



    <!--Import Google Icon Font-->

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Bitter:400,700" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 

<!-- Compiled and minified CSS -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

  <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

</head>

<body style="font-family: 'Source Sans Pro', sans-serif!important;">

@include('page.template.header')

{{-- Slider --}}

<style type="text/css">
    @media only screen and (max-width: 600px) {

      .slider .slides li img {
          width: 100%;
          height: 70%;
          background-size: contain;
          background-position: center;
          background-repeat: no-repeat; 
      }

      .slider img{
        height: 300px!important;
      }
      .slider .slides{
        background: white;
        height: 300px!important;
      }

    }
</style>


<div class="slider">

<ul class="slides">

  @foreach($sliders as $slider)

  <li class="slidermedia">
    <img class="slidermedia" src="{{ asset('imagenes/sliders/'.$slider->imagen) }}" style="filter:brightness(1);">               
    <div class="caption" style="background: rgba(58,58,59,0.7); left:10%; width: auto; margin-top: 30px;">
      <div class="hide-on-small-only" style="margin: 25px;">
        <div class="editorRico fc2 fw3 fs70" style="line-height: 80px;">{{$slider->titulo}}</div>
        <div class="editorRico fc2 fw6 fs70" style="line-height: 80px;">{{$slider->subtitulo}}</div>
      </div>
      <div class="hide-on-med-and-up" style="margin: 10px;">
        <div class="editorRico fc2 fw3 fs40" style="line-height: 44px;">{{$slider->titulo}}</div>
        <div class="editorRico fc2 fw6 fs40" style="line-height: 44px;">{{$slider->subtitulo}}</div>
     </div>
    </div>
  </li>

  @endforeach

</ul>

</div>


<section class="items">
<div class="container" style="width: 80%;">
<div class="row">
<div class="col s12 l12">
@foreach($categorias as $categoria)
<a href="{{route('categoria',$categoria->id)}}">
<div class="col s12 l4">
    <div class="card">
        <div class="cuadradas card-image">
            <img src="{{asset('imagenes/img_cat/'.$categoria->imagen)}}" style="">
            <div class="card-title editorRico" style="display: table;background-color: rgba(8,6,9,0.8);width: 100%;">
                <div style="display: table-cell;">
                  <div class="fs16 ls1">{!!$categoria->titulo !!}</div>
                  <div class="fs22 ls1 fw7">{!!$categoria->texto !!}</div>
                </div>
            </div>
        </div>
    </div>
</div>
</a>
@endforeach
</div>
</div>
</div>
</section>

{{-- 
<div class="container" style="width: 80%;">
<div class="row">
@foreach($categorias as $categoria)
<div class="col s12 m6 l2">

  <div class="card z-depth-0">

    <div class="card-image center-align">

    <a href="{{route('categoria', $categoria->id)}}">

        <div class="efecto">

            <span class="central"><i class="material-icons">add</i></span>

        </div>

        <img src="{{('imagenes/img_cat/'.$categoria->imagen)}}" style="border: 1px solid #DDD; width: 100%; height: 100%; border-top: 5px solid var(--color2);">

    </a>

    </div>

    <div class="card-content cero center-align " style="border: 1px solid #FFF; background: var(--color2);">

      <div class=" fw5 fs16 gris13 editorRico ">

      {!!($categoria->titulo) !!}

      </div>

    </div>

  </div>

</div>
@endforeach
</div>
</div>
<br>
 --}}


<section class="items">

<div class="container" style="width: 80%;">

<div class="row">

<div class="col s12 l12">

@foreach($servicios as $servicio)

<a href="{!!$servicio->ruta !!}">

<div class="col s12 l6">

    <div class="card">

        <div class="cuadradas card-image">

            <img src="{{asset('imagenes/ihome/'.$servicio->imagen)}}" style="">

            <div class="card-title editorRico" style="display: table;background-color: rgba(8,6,9,0.8);width: 100%;">

                <div style="display: table-cell;">

                  <div class="fs16 ls1">{!!$servicio->titulo !!}</div>

                  <div class="fs22 ls1 fw7">{!!$servicio->texto !!}</div>

                </div>

            </div>

        </div>

    </div>

</div>

</a>

@endforeach

</div>

</div>

</div>

</section>





 

{{-- Servicios

<div class="container" align="center" style="width: 85%; padding: 10px 0 50px 0; ">

<div class="row">

@foreach($servicios as $servicio)

<div class="col m4 l4 s12" style="position: relative;" style="padding-bottom: 50px;">

  <div class="card z-depth-0">

    <div style="/*border-radius: 50%; border: 2px solid #2A4585; */width: 125px; height: 125px; vertical-align: middle; ">

    <img src="{{asset('imagenes/servdestacados/'.$servicio->imagen)}}" style="margin: 15px; width: 75px; height: 75px;">

    </div>

    <div class="card-content cero" style="padding: 0; height: 60px;">

      <div class="ff2 fw6 fs21 editorRico center-align ctitulos">{!!($servicio->titulo)!!}</div>

      <div class="ff2 fw4 fs17 editorRico yp10 ctitulo3" style="width: 72%;">{!!($servicio->texto)!!}</div>

    </div>

  </div>

</div>

@endforeach

</div>

</div>

 --}}









{{-- no estaba



 <div class="container yp35 hide-on-med-and-down" style="width: 20%;">

<div align="center">

<a href="#!">

  <div style="background-color: white; border: 2px solid #D31B22; color:#D31B22; padding: 7px; width: 290px; border-radius: 10px;">              

    <div class="Lato fw6 fs16" style="letter-spacing: 2px;">INGRESAR A SERVICIOS</div>             

  </div>

</a>

</div>

</div> --}}





{{-- Destacados --}}

<div class="container" align="center" style="width: 88%;">

  <div class="fc4 fs47 fw5" style="margin-bottom: 0px;">

  <span style="border-bottom: 1px solid var(--color4);">Productos Destacados</span>

  </div>

</div>



<div class="container" align="center" style="width: 77%; margin-top: 35px;margin-bottom: 0px;padding-bottom: 0px;">

<div class="row">

@foreach($destacados as $destacado)

<div class="col m12 s12 l4" style="position: relative;">

  <div class="card z-depth-0">

    <div class="card-image center-align" style="margin: 5px;">

    <a href="{{($destacado->ruta)}}" class="naranja fs20 mayus">

        <div class="efecto">

            <div class="central" style="">              

              <span class="central ff2 fs14"><i class="material-icons">add</i></span>

            </div>

        </div>

        <img src="{{asset('imagenes/destacados/'.$destacado->imagen)}}" style="border: 1px solid #DDD; border-top: 6px solid var(--color2)">

    </a>

    <div class="card-content cero center-align fw6" style="background: var(--color2); height: 80px; padding: 6px 12px; display: flex; justify-content: center; align-items: center;">

      <div class="fc6 fw6 fs18">{!!($destacado->titulo)!!}</div>

    </div>

    </div>

  </div>

</div>

@endforeach

</div>

</div>



<div align="center">

@foreach($contenidos as $contenido)

@if($contenido->ruta)

<a href="{{url($contenido->ruta)}}" class="btn btn-ficha z-depth-0"  style="background: var(--color2); color: var(--color1); font-weight: 600; width: 128px; height: 38px; padding: 0px; margin-top: 20px; border-radius: 4px; font-size: 18px;" target="_blank">INGRESAR</a>

@endif

@endforeach

</div>



<div class="" style="background: #F5F5F5; margin-top: 35px; padding-top: 35px; margin-bottom: 0; padding-bottom: 0;">

<div class="container" style="width: 65%;" align="center" style="margin-bottom: 0; padding-bottom: 0;">

<div class="row" style="margin-bottom: 0; padding-bottom: 0;">

{{--

<div class="col l6">

  <img src="{{asset('imagenes/contenido/'.$contenido->imagen)}}" style="height: 356px; width: 100%;">

</div>

--}}

@foreach($contenidos as $contenido)

<div class="col l12" style="margin-bottom: 0; padding-bottom: 0;">

  <div class="fw5">

    <div class="fc4 fs20">{!!$contenido->titulo!!}</div>

    <div class="fc2 fs40">{!!$contenido->subtitulo!!}</div>

    <div class="fc4 fs20">{!!$contenido->texto!!}</div>

  </div>

</div>

@endforeach

</div>

</div>

@include('page.template.carousel')

</div>

{{-- Contenido --}}

{{-- <div class="bannerImage" align="center" style="padding-bottom: 50px; border-bottom: 1px solid #DDDDDD;">

@foreach($contenidos as $contenido)

<div class="container bannerTexto">

<div class="center-align ctitulo1 fs28 editorRico yp35" align="center">

  {!!$contenido->subtitulo!!}

</div>

</div>

@endforeach

</div> --}}





{{--  no estaba

<div class="container" style="width: 88%">

<div class="tituloRojo Montserrat fs36" style="margin-bottom: 0px;">

C&oacute;mo Trabajamos

<div class="peqLinearojiz1"></div>

</div>

</div>



<div class="container" style="width: 90%; padding: 30px 0 0px 0;">

<div class="row">

@foreach($trabajamos as $trabajamo)

  <div class="col m6 l3" style="position: relative;">

    <div class="card white z-depth-0 ">

        <div class="row">

        <div class="col l2">

          <img src="{{('imagenes/trabajamos/'.$trabajamo->imagen)}}">

        </div>

        <div class="col l10">

          <div class="Montserrat fw7 fs18 gris9" style="padding-left: 8px;">{{($trabajamo->titulo)}}</div>

          <div class="Montserrat fw5 fs18 rojiz1" style="padding-left: 8px;">{{($trabajamo->subtitulo)}}</div>

        </div>

        </div>

        <div class="Montserrat fw5 fs16 gris9" style="height: 150px; max-width: 80%;">

        {!!($trabajamo->texto)!!}          

        </div>

      </div>

  </div>

@endforeach

</div>

</div>





<div class="slider hide-on-med-and-down">

<ul class="slides">

@foreach($banners as $banner)        

<li>

    <img src="{{ asset('imagenes/bannercontenidos/bannercontenidos__bannerHome.jpg') }}" style="filter:brightness(1);">               

    <div class="caption" style="left: 7%; background: rgba(58,58,59,0); width: 88%; border-top: 35px;">

        <div class="row">

          <div class="col l4">

            <span class="editorRico blanc1 fw3 Montserrat" style="font-size: 38px;">{!!$banner->titulo!!}</span>

            <span class="editorRico blanc1 fw3 Source" style="font-size: 16px;">{!!$banner->texto!!}</span>  

          </div>

          <div class="offset-l1 col l7">

          <div class="row">

          @foreach($bannersIconos as $bannersicon)



          <div class="col l6" style="margin-top: 3%;">

          <div class="row">

          <div class="col l4">

            <img src="{{ asset('imagenes/bannericonos/'.$bannersicon->imagen) }}" style="filter:brightness(1); width: 85px; height: 85px;">

          </div>

          <div class="col l8">

            <span class="fs25">{!!($bannersicon->titulo)!!} </span>

          </div>

          </div>

          </div>



          @endforeach

          </div>

          </div>

        </div>

    </div>  

</li>

@endforeach

</ul>

</div>

 --}}

@include('page.template.footer')

</body>

</html>



<!-- Compiled and minified JavaScript -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>    

    <script type="text/javascript" src="{{ asset('js/jquery/jquery.js')}}"></script>

    <script type="text/javascript" src="{{ asset('js/jquery/jquery.min.js')}}"></script>

    <script type="text/javascript" src="{{ asset('js/materialize/materialize.min.js') }}"></script>



<script type="text/javascript">

 $(document).ready(function(){

  $('.dropdown-trigger').dropdown({

    constrainWidth: false,

    closeOnClick: false,

    fullWidth: false,

    hover: 1,

  });

   });

</script>

<script type="text/javascript">

  $(document).ready(function(){

    $('.sidenav').sidenav();

  });

</script>

<script>

  $(document).ready(function(){

  $('.slider').slider();

  });

</script> 

<script>
  $(document).ready(function(){

    $('.carousel').carousel({

        dist: 4,

        numVisible: 6,

        padding: 100,

        indicators: false,

      });

  });
  setTimeout(autoplay, 2400);
function autoplay() {
    $('.carousel').carousel('next');
    setTimeout(autoplay, 2400);
}

</script> 