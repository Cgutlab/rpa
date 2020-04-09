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
  

  

<!-- Compiled and minified CSS -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">



  <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">



</head>

<body style="font-family: 'Source Sans Pro', sans-serif;">

@include('page.template.header')


<style type="text/css">
  .hoovertexto{
    color: var(--color4)!important;
  }
  .hoovertexto:hover{
    color: var(--color2)!important;
  }
</style>

<div class="container" style="width: 80%;">

<div class="row" style="margin-top: 80px;">
<div class="col l4">
    <div class="row">
      <div class="fs20 col l10 m12 fw7 fc2">{{$titulo1->texto}}</div>
    </div>
    <div class="row">
      <div class="col s1"> <i class="material-icons fc5">location_on</i></div>
      <div class="col s10 fc2 fw6 "><a class="hoovertexto" href="https://www.google.com/maps/search/:{{$direccion1->texto}}" style="color: gray;" target="_blank">{{$direccion1->texto}}</a></div>
    </div>
    <div class="row">
      <div class="col s1"> <i class="material-icons fc5">phone</i></div>
      <div class="col s10 fc2 fw6 "><a class="hoovertexto" href="tel:{{$telefono1->texto}}" style="color: gray;">{{$telefono1->texto}}</a></div>
    </div>
    <div class="row">
      <div class="col s1"> <i class="material-icons fc5">email</i></div>
      <div class="col s10 fc2 fw6 "><a class="hoovertexto" href="mailto:{{$correo1->texto}}" style="color: gray;">{{$correo1->texto}}</a></div>
    </div>  
</div>

<div class="col l4">
    <div class="row">
      <div class="fs20 col l10 m12 fw7 fc2">{{$titulo2->texto}}</div>
    </div>
    <div class="row">
      <div class="col s1"> <i class="material-icons fc5">location_on</i></div>
      <div class="col s10 fc2 fw6 "><a class="hoovertexto" href="https://www.google.com/maps/search/:{{$direccion2->texto}}" style="color: gray;" target="_blank">{{$direccion2->texto}}</a></div>
    </div>
    <div class="row">
      <div class="col s1"> <i class="material-icons fc5">phone</i></div>
      <div class="col s10 fc2 fw6 "><a class="hoovertexto" href="tel:{{$telefono2->texto}}" style="color: gray;">{{$telefono2->texto}}</a></div>
    </div>
    <div class="row">
      <div class="col s1"> <i class="material-icons fc5">email</i></div>
      <div class="col s10 fc2 fw6 "><a class="hoovertexto" href="mailto:{{$correo2->texto}}" style="color: gray;">{{$correo2->texto}}</a></div>
    </div>  
</div>

<div class="col l4">
    <div class="row">
      <div class="fs20 col l10 m12 fw7 fc2">{{$titulo3->texto}}</div>
    </div>
    <div class="row">
      <div class="col s1"> <i class="material-icons fc5">location_on</i></div>
      <div class="col s10 fc2 fw6 "><a class="hoovertexto" href="https://www.google.com/maps/search/:{{$direccion3->texto}}" style="color: gray;" target="_blank">{{$direccion3->texto}}</a></div>
    </div>
    <div class="row">
      <div class="col s1"> <i class="material-icons fc5">phone</i></div>
      <div class="col s10 fc2 fw6 "><a class="hoovertexto" href="tel:{{$telefono3->texto}}" style="color: gray;">{{$telefono3->texto}}</a></div>
    </div>
    <div class="row">
      <div class="col s1 "> <i class="material-icons fc5">email</i></div>
      <div class="col s10 fc2 fw6 "><a class="hoovertexto" href="mailto:{{$correo3->texto}}" style="color: gray;">{{$correo3->texto}}</a></div>
    </div> 
  </div>
</div>


<div class="row">
<div class="col l4 m12">
<div align="center">
	<img src="{{asset('imagenes/imgcontact/'.$imagen1->imagen)}}" class="responsive-img">
</div>
</div>
<div class="col l4 m12">
<div align="center">
	<img src="{{asset('imagenes/imgcontact/'.$imagen2->imagen)}}" class="responsive-img">
</div>
</div>
<div class="col l4 m12">
<div align="center">
	<img src="{{asset('imagenes/imgcontact/'.$imagen3->imagen)}}" class="responsive-img">
</div>
</div>
</div>



<div class="row">
<div class="col l4 m12">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3286.7877972014157!2d-58.51227768469585!3d-34.533603880477656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb0d540a153ef%3A0x516c50a29547406b!2sAv.+Bartolom%C3%A9+Mitre+1732%2C+B1604AKX+Vicente+L%C3%B3pez%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1536256340279" width="100%" style="border:1px solid #EEEEEE; border-top: none;" height="359" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<div class="col l4 m12">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3289.959116500685!2d-58.618341084697924!3d-34.45318568049864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bca4f1973611d7%3A0x2668940d185172cd!2sAlfredo+Palacios+331%2C+Los+Troncos+del+Talar%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1536256394994" width="100%" style="border:1px solid #EEEEEE; border-top: none;" height="359" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<div class="col l4 m12">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3101.313920590489!2d-61.28827108457493!3d-38.98533127955718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x958d528402adbac7%3A0x4422aaa26143e030!2sSan+Lorenzo+%26+Av.+Int.+Majluf%2C+Monte+Hermoso%2C+Buenos+Aires!5e0!3m2!1ses!2sar!4v1536256463852" width="100%" style="border:1px solid #EEEEEE; border-top: none;" height="359" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
</div>


<div class="col l12">
{!!Form::open(['route'=>'contacto.enviar', 'method'=>'POST'])!!}
<div class="row">
	<div class="input-field col m6 s12">
	{!!Form::text('nombre',null,['class'=>'validate', 'placeholder'=>'Nombre', 'required'])!!}
	<label for="nombre"></label>
	</div>
	<div class="input-field col m6 s12">
	{!!Form::text('telefono',null,['class'=>'validate', 'placeholder'=>'Teléfono', 'required'])!!}
	<label for="telefono"></label>
	</div>
</div>
<div class="row">
	<div class="input-field col m6 s12">
	{!!Form::text('empresa',null,['class'=>'validate', 'placeholder'=>'Empresa', 'required'])!!}
	<label for="empresa"></label>
	</div>
	<div class="input-field col m6 s12">
	{!!Form::email('email',null,['class'=>'validate', 'placeholder'=>'E-mail', 'required'])!!}
	<label for="email"></label>
	</div>
</div>
<div class="row">
	<div class="input-field col m6 s12" style="margin-top: 47px;">
	<label for="mensaje"></label>
	{!!Form::textarea('mensaje', null, ['class'=>'materialize-textarea', 'placeholder'=>'Mensaje', 'required'])!!}
	</div>
	<div class="input-field col m6 s12" style="padding-top:0px; margin-bottom: 20px;">	
	<div class="g-recaptcha" data-sitekey="6Ldco1gUAAAAAKKt7QO7vSn4tkahcQuMBXAHTeRj"></div>
	<div class="fs15 gris15" style="font-family: 'Source Sans Pro';">Acepto los términos y condiciones de privacidad</div>
	</div> 
</div>
<div class="row" style="padding-bottom: 50px;">
	<div align="center">                      
	<div class="col m12">
	<button class="btn waves-effect waves-light z-depth-0" type="submit" name="action" style="background-color: var(--color2); padding: 0px 50px 5px 50px; color: white;">Enviar
	</button>
	</div>
	</div>
</div>
</div>
{!!Form::close()!!}	
</div>


@include('page.template.footer')



<script src='https://www.google.com/recaptcha/api.js?hl=es'></script>  
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