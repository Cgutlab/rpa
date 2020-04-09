@extends('adm.main')

@section('titulo', 'Crear Galeria')

@section('cuerpo')

<main>
	<div class="container">
	    @if(count($errors) > 0)
		<div class="col s12 card-panel red lighten-4 red-text text-darken-4">
	  		<ul>
	  			@foreach($errors->all() as $error)
	  				<li>{!!$error!!}</li>
	  			@endforeach
	  		</ul>
	  	</div>
		@endif
		@if(session('success'))
		<div class="col s12 card-panel green lighten-4 green-text text-darken-4">
			{{ session('success') }}
		</div>
		@endif
		<div class="row">
			<div class="col s12">
		<div class="row">
        <div class="left">                  
        <b>{{$productos->titulo}}</b>
        </div>
        <div class="right">
        <a href="{{ route('galeria.lists',$productos->id) }}"><i title="Regresar" class="material-icons">backspace</i></a>        
        </div>
        </div>


			{!!Form::open(['route'=>'galeria.store', 'method'=>'POST', 'files' => true])!!}

          <div class="file-field input-field col s6 hide">
            {!! Form::label('Producto') !!}<br />
            {!! Form::text('id_producto', $productos->id, ['class' => 'hide']) !!}
          </div> 

      <div class="row">         
      <div class="file-field input-field col s8">
        <div class="btn">
          <span>Imagen</span>
          {!! Form::file('imagen') !!}
        </div>
        <div class="file-path-wrapper">
          {!! Form::text('',null, ['class'=>'file-path validate', 'placeholder' => 'Recomendado (800x800)px']) !!}
        </div>
      </div>
      <div class="input-field col s4">
        {!!Form::label('Orden')!!}
        {!!Form::text('orden',null,['class'=>'validate','required'])!!}
      </div>      
      </div>
   
			<div class="col s12 no-padding">
				{!!Form::submit('Crear', ['class'=>'waves-effect waves-light btn right'])!!}
			</div>
			{!!Form::close()!!} 
		</div>
		</div>
	</div>
</main>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript">
</script>
<script src="{{ asset('plugins/materialize/js/materialize.min.js') }}">
</script>
<script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
<script>
  CKEDITOR.replace('texto1');
    CKEDITOR.config.width = 500;
    CKEDITOR.config.width = '99%';
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('select').formSelect();
  });
</script>
@endsection
