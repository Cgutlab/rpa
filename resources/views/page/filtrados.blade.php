<!DOCTYPE html>

<html lang="es">

<head>

	<meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">

    <meta name="author" content="">

	<title>::RPA::</title>

    <!-- Bootstrap Core CSS -->

  	<link href="{{ asset('css/materialize/materialize.min.css') }}" rel="stylesheet">

	<link href="{{ asset('css/estilos.css') }}" rel="stylesheet">



    <!--Import Google Icon Font-->

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Bitter:400,700" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  

  

<!-- Compiled and minified CSS -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

  <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

</head>

<body style="font-family: 'Source Sans Pro', sans-serif;">

@include('page.template.header')

<main class="familia">

{{-- @include('page.template.buscador') --}}

@if($buscar != 0)

	<div class="container" style="width: 83%; padding: 0px 0 70px 0;">

			<div class="fs47 fc4" style="padding: 10px;">

				@if($buscar == 1) Productos @endif

				@if($buscar == 2) Marcas @endif

				@if($buscar == 3) Productos y Marcas @endif

			</div>

		<div class="row">

		@forelse($consultas as $consulta)

		<div class="col s12 m4 l4">

			<div class="card z-depth-0">

				<div class="card-image">

					<a href="{{ route('producto',$consulta->id) }}" class="gris-oscuro">

					<div class="efecto">

						<span class="central"><i class="material-icons">add</i></span>

					</div>

					@foreach($galerias as $galeria)

						@if($galeria->id_producto == $consulta->id)							        

							<img src="{{asset('imagenes/galerias/'.$galeria->imagen)}}" style="border: 1px solid #DDD; width: 100%; height: 100%; border-top: 5px solid var(--color2);">

							@break

						@endif

					@endforeach

					</a>

				</div>

			    <div class="card-content cero center-align fw6" style="background: var(--color2); height: 80px; padding: 6px 12px; display: flex; justify-content: center; align-items: center;">

			      <div class="fc6 fw6 fs18">

				      @if($active == 'productos')

				      {!!($consulta->titulo) !!}

				      @elseif($active == 'marcas')

				      @foreach($marcas as $marca)

				      {!!($consulta->titulo) !!}

				      <div>{!!($marca->titulo) !!}</div>

				      @break

				      @endforeach

				      @endif

				      </div>

			    </div>

			</div>

		</div>

		@empty

		<div class="gris-claro center-align centrado fs22">

			<i class="material-icons verde" style="margin-right: 10px;">warning</i>

			No se encontraron productos

		</div>

		@endforelse

		</div>

	</div>

@else

<div class="gris-claro center-align centrado fs22" style="margin: 120px 0;">

	<i class="material-icons verde" style="margin-right: 10px;">warning</i>

	No se encontraron productos

</div>

@endif

</main>

@include('page.template.footer')



<script type="text/javascript" src="{{ asset('js/jquery/jquery.js')}}"></script>

<script type="text/javascript" src="{{ asset('js/jquery/jquery.min.js')}}"></script>

<script type="text/javascript" src="{{ asset('js/materialize/materialize.min.js') }}"></script>

<script>

$(document).ready(function(){

$('select').formSelect();

});
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

</body>

</html>

<script type="text/javascript">

  $(document).ready(function(){

    $('.sidenav').sidenav();

  });

</script>