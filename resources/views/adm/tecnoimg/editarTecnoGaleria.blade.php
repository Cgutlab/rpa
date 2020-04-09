@extends('adm.main')

@section('titulo', 'Editar Galeria')

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
			{!!Form::model($galeria, ['route'=>['tecnogaleria.update', $galeria->id], 'method'=>'PUT', 'files' => true])!!}
				<div class="row">
					<div class="input-field col s3">
						Seleccione un item: 
					</div>
					<div class="input-field col s9">
						<select name="id_tecno_items" style="display: inherit;" required>
						@foreach($items as $item)						
            				<option value="{{$item->id}}" @if($item->id == $galeria->id_tecno_items) selected @endif>{!!$item->titulo!!}</option>
						@endforeach
						</select>
					</div>				
		        </div>
				<div class="row">
					<div class="file-field input-field col s8">
						<div class="btn">
						    <span>Imagen</span>
						    {!! Form::file('imagen') !!}
						</div>
						<div class="file-path-wrapper">
						    {!! Form::text('',$galeria->imagen, ['class'=>'file-path validate', 'required', 'placeholder'=>'Recomendado (  X  )']) !!}
						</div>
					</div>
					<div class="input-field col s4">
						{!!Form::label('Orden')!!}
						{!!Form::text('orden',$galeria->orden,['class'=>'validate','required'])!!}
					</div>	
				</div>		
				<div class="row">
					<div class="input-field col s12">
						{!!Form::label('titulo')!!}
						{!!Form::text('titulo',$galeria->titulo,['class'=>'validate','required'])!!}
					</div>	
				</div>					
				
				{!!Form::submit('guardar', ['class'=>'waves-effect waves-light btn right'])!!}
			{!!Form::close()!!} 
		</div>
	</div>
</main>
@endsection