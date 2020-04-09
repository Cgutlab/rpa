@extends('adm.main')

@section('titulo', 'Crear Producto')

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
			{!!Form::open(['route'=>'novaproducto.store', 'method'=>'POST', 'files' => true])!!}
				<div class="row">
					<div class="input-field col s2">
						Seleccione una categoria:
					</div>
					<div class="input-field col s6">
						<select name="id_nova_categorias" style="display: inherit;" required>
						<option value="{{$categorias->id}}">{!!$categorias->titulo!!}</option>
						</select>
					</div>
					<div class="input-field col s4">
						{!!Form::label('Orden')!!}
						{!!Form::text('orden',null,['class'=>'validate','required'])!!}
					</div>
		        </div>
				<div class="row">
					<div class="input-field col s12">
						{!!Form::label('titulo')!!}
						{!!Form::text('titulo',null,['class'=>'validate','required'])!!}
					</div>	
				</div>
				<div class="row">
					<div class="input-field col s12">
						{!!Form::label('subtitulo')!!}
						{!!Form::text('subtitulo', null, ['class'=>'validate','required'])!!}
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						{!!Form::label('Texto')!!}
						{!!Form::textarea('texto', null, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5', ])!!}
					</div>
				</div>	
				<div class="row">
					<div class="input-field col s12">
						{!!Form::label('ruta')!!}
						{!!Form::text('ruta', null, ['class'=>'validate'])!!}
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
<script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
<script>  
  	CKEDITOR.replace('texto');
  	CKEDITOR.replace('extracto');
    CKEDITOR.config.width = 500;
    CKEDITOR.config.width = '99%';
</script>
<script src="" type="text/javascript"></script>
@endsection

