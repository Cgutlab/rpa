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



<!-- Compiled and minified CSS -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">



  <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">



</head>

<body style="font-family: 'Source Sans Pro';">

@include('page.template.header')



<style type="text/css">

.bannerImagen {

    background: url('{{asset('imagenes/tecnocontenido/'.$contenido->imagen)}}');

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

  {!!$contenido->titulo!!}

</div>

</div>

</div>



<div class="container">

@foreach($items as $item)

@if($cont===0)

<div class="row">

<div class="col l5 m5 s12 left">

  <div class="fs15 editorRico gris6"> {!!$item->subtitulo!!}</div>

  <div class="fs32 editorRico ctitulo2"> {!!$item->titulo!!}</div>

  <div class="fs14 editorRico"> {!!$item->texto!!}</div>

</div>

<div class="col l1 hide-on-small-only">

  @if($item->imagen != null)

  <img class="responsive-img" src="{{asset('imagenes/tecnoitem/'.$item->imagen)}}" style="max-height: 568px;">

  @else

  <img class="responsive-img" src="{{asset('imagenes/tecnoitem/image.jpg')}}" style="max-height: 568px;">

  @endif

  <div align="center">  

  <div class="vLineaGris" align="center"></div>

  </div>

</div>  

<div class="col l5 m5 s12 right">

<div align="center">

    @foreach($galerias as $galeria)

    @if($item->id == $galeria->id_tecno_items)

    <div class="fs24 ctitulo2"> {!!$item->titulo!!}</div>

    <div class="center-align img-responsive" id="imagen-grande" style="margin: 0 0 0 0; padding: 0; " align="center">

        <img id="imgDisp{{$item->id}}" src="{{asset('imagenes/tecnoimg/'.$galeria->imagen)}}" style="height: 250px; width: 250px;">           

    </div>

    @break

    @endif

    @endforeach

    <div class="carousel" style="height: 100px!important;">

    @foreach($galerias as $galeria)

    @if($item->id == $galeria->id_tecno_items)

    <img class="carousel-item" id="imgName{{$item->id}}" onclick="changeImage{{$item->id}}('{{asset('imagenes/tecnoimg/'.$galeria->imagen)}}')" src="{{asset('imagenes/tecnoimg/'.$galeria->imagen)}}" style="height: 100px; margin: 0px;" {{-- onClick="javascript: verImagenEnGrande('{{asset('imagenes/tecnoimg/'.$galeria->imagen)}}');" --}}>

    @endif

    @endforeach    

    </div>

</div>

</div>  

</div>

<?php

$cont++;

?>

@else



<div class="row">

<div class="col l5 m5 s12 right">

  <div class="fs15 editorRico gris6"> {!!$item->subtitulo!!}</div>

  <div class="fs32 editorRico ctitulo2"> {!!$item->titulo!!}</div>

  <div class="fs14 editorRico"> {!!$item->texto!!}</div>

</div>



<div class="col l5 m5 s12 left">

<div align="center">

    @foreach($galerias as $galeria)

    @if($item->id == $galeria->id_tecno_items)

    <div class="fs24 ctitulo2"> {!!$item->titulo!!}</div>

    <div class="center-align img-responsive" id="imagen-grande" style="margin: 0 0 0 0; padding: 0; " align="center">

        <img id="imgDisp{{$item->id}}" src="{{asset('imagenes/tecnoimg/'.$galeria->imagen)}}" style="height: 250px; width: 250px;">           

    </div>

    @break

    @endif

    @endforeach

    <div class="carousel" style="height: 100px!important;">

    @foreach($galerias as $galeria)

    @if($item->id == $galeria->id_tecno_items)

    <img class="carousel-item" id="imgName{{$item->id}}" onclick="changeImage{{$item->id}}('{{asset('imagenes/tecnoimg/'.$galeria->imagen)}}')" src="{{asset('imagenes/tecnoimg/'.$galeria->imagen)}}" style="height: 100px; margin: 0px;" {{-- onClick="javascript: verImagenEnGrande('{{asset('imagenes/tecnoimg/'.$galeria->imagen)}}');" --}}>

    @endif

    @endforeach    

    </div>

</div>

</div> 

<div class="col l1 hide-on-small-only">

  @if($item->imagen != null)

  <img class="responsive-img" src="{{asset('imagenes/tecnoitem/'.$item->imagen)}}" style="max-height: 568px;">

  @else

  <img class="responsive-img" src="{{asset('imagenes/tecnoitem/image.jpg')}}" style="max-height: 568px;">

  @endif

  <div align="center">  

  <div class="vLineaGris" align="center"></div>

  </div>

</div>   

</div>



<?php

$cont=0;

?>

@endif

@endforeach

</div>





</body>

</html>



<!-- Compiled and minified JavaScript -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>



    <script type="text/javascript" src="{{ asset('js/jquery/jquery.js')}}"></script>

    <script type="text/javascript" src="{{ asset('js/jquery/jquery.min.js')}}"></script>

    <script type="text/javascript" src="{{ asset('js/materialize/materialize.min.js') }}"></script>



<script>

  $(document).ready(function(){

  $('.slider').slider();

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

@foreach($items as $item)

@include('page.template.footer')

<script type="text/javascript">

function changeImage{{$item->id}}(imgName{{$item->id}})

{

  image = document.getElementById('imgDisp{{$item->id}}');

  image.src = imgName{{$item->id}};

}

</script>

@endforeach