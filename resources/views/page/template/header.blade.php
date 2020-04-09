<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
<header>

<style type="text/css">
	*{
		font-family: 'Source Sans Pro', sans-serif;
	}
</style>

<div class="nav z-depth-0 row" style="margin-bottom: 0; padding: 0;">
<div class="container cero" style="width: 79%;">

	<div class="left center-align fs18">
		<ul class="cero" style="display: flex; float: left; justify-content: center; align-items: center; height: 40px;">
		@foreach($headerRedes as $headerRed)
			<li><a href="{{$headerRed->ruta}}" class="fs24 hoover">{!!$headerRed->code!!}</a></li>
			
		@endforeach
			<li><a href="{{route('contacto')}}" class="fs24 hoover"><i class="fas fa-map-marker-alt"></i>&nbsp;Sucursales</a></li>
		</ul>
	</div>
	<div class="right center-align fs18 hide-on-med-and-down">
		<ul class="cero" style="display: flex; float: left; justify-content: center; align-items: center; height: 40px;">
			<li><a href="tel:{{$telefono1->texto}}" class="fs24 hoover">{{$telefono1->texto}}</a></li>		
		</ul>
		<ul class="cero" style="display: flex; float: left; justify-content: center; align-items: center; height: 40px;">
			<div style="border-right: 2px solid #D2D2D2; height: 25px;"></div>		
		</ul>		
		<ul class="cero" style="display: flex; float: left; justify-content: center; align-items: center; height: 40px;">
			<li><a href="mailto:{{$correo1->texto}}" class="fs24 hoover">{{$correo1->texto}}</a></li>		
		</ul>		
	</div>
</div>
</div>

<div style="background: #FFFFFF; margin-bottom: 0;">
<div class="container" style="width: 79%;">
<div class="row" style="margin-bottom: 0;">
<div class="col l3">

<div class="left center-align fs18">
<span style="margin-top: 40px; display: flex; justify-content: center; align-items: center;">
<a href="{{route('index')}}">
	<img class="hide-on-small-only" src="{{ asset('imagenes/logos/'. $logoh->imagen) }}">
</a>
</span>
<span style="margin-bottom: 40px;  display: flex; justify-content: center; align-items: center;">
<a href="{{route('index')}}">
	<img class="hide-on-med-and-up responsive-img" src="{{ asset('imagenes/logos/'. $logoh->imagen) }}" style="max-width: 150px;">
</a>
</span>
</div>
	
</div>
<div class="col l9">

<div class="row" style="margin-bottom: 0;">
<div class="right center-align fs18 hide-on-med-and-down">
<ul style="display: flex; float: left; justify-content: center; align-items: center;">
	<li style="display: flex; float: left; justify-content: center; align-items: center;">
	<div class="row" >
		<div class="col l2 m12" >
		<img class="responsive-img" src="{{ asset('imagenes/new/factory.svg') }}" style="max-width: 35px;"></div>		
		<div class="col l10" ><div class="fw7 fc4" style="line-height: 15px!important; display:flex;justify-content: left!important; align-items: left; margin-left: 5px;">FABRICA DE </div>
			<div style="display:flex;justify-content: left!important; align-items: left;margin-left: 5px;" class="fw7 fc4 ">ROPA DE TRABAJO</div></div>			
	</div>
	</li>
</ul>
<ul style="display: flex; float: left; justify-content: center; align-items: center;">
	<li style="display: flex; float: left; justify-content: center; align-items: center;">
	<div class="row" >
		<div class="col l3 m12" >
		<img class="responsive-img" src="{{ asset('imagenes/new/shirt.svg') }}" style="max-width: 35px;">
		</div>		
		<div class="col l9">
			<div class="fw7 fc4" style="line-height: 15px!important; display:flex;justify-content: left!important; align-items: left;">ESTAMPERIA</div>
			<div style="display:flex;justify-content: left!important; align-items: left;" class="fw7 fc4">PROPIA</div>
		</div>			
	</div>
	</li>
</ul>		
<ul style="display: flex; float: left; justify-content: center; align-items: center;">
	<li style="display: flex; float: left; justify-content: center; align-items: center;">
	<div class="row" >
		<div class="col l3 m12" >
		<img class="responsive-img" src="{{ asset('imagenes/new/truck.svg') }}" style="margin-left: 5px;max-width: 35px;">
		</div>		
		<div class="col l9">
			<div class="fw7 fc4" style="line-height: 15px!important; display:flex;justify-content: left!important; align-items: left;">ENVIOS A</div>
			<div style="display:flex;justify-content: left!important; align-items: left;" class="fw7 fc4">TODO EL PAIS</div>
		</div>			
	</div>
	</li>
</ul>		
</div>
</div>
<a href="#" data-target="mobile-demo" class="hide-on-large-only sidenav-trigger right" style="margin-top:50px;display: flex; justify-content: center; align-items: center; padding: 0 10px 0 10px; border: 1px solid #DDDDDD"><i class="material-icons">menu</i></a>
<div class="row" style="margin-top: 0;">
<div class="fs18 hide-on-med-and-down">

<style type="text/css">
.element::-webkit-input-placeholder {
    color: black;
    display: flex;
    justify-content: center;
    align-items: center;
}
.element:hover{	box-shadow: 0 1px 0 0 #E87732!important;}
.element:focus{	box-shadow: 0 1px 0 0 #E87732!important;}

.hoover{color: white;}
.hoover:hover{color: #E87732;}
.haaver{color: #E87732;}
</style>

<div class="center-align" style="display: flex; float: right; display: flex; justify-content: center; align-items: center;margin:0; padding: 0; margin-right: 100px;">
  <div class="row" style="margin:0; padding: 0;">
  	{!!Form::open(['route'=>'buscador', 'method'=>'POST', 'class' => 'col s10'])!!}
      <div class="row" style="margin:0;padding: 0;">
        <div class="input-field col s12" style="margin:0;margin-top:10px;">
          <i class="material-icons prefix fs18 fc1 bc2" style="height: 35px; top:0px; padding-top: 4px;">search</i>
      {!!Form::text('codigo', null, ['class'=>'element', 'required', 'autocomplete' => 'off', 'style' => 'color:#D2D2D2;border-bottom:none;height: 35px; margin:0; padding-right:180px; padding-left:50px; margin-right:0px; background: rgba(204,204,204,0.5); color: black; ', 'placeholder' => '¿Qué estás buscando?'])!!}
        </div>		        
      </div>
    {!!Form::close()!!}
  </div>		
</div> 

</div>
</div>

</div>
</div>


</div>

</div>

</div>
<div class="nav z-depth-0 row hide-on-med-and-down" style="margin-bottom: 0; padding: 0;">
<div class="container cero" style="width: 79%;">

	<div class="left center-align fs18">
		<ul class="cero" style="display: flex; float: left; justify-content: center; align-items: center; height: 40px;">
			<li style="width: 150px;"><a href="{{route('familia')}}" class="fs22 hoover dropdown-trigger" style="@if($active == 'productos') color: #E87732!important; @endif" data-target='dropdown1'>Productos <span style="display: flex; justify-content: center; align-items: center; float:right;"><i class="material-icons" style="padding-top: 3px;">arrow_drop_down</i></span></a></li>
			<li><div style="border-left: 2px solid white;height: 25px; margin: 0 2.2em;"></div></li>
			<li><a href="{{route('marcas')}}" class="fs22 hoover" style=" @if($active == 'marcas') color: #E87732!important; @endif">Marcas</a></li>
			<li><div style="border-left: 2px solid white;height: 25px; margin: 0 2.2em;"></div></li>
			<li><a href="{{route('empresax')}}" class="fs22 hoover" style=" @if($active == 'empresa') color: #E87732!important; @endif">Empresa</a></li>
			<li><div style="border-left: 2px solid white;height: 25px; margin: 0 2.2em;"></div></li>
			<li><a href="{{route('novedades')}}" class="fs22 hoover" style=" @if($active == 'novedades') color: #E87732!important; @endif">Novedades</a></li>
			<li><div style="border-left: 2px solid white;height: 25px; margin: 0 2.2em;"></div></li>
			<li><a href="{{route('ofertas')}}" class="fs22 hoover" style=" @if($active == 'ofertas') color: #E87732!important; @endif">Ofertas</a></li>
			<li><div style="border-left: 2px solid white;height: 25px; margin: 0 2.2em;"></div></li>
			<li><a href="{{route('contacto')}}" class="fs22 hoover" style=" @if($active == 'contacto') color: #E87732!important; @endif">Contacto</a></li>						
		</ul>
	</div>

</div>
</div>


<div>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="{{route('index')}}" class="mayus" style="@if($active == 'home') color: var(--color2); @endif">Home</a></li>

    <li><a href="{{route('familia')}}" class="mayus" style="@if($active == 'productos') color: var(--color2); @endif">Productos</a></li>

    <li><a href="{{route('marcas')}}" class="mayus" style="@if($active == 'marcas') color: var(--color2); @endif">Marcas</a></li>

    <li><a href="{{route('empresax')}}" class="mayus" style="@if($active == 'empresa') color: var(--color2); @endif">Empresa</a></li>

    <li><a href="{{route('novedades')}}" class="mayus" style="@if($active == 'novedades') color: var(--color2); @endif">Novedades</a></li>

    <li><a href="{{route('ofertas')}}" class="mayus" style="@if($active == 'ofertas') color: var(--color2); @endif">Ofertas</a></li>

    <li><a href="{{route('contacto')}}" class="mayus" style="@if($active == 'contacto') color: var(--color2); @endif">Contacto</a></li>


  </ul>

</div>

</header>
<style type="text/css">
  .page-item{
    width: 30px;
    display: flex;
    justify-content: center;
    border-right: 2px solid #DDD;
    font-weight: 500;
  }
  .pagination li.active{
  	background-color: var(--color2);
  }


.dropdown-content li>a, .dropdown-content li>span {
    font-size: 16px;
    color: #E87732!important;
    display: block;
    line-height: 22px;
    padding: 14px 16px;
}


</style>

  <!-- Dropdown Trigger -->
  

  <!-- Dropdown Structure -->
  <ul id='dropdown1' class='dropdown-content'>
  	@foreach($dropdown_familias as $dropdown_family)
    <li>
    	<a href="{{route('categoria',$dropdown_family->id)}}">

    	<span class="right" style="margin:0 0 0 10px; padding: 0;">
    	<img src="{{asset('imagenes/img_cat/'.$dropdown_family->imagen) }}" style="height: 30px; width: 30px; border-radius: 50%;">    		
    	</span>
    	{{$dropdown_family->titulo}}

    	</a>
    </li>
  	@endforeach
  </ul>