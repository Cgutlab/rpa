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

<body style="font-family: 'Source Sans Pro', sans-serif!important;">

<div style="font-family: 'Source Sans Pro', sans-serif;">

@include('page.template.header')

</div>

  <div class="container" style="width: 83%; padding: 0px 0 70px 0; margin-top: 60px;">

      <div class="fs47 fc4" style="padding: 10px; margin-bottom: 45px;">
      Novedades
      {{-- <div style="width: 60px; height: 3px; background: #EE7C02; margin-left: 2px;"></div> --}}
      </div>
  



<div class="row" style="margin-top: 0px;">

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

  <div class="col l9 m12 s12">

    <ul class="flex-container-nov">

    @foreach($categorys as $category)

    @foreach($novedades as $novedad)

    @if($category->id == $novedad->id_categorias_novedads)

    

    <li class="flex-item-nov" style="border: none; padding-bottom: 20px;">

      <div style="display: flex; justify-content: center; align-items: center;">
      <a href="{{route('novedad', $novedad->id)}}">
      <img src="{{asset('imagenes/productonovedad/'.$novedad->imagen)}}" class="responsive-img">
      </a>
      </div>                  

      <div>

        <div>

          <div style="padding-bottom: 3px;border-bottom: 1px solid #DDDDDD;">

            <div style="padding-left: 8px; font-family: 'Source Sans Pro', sans-serif; font-size: 12px; color: #434141; font-weight: 400;">

              <span class="mayus">{{($category->titulo)}}</span>

            </div>

          </div>

          <div style="padding: 5px;">

          <div class="fc2" style="padding-top:5px; font-family: 'Source Sans Pro', sans-serif; font-size: 20px; font-weight: 700; padding-top: 10px;">

            {{$novedad->titulo}}

          </div>

          <div style="padding-top:5px; font-family: 'Source Sans Pro', sans-serif; font-size: 12px; color: #858585; font-weight: 500;">

            {{$novedad->fecha}}

          </div>

          <div style="padding-top:0px; font-family: 'Source Sans Pro', sans-serif; font-size: 17px; color: #666666; font-weight: 400;">

            {!!$novedad->extracto!!}

          </div>

          <div style="padding-top:0px; font-family: 'Source Sans Pro', sans-serif; font-size: 18px; color: #009FE1; font-weight: 400; ">

            <a href="{{route('novedad', $novedad->id)}}" class="fc2 fs14 fw6">Leer m&aacutes »</a>

          </div>

          </div>

        </div>

      </div>

    </li>

    @endif

    @endforeach

    @endforeach

    </ul>

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

