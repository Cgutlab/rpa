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

<body style="font-family: 'Source Sans Pro', sans-serif;">

@include('page.template.header')

@include('page.template.buscador')

<main class="buscar mb70" style="margin: 240px 0;">



	



</main>

@include('page.template.carousel')

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

    $('select').formSelect();

  });


</script>