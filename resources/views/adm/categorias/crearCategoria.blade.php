@extends('adm.main')

@section('titulo', 'Crear Categoria')

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

				<div class="right">
				<a href="{{ url('adm/categoria/show') }}" class="right"><i title="Regresar" class="material-icons">backspace</i></a>					
				</div>
				</div>
			{!!Form::open(['route'=>'categoria.store', 'method'=>'POST', 'files' => true])!!}
				<div class="row">
		          <div class="file-field input-field col s6">
		            {!! Form::label('Seleccione una Categoria') !!}<br />
		            {!! Form::select('id_padre', $categorias, null, ['class' => 'form-control', 'required']) !!}
		          </div> 					
				</div>	
				<div class="row"> 
					<div class="file-field input-field col s8">
						<div class="btn">
						    <span>Imagen</span>
						    {!! Form::file('imagen') !!}
						</div>
						<div class="file-path-wrapper">
						    {!! Form::text('',null, ['class'=>'file-path validate', 'required', 'placeholder'=>'Recomendado (400px  X  400px)']) !!}
						</div>
					</div>		
					<div class="input-field col s4">
						{!!Form::label('Orden')!!}
						{!!Form::text('orden',null,['class'=>'validate','required'])!!}
					</div>				
				</div>				
				<div class="row">
					<div class="input-field col s12">
						{!!Form::label('Titulo')!!}
						{!!Form::text('titulo', null, ['class'=>'validate', 'required'])!!}
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
<script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('select').formSelect();
  });
</script>
@endsection
