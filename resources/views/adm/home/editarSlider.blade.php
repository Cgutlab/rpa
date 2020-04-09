@extends('adm.main')



@section('titulo', 'Editar Slider')



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

			{!!Form::model($slider, ['route'=>['slider.update', $slider->id], 'method'=>'PUT', 'files' => true])!!}

				<div class="row">

					<div class="file-field input-field col s8">

						<div class="btn">

						    <span>Imagen</span>

						    {!! Form::file('imagen') !!}

						</div>

						<div class="file-path-wrapper">

						    {!! Form::text('',$slider->imagen, ['class'=>'file-path validate']) !!}

						</div>

					</div>

					<div class="input-field col s4">

						{!!Form::label('Orden')!!}

						{!!Form::text('orden',$slider->orden,['class'=>'validate'])!!}

					</div>

				</div>

				<div class="row">

			      	<label class="col s12" for="title">Titulo</label>

			      	<div class="input-field col s12">

						{!!Form::text('titulo', $slider->titulo, ['class'=>'validate'])!!}

				    </div>

				</div>

				<div class="row">

			      	<label class="col s12" for="title">SubTitulo</label>

			      	<div class="input-field col s12">

						{!!Form::text('subtitulo', $slider->subtitulo, ['class'=>'validate'])!!}

				    </div>

				</div>

				<div class="row">
					<div class="input-field col s4">

						{!!Form::label('Boton')!!}

						{!!Form::text('boton',$slider->boton,['class'=>'validate'])!!}

					</div>

					<div class="input-field col s8">

						{!!Form::label('Ruta')!!}

						{!!Form::text('ruta',$slider->ruta,['class'=>'validate'])!!}

					</div>		
				</div>

				<div class="col s12 no-padding">

					{!!Form::submit('Guardar', ['class'=>'waves-effect waves-light btn right'])!!}

				</div>

			{!!Form::close()!!} 

			</div>

			</div>

		</div>

	</main>

@endsection