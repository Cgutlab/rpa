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

	<link rel="icon" href="{{ asset('imagenes/logos/logos__favicon.png') }}" type="image/x-icon">

  <link rel="shortcut icon" href="{{ asset('imagenes/logos/logos__favicon.png') }}" type="image/x-icon">

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

</head>

<style type="text/css"></style>

<body style="font-family: 'Source Sans Pro', sans-serif!important;">

@include('page.template.header')

  <div class="container" style="width: 83%; padding: 0px 0 70px 0; margin-top: 60px;">


<div class="row">

  <div class="col l12">

@foreach($categorias as $categoria)

@if($categoria->id == $novedadI->id_categorias_novedads)

      <div class="fs16 mayus fw5" style="margin-top: 15px; font-family: 'Source Sans Pro', sans-serif; color:#3F3F3F; color: #777777;">

        <a href="{{route('novedades')}}" style=" color: #777777;">        

        {{('Novedades')}}

        </a> 

        &nbsp;|&nbsp;

          <a href="{{route('filtrados', $categoria->id)}}" style=" color: #777777;">{{($categoria->titulo)}}</a>

        @if($novedadI->titulo != '')

        &nbsp;|&nbsp;

        <span>

        {{($novedadI->titulo)}}

        </span>

        @endif

    </div>

  </div>

</div>



<div class="row" style=" margin-top: 0px;">

  <div class="right col l3 m12 s12">

    <div class="hide-on-med-and-down">

      <nav class="z-depth-0" style="background-color: white; border: 1px solid #DDDDDD">

        <div class="nav-wrapper">

          {!!Form::open(['route'=>'buscar_novedad', 'method'=>'get'])!!}

            <div style="padding-left: 10px; padding-right: 10px;">

              <div>{!!Form::text('buscar',null,['placeholder'=>'Buscar...', 'required','style'=>'border-bottom:none;'])!!}</div>            

              <div class="hide">{!!Form::submit('crear', ['class'=>'hidden'])!!}</div>

              <!-- <i class="material-icons">close</i> -->

            </div>

          {!!Form::close()!!} 

        </div>

      </nav>

    </div>

    <div style="padding-top: 0px; padding-bottom: 0px;">

      <div style="background: #EE7C02;">

        <h5 class="fc1" style="padding-left: 15px; font-weight: 500; font-size: 20px; line-height: 2;">CATEGOR&IacuteAS</h5>

      </div>

      <div style="">
        <a href="{{route('novedades')}}" style="color: #93989E; font-family: 'Source Sans Pro', sans-serif; margin: 0; padding: 0;">
        <div style="font-size: 17px; padding: 5px 0; border-bottom: 1px solid #EE7C02;">
         <span class="mayus" style="padding-left: 15px; ">Todas</span>
        </div>
        </a> 
        @foreach($categorias as $categoria)

        <a href="{{route('filtrados', $categoria->id)}}" style="color: #93989E; font-family: 'Source Sans Pro', sans-serif;">
        <div style="font-size: 17px; padding: 5px 0; border-bottom: 1px solid #EE7C02;">
         <span class="mayus" style="padding-left: 15px; ">{{($categoria->titulo)}}       </span>
        </div>
        </a>

        @endforeach

      </div>

    </div>

  </div>

  <div class="col l9">

      <div class="container left" style="width: 95%;">

          

                <div>

{{-- 
  <div class="slider">
    <ul class="slides">
    @foreach($galerias as $galeria)
      <li>
        <img src="{{ asset('imagenes/galerianovedad/'.$galeria->imagen) }}">
      </li>
    @endforeach
    </ul>
  </div>
 --}}
        <img src="{{ asset('imagenes/productonovedad/'.$novedadI->imagen) }}" style="max-width: 100%;">

          <div style="padding-left: 8px; font-family: 'Source Sans Pro', sans-serif; font-size: 14px;  color: #777777; ">

              @if($categoria->titulo != '')

                <span class="mayus">{{($categoria->titulo)}}</span>

              @endif

            @endif

            @endforeach

            </div>        
          <div style="padding-top: 20px;">

            

            <div class=" fs24 fw5" style="color: #E87732;">

              {!!$novedadI->titulo!!}

            </div>

            <div class="editorRico  fs12 fw5" style="color: #858585;">

              {{$novedadI->fecha}}

            </div>

            <div class="editorRico  fs16 fw4 yp35" style="color:#666666;">

              {!!$novedadI->texto!!}

            </div>

            <div style="padding-top: 25px; padding-left: 9px;">

            @if($novedadI->ficha != '')

              <a href="{{ asset('imagenes/productonovedad/'.$novedadI->ficha) }}" class="btn btn-ficha" target="_blank" style="background: #D00E24;

padding-left: 45px; padding-right: 45px; font-weight: 600;">DESCARGAR PDF</a>

            @endif

            </div>

          </div>

        </div>

      </div>

    </div>



  </div>  

</div>









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
  $(document).ready(function(){

    $('.sidenav').sidenav();

  });

  $(document).ready(function(){
    $('.slider').slider();
  });
</script>

