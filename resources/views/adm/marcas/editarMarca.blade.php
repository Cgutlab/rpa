@extends('adm.main')

@section('titulo', 'Editar Marca')

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
			{!!Form::model($marca, ['route'=>['marcas.update', $marca->id], 'method'=>'PUT', 'files' => true])!!}
				
				<div class="row">
				<div class="file-field input-field col s8">
					    <div class="btn">
					        <span>Imagen</span>
					        {!! Form::file('imagen') !!}
					    </div>
					    <div class="file-path-wrapper">
					      	{!! Form::text('',$marca->imagen, ['class'=>'file-path validate', 'placeholder'=>'Recomendado (80 X 80) Pixels']) !!}
					    </div>
					</div>
				</div>
		<div class="row">
          <div class="input-field col s8">
            {!!Form::label('Titulo')!!}
            {!!Form::text('titulo',$marca->titulo,['class'=>'validate'])!!}
          </div>
          <div class="input-field col s4">
            {!!Form::label('Orden')!!}
            {!!Form::text('orden',$marca->orden,['class'=>'validate'])!!}
          </div>
        </div>
			{!!Form::submit('guardar', ['class'=>'waves-effect waves-light btn right'])!!}
			{!!Form::close()!!} 
			</div>
		</div>
	</div>
</main>
@endsection