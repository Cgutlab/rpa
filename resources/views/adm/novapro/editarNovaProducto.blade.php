@extends('adm.main')

@section('titulo', 'Editar Producto')

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
			{!!Form::model($producto, ['route'=>['novaproducto.update', $producto->id], 'method'=>'PUT', 'files' => true])!!}
				<div class="row">
					<div class="input-field col s2">
						Seleccione una categoria: 
					</div>
					<div class="input-field col s6">
						<select name="id_nova_categorias" style="display: inherit;" required>
						@foreach($categorias as $categoria)						
            				<option value="{{$categoria->id}}" @if($categoria->id == $producto->id_nova_categorias) selected @endif>{!!$categoria->titulo!!}</option>
						@endforeach
						</select>
					</div>
					<div class="input-field col s4">
						{!!Form::label('Orden')!!}
						{!!Form::text('orden',$producto->orden,['class'=>'validate','required'])!!}
					</div>						
		        </div>
				<div class="row">
					<div class="input-field col s12">
						{!!Form::label('titulo')!!}
						{!!Form::text('titulo',$producto->titulo,['class'=>'validate','required'])!!}
					</div>	
				</div>
				<div class="row">
					<div class="input-field col s12">
						{!!Form::label('subtitulo')!!}
						{!!Form::text('subtitulo', $producto->subtitulo, ['class'=>'validate', 'required'])!!}
					</div>
				</div>
				<div class="row">
					<div class="input-field col s12">
						{!!Form::label('texto')!!}
						{!!Form::textarea('texto', $producto->texto, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5', ])!!}
					</div>
				</div>	
				<div class="row">
					<div class="input-field col s12">
						{!!Form::label('ruta')!!}
						{!!Form::text('ruta', $producto->ruta, ['class'=>'validate'])!!}
					</div>
				</div>	 

				
									
				
				{!!Form::submit('guardar', ['class'=>'waves-effect waves-light btn right'])!!}
			{!!Form::close()!!} 
		</div>
	</div>
</main>
<script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
<script>
  CKEDITOR.replace('texto');
    CKEDITOR.config.width = 500;
    CKEDITOR.config.width = '99%';
</script>
@endsection