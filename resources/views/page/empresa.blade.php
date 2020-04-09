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
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">


  <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

</head>

<body style="font-family: 'Source Sans Pro', sans-serif!important;">

@include('page.template.header')


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
{{-- Slider --}}{{-- Slider --}}

<div class="slider">

<ul class="slides responsive-img">

  @foreach($sliders as $slider)

  <li>

    <img src="{{ asset('imagenes/sliders/'.$slider->imagen) }}" style="filter:brightness(1);">               

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





{{-- CONTENIDO --}}

<div class="container ym60 yp35" style="width: 90%">

<div class="row ">

  <div class="col l6">

  <div class="responsive-img">

    @if($empresa->imagen != null)

    <div>

    <img class="responsive-img" src="{{asset('imagenes/empresa/'.$empresa->imagen)}}">

    </div>

    @endif

  </div>

  </div>

  <div class="col l6">

  <div class="" style="width: 98%;">

  <div class="fc4 fw5 fs42" style="border-bottom: 1px solid var(--color4);">{!!$empresa->titulo!!}</div>

  <div class="fc6 fw5 fs18" style="margin-top: 10px; border-bottom: 1px solid var(--color4);">{!!$empresa->texto!!}</div>

  <div class="fc2 fw5 fs28">{!!$empresa->titulo2!!}</div>

  </div>

  </div>

</div>

</div>



@include('page.template.carousel')



{{-- Linea de Tiempo

<section class="timeline-section" style="padding-top: 50px;">

    <div id="timeline">

      <ul id="dates">

        @foreach($tiempos as $tiempo)

          <li><a href="#{{ $tiempo->titulo }}">{{ $tiempo->titulo }}</a></li>

        @endforeach

      </ul>

      

      <ul id="issues">

        @foreach($tiempos as $tiempo)

        <li id="{{ $tiempo->titulo }}">

          <div class="imglinea" align="center"><br>

          <div class=" fs15 blanc1" style="width: 500px;">{!! $tiempo->texto !!}</div><br>

        @if($tiempo->imagen!=null)

          <div align="center" style="margin-left: 300px; margin-bottom: 50px;">            

          <img src="{{asset('imagenes/tiempos/'.$tiempo->imagen)}}" class="img-responsive" width="276px" style="max-height: 200px;">

          </div>

        @endif          

          </div>

        </li>

        @endforeach

      </ul>

          

    </div>

</section>



<div style="border-bottom: 1px solid #DDDDDD;">

<div class="container yp35" style="width: 88%; margin-bottom: 35px; ">

<div class="row">

@foreach($publicacions as $publicacion)

  <div class="col l6 editorRico">

  <div class="tituloRojo  fs36 fw3" style="margin-bottom: 0px;">

  {!!($publicacion->titulo)!!}

  <div class="peqLinearojiz2"></div>

  </div>

  <div class="gris10 fs16  yp20 editorRico" style="width: 90%;">

  {!!($publicacion->texto)!!}

  </div>

  </div>

@endforeach

</div>

</div>

</div>



<div>

<div class="container" style="width: 88%; margin-bottom: 35px;">

<div class="row">

<div class="col l6">

  <div class="tituloRojo  fs36 fw3" style="margin-bottom: 0px;">

  {!!$empresa->politica!!} 

  </div>

  <div class="gris10 fs16 " style="width: 90%;">

  {!!$empresa->descripcion!!} 

  </div>

</div>

<div class="col l6">

  <img class="yp35" src="{{asset('imagenes/empresa/'.$empresa->imagen2)}}" class="img-responsive">

</div>

</div>

</div>

</div>

--}}









</div>



@include('page.template.footer')





</body>

</html>



<script type="text/javascript" src="{{ asset('js/jquery/jquery.js')}}"></script>

<script type="text/javascript" src="{{ asset('js/jquery/jquery.min.js')}}"></script>

<script type="text/javascript" src="{{ asset('js/materialize/materialize.min.js') }}"></script>

<script type="text/javascript">

$(document).ready(function(){

    $('.slider').slider();



});

</script>

<script type="text/javascript">

  $(document).ready(function(){

    $('.sidenav').sidenav();

  });

</script>



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



<script type="text/javascript" src="http://osolelaravel.com/verion/js/jquery.timelinr-0.9.6.js"></script>

 

 <script>

    $(function(){

        $().timelinr({

            arrowKeys: 'true'

        })

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

