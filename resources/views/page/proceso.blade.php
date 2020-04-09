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

  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">



  <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

</head>

<body style="font-family: 'Source Sans Pro', sans-serif;">

@include('page.template.header')



<style type="text/css">

.bannerImagen {

    background: url('{{asset('imagenes/novacontenido/'.$contenido->imagen)}}');

    background-repeat: no-repeat;

    margin: 0;

    padding: 0;

    height: 100%;

    width: 100%;

}

.bannerTexto {

    margin: 0;

    padding: 0;

    padding-top: 62px;

    text-align: left;

}

</style>



<div class="bannerImagen" align="center" style="padding-bottom: 50px;">

<div class="container bannerTexto">

<div class="blanc1 ff1 fs28 yp35 editorRico">

  <a class="blanc1 ff1 fs28 yp35" href="{{url('productos')}}">Productos / </a>

  {!!$productoIs->subtitulo!!}



</div>

</div>

</div>



<div class="container yp65" style="width: 80%; font-family: 'Montserrat';">

     

<div class="row"> 

  <div class="col l12">

  <div class="container" style="width: 95%;">

    <div class="row">

      <div class="col l6">

        <div class="col l12 img-responsive" style="width: 98%; height: 400px; margin: 0 0 0 0; padding: 0;">

          {{-- <a href="#" id="enlace" data-fancybox="images"> --}}



            @foreach($galerias as $galeria)

            @if($productoIs->id == $galeria->id_prc_items)

            <div class="img-responsive" id="imagen-grande" style="margin: 0 0 0 0; padding: 0; " >

                <img id="imgDisp{{$productoIs->id}}" src="{{asset('imagenes/prcimg/'.$galeria->imagen)}}" style="height: 400px; width: 400px; border:1px solid #B0B0B0;">           

            </div>

            @break

            @endif

            @endforeach



          {{-- </a> --}}

        </div>

        <div align="center" class="center-align">

        <div class="col l12" style=" margin: 0; padding: 0;margin-top: 5px;">     

            <div class="carousel" style="height: 100px!important; width: 400px; text-align: center;">

            @foreach($galerias as $galeria)

            @if($productoIs->id == $galeria->id_prc_items)

            <img class="carousel-item" id="imgName{{$productoIs->id}}" onclick="changeImage{{$productoIs->id}}('{{asset('imagenes/prcimg/'.$galeria->imagen)}}')" src="{{asset('imagenes/prcimg/'.$galeria->imagen)}}" style="height: 100px; width: 134.4px; margin: 0px; border:1px solid #B0B0B0;">

            @endif

            @endforeach    

            </div>

        </div>

        </div>

      </div>

      <div class="col l6">

      <div class="container" style="width: 95%">

        <div class="ctitulo2"><h5 style="margin-top: 0px; font-weight: 600;  line-height: 35px;">{{($productoIs->subtitulo)}}</h5></div>        

        <div class="Montserrat fs15 fw4 gris10" style="padding-bottom: 20px;">{!!($productoIs->texto)!!}</div>

        <div>



          @if($productoIs->imagen!=null)

          <a href="{{asset('imagenes/prcitem/'.$productoIs->imagen)}}" class="btn btn-ficha z-depth-0 " style="background: #0056A2; color: white; font-family: 'Montserrat'; font-weight: 600; width: 181px; height: 38px; padding: 0px; border-radius: 4px; margin-top: 10px;" target="_blank">VER CATÁLOGO</a>

          @endif



{{--           <a href="{{url('presupuesto')}}" class="btn btn-ficha z-depth-0" style="background: #0056A2; color: white; font-family: 'Montserrat'; font-weight: 600; width: 181px; height: 38px; padding: 0px; border-radius: 4px; margin-top: 10px;">Cotizar</a> --}}

        </div>

      </div>

      </div>

    </div>

    <div class="container" style="width: 100%;">

      <div class="Montserrat fs19 fw4 gris10" style="padding-bottom: 20px;">{!!($productoIs->texto1)!!}</div>

    </div>

    </div>

  </div>

</div>

</div>

@include('page.template.carousel')

@include('page.template.footer')

</body>

</html>





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

<script type="text/javascript">

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



@foreach($galerias as $galeria)

<script type="text/javascript">

function changeImage{{$galeria->id}}(imgName{{$galeria->id}})

{

  image = document.getElementById('imgDisp{{$galeria->id}}');

  image.src = imgName{{$galeria->id}};

}

</script>

@endforeach