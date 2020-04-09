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

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  

  

<!-- Compiled and minified CSS -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

</head>

<body style="font-family: 'Source Sans Pro', sans-serif;">

@include('page.template.header')

<style type="text/css">
.slider .indicators .indicator-item {
    position: relative;
    background-color: rgba(25,25,25, 0.6)!important;
    z-index: 7;
    bottom: 50px;
}
</style>

<div class="container" style="width: 83%; padding: 0px 0 70px 0; margin-top: 60px;">

<div style="padding: 15px; margin-bottom: 10px;">
<a class="fs18 fc5 fw5 mayus" href="{{route('familia')}}">PRODUCTOS</a>&nbsp;|&nbsp;
@foreach($all1_categorias as $all1_categoria)
@foreach($all2_categorias as $all2_categoria)
@if($all1_categoria->id == $all2_categoria->id_padre)
@if($all2_categoria->id == $productoIs->id_categoria)

@if(isset($all1_categoria))
<a class="fs18 fc5 fw5 mayus" href="{{route('categoria',$all1_categoria->id)}}">{{$all1_categoria->titulo}}</a>&nbsp;|&nbsp;
@endif

@if(isset($all2_categoria))
<a class="fs18 fc5 fw5 mayus" href="{{route('categoria',$all2_categoria->id)}}">{{$all2_categoria->titulo}}</a>&nbsp;|&nbsp;
@endif

@if(isset($productoIs))
<a class="fs18 fc5 fw5 mayus" href="{{route('producto',$productoIs->id)}}">{{$productoIs->titulo}}</a>
@endif

@endif
@endif
@endforeach
@endforeach
</div>

<div class="row">
<div class="col l3 m12">

<style type="text/css">
.collapsible{border:none!important;}
.collapsible-header{padding: 5px!important}  
.collapsible-body{padding: 5px!important}  
</style>

<ul class="collapsible z-depth-0" >

<style type="text/css">
@media all and (min-width: 993px) {

  .imagenMismoTamano{
  height: 28vh;  
  }
}
</style>

   @foreach($all1_categorias as $all1_categoria)

   {{-- @if(!$all1_category == '') @if($all1_categoria->id == $all1_category || $all1_categoria->id == $all2_category || $all1_categoria->id == $all1_category ) active @endif @endif --}}
   @if($variable == $all1_categoria->id)
   <li class="active">
   @php $interruptor = '1' @endphp
   @else

   <li class=""> 
   @endif
   @foreach($all2_categorias as $all2_categoria) @if($all1_categoria->id == $all2_categoria->id_padre) @if($variable == $all2_categoria->id) <li class="active"> @endif @endif @endforeach
   @if($all1_categoria->id_padre == '0')
   
   <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #ddd; padding-bottom: 2px;">
   <a href="{{route('categoria',$all1_categoria)}}"      class="collapsible-header {{-- waves-effect waves-admin --}} fc2 fs18 fw6" style="text-transform: uppercase; border-bottom: 0;">{{$all1_categoria->titulo}}</a>
   <a class="collapsible-header {{-- waves-effect waves-admin --}} fc2 fs18 fw6" style="border-bottom: 0;"><i class="material-icons">arrow_drop_down</i></a>
   
   </div>
   <div class="collapsible-body">

      <ul class="collapsible z-depth-0" style="margin:0 0 5px 0;padding: 0;">
      @foreach($all2_categorias as $all2_categoria)
      @if($all1_categoria->id == $all2_categoria->id_padre)
      @if($variable == $all2_categoria->id)
      <li class="active">
      @else
      <li class="">
      @endif
      @foreach($all3_categorias as $all3_categoria) @if($all2_categoria->id == $all3_categoria->id_padre) @if($variable == $all3_categoria->id) <li class="active"> @endif @endif @endforeach
      <a        class="collapsible-header waves-effect waves-admin fc2 fs18 fw6" style="color:#565656;font-weight: 600; font-size: 16px; letter-spacing: 0.3px;display: flex; justify-content: space-between; align-items: center; @if($variable == $all2_categoria->id) color: #e87732; @endif">&nbsp;&nbsp;{{$all2_categoria->titulo}} </a>
      <div class="collapsible-body">

         <ul class="collapsible z-depth-0" style="margin:0 0 5px 0;padding: 0;">
         @foreach($all3_categorias as $all3_categoria)
         @if($all2_categoria->id == $all3_categoria->id_padre)
         <li class="">
         <a         class="collapsible-header waves-effect waves-admin fc2 fs18 fw6" style="color: #a9a9a9; font-size: 16px; letter-spacing: 0.3px">&nbsp;&nbsp;&nbsp;&nbsp;{{$all3_categoria->titulo}}</a>
         <div class="collapsible-body">

            <ul class="collapsible z-depth-0" style="margin:0 0 5px 0;padding: 0;">
            @foreach($all4_categorias as $all4_categoria)
            @if($all3_categoria->id == $all4_categoria->id_padre)
            <li class="">
            <a         class="collapsible-header waves-effect waves-admin fc2 fs18 fw6" style="color: #9a9999; font-size: 15px; letter-spacing: 0.4px; font-weight: 400;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$all4_categoria->titulo}}</a>
            <div class="collapsible-body">

               <ul class="collapsible z-depth-0" style="margin:0 0 5px 0;padding: 0;">
               @foreach($all5_categorias as $all5_categoria)
               @if($all4_categoria->id == $all5_categoria->id_padre)
               <li class="">
               <a          class="collapsible-header waves-effect waves-admin fc2 fs18 fw6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$all5_categoria->titulo}}</a>
               <div class="collapsible-body">
                     @foreach($all_productos as $all5_producto)
                     @if($all5_producto->id_categoria == $all5_categoria->id)
                     <div>
                     <a class="fc4 fs18 fw5" href="{{route('producto',$all5_producto->id)}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$all5_producto->titulo}}</a>
                     </div>
                     @endif
                     @endforeach  
               </div>
               @endif
               @endforeach
               </li>
               </ul>

               @foreach($all_productos as $all4_producto)
               @if($all4_producto->id_categoria == $all4_categoria->id)
               <div>
               <a class="fc4 fs18 fw5" href="{{route('producto',$all4_producto->id)}}" style="color: #9a9999; font-size: 15px; letter-spacing: 0.4px; line-height:26px;font-weight: 400;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$all4_producto->titulo}}</a>
               </div>
               @endif
               @endforeach 

            </div>
            @endif
            @endforeach
            </li>
            </ul>      

         @foreach($all_productos as $all3_producto)
         @if($all3_producto->id_categoria == $all3_categoria->id)
         <div>
         <a class="fc4 fs18 fw5" href="{{route('producto',$all3_producto->id)}}" style="color: #9a9999; font-size: 15px; letter-spacing: 0.4px; line-height:26px;font-weight: 400;">&nbsp;&nbsp;&nbsp;&nbsp;{{$all3_producto->titulo}}</a>
         </div>
         @endif
         @endforeach
      
         </div>
         @endif
         @endforeach
         </li>
         </ul>   

      @foreach($all_productos as $all2_producto)
      @if($all2_producto->id_categoria == $all2_categoria->id)
      <div>
      <a class="fc4 fs18 fw5" href="{{route('producto',$all2_producto->id)}}" style="color: #9a9999; font-size: 15px; letter-spacing: 0.4px; line-height:26px;font-weight: 400; @if($all2_producto->id == $productoIs->id) color: #e87732; @endif ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$all2_producto->titulo}}</a>
      </div>
      @endif
      @endforeach

      </div>
      @endif
      @endforeach
      </li>
      </ul>         

   @foreach($all_productos as $all1_producto)
   @if($all1_producto->id_categoria == $all1_categoria->id)
   <div>
   <a class="fc4 fs18 fw5" href="{{route('producto',$all1_producto->id)}}" style="color: #9a9999; font-size: 15px; letter-spacing: 0.4px; line-height:26px;font-weight: 400;">{{$all1_producto->titulo}}</a>
   </div>
   @endif
   @endforeach

   </div>
   @endif
   @endforeach
   </li>
</ul>

</div>
<div class="col l9 m12">
<div class="row">
<div class="col l6 s12">

  <div class="slider">

    <ul class="slides responsive-img">

    @foreach($galerias as $galeria)

      <li style="border: 1px solid gray;">

      <img class="responsive-img" src="{{ asset('imagenes/galerias/'.$galeria->imagen) }}" style="filter:brightness(1);">                   

      </li>

    @endforeach

    </ul>

  </div>

</div>

<div class="col l6 s12">

  <div class="container" style="width: 95%">

  <span class="fs39 fw6 fc5">{{$productoIs->titulo}} </span>

  <div class="fc4 fw6"><span class="fc2 fs17">CÓDIGO: </span>{{$productoIs->codigo}}</div>

  <div class="fc4 fw6"><span class="fc2 fs17">MARCA: </span>@foreach($marcas as $marca) @if($marca->id == $productoIs->id_marca) {{$marca->titulo}} @endif @endforeach</div>

  <div style="color: #393185;">

    <h5 style="margin-top: 0px; font-weight: 600;  line-height: 35px;">{{($productoIs->subtitulo)}}</h5>

  </div>

  <div style="color: #393185;">

    <h6 style="font-weight: 600;">{{($productoIs->breve)}}</h6>

  </div>

  <div class="fs17 fw4 gris10 editorRico" style="padding-bottom: 20px;">{!!($productoIs->texto)!!}</div>


  <div class="fc4 fw6"><span class="fc2 fs17">COLORES: </span></div>

    @foreach($productoIs->colores as $color)

    <div class="tooltip" style="border: 1px solid black; height: 30px; width: 30px; background: {{$color->codigo}}; margin-right: 0px; display: inline-flex;"><span class="tooltiptext" style="margin-top: 40px;">{{$color->titulo}}</span></div>

    @endforeach

    <div class="fs17">Consultar por otros colores</div>

  </div>

  <div>

    <a href="#modal1" class="btn btn-ficha z-depth-0 modal-trigger" style="background: var(--color2); color: white;  font-weight: 600; width: 181px; height: 38px; padding: 0px; border-radius: 4px; margin-top: 10px;">VER TALLES</a><br>

@if($productoIs->ficha!=null)

    <a href="{{asset('imagenes/productos/'.$productoIs->ficha)}}" target="_blank" class="btn btn-ficha z-depth-0" style="background: var(--color2); color: white;  font-weight: 600; width: 181px; height: 38px; padding: 0px; border-radius: 4px; margin-top: 10px;">FICHA PDF</a>

@endif

  </div>

  </div>
  </div>
</div>

</div>
</div>







@include('page.template.carousel')





<div id="modal1" class="modal">

  <div class="modal-content">

    <h4>Tallas</h4>

    <p>{{$productoIs->titulo}}</p>

    @foreach($productoIs->tallas as $talla)

      <div>{{$talla->titulo}}</div>

    @endforeach

  </div>

  <div class="modal-footer">

    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Salir X</a>

  </div>

</div>

{{-- Destacados --}}

@include('page.template.footer')



</body>

</html>



<!-- Compiled and minified JavaScript -->

   

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

  $(document).ready(function(){

    $('select').formSelect();

  });
    $(document).ready(function(){
      $('.collapsible').collapsible();
    });
  $(document).ready(function(){
    $('.modal').modal();
  });    
</script> 

