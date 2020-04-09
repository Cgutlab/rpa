@extends('adm.main')



@section('titulo', 'Crear Red Social')



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

			{!!Form::open(['route'=>'redes.store', 'method'=>'POST', 'files' => true])!!}

				{{-- <div class="row">

					<div class="file-field input-field col s12">

						<div class="btn">

						    <span>Imagen</span>

						    {!! Form::file('imagen') !!}

						</div>

						<div class="file-path-wrapper">

						    {!! Form::text('',null, ['class'=>'file-path validate','placeholder'=>'Recomendado (20 X 20) Pixels']) !!}

						</div>

					</div>

				</div> --}}

        <div class="row">

          <div class="input-field col s12">

            {!!Form::label('Ruta')!!}

            {!!Form::text('ruta',null,['class'=>'validate', 'required'])!!}

          </div>

        </div>

		<div class="row">

          <div class="input-field col s8">

            {!!Form::label('Nombre')!!}

            {!!Form::text('nombre',null,['class'=>'validate', 'required'])!!}

          </div>

			<div class="input-field col s4">

				{!!Form::label('Orden')!!}

				{!!Form::text('orden',null,['class'=>'validate', 'required'])!!}

			</div>

		</div>

		<div class="row">

			<div class="input-field col s3">

				Seleccione la sección:

			</div>

			<div class="input-field col s9">

				<select name="seccion" style="display: inherit;" required>

				<option value="superior">Superior</option>

				<option value="inferior">Inferior</option>

				</select>

			</div>

		</div>

		<div class="row">
			<div class="input-field col s12">
				{!!Form::label('Code')!!}
				{!!Form::text('code',null,['class'=>'validate', 'required', 'placeholder' => '<i class="fab fa-instagram"></i>'])!!}
			</div>
			<div class="col s12">Busque el código de su imagen en: <a href="https://fontawesome.com/icons?d=gallery" target="_blank">https://fontawesome.com/icons?d=gallery</a></div>
		</div>

				<div class="col s12 no-padding">

					{!!Form::submit('Crear', ['class'=>'waves-effect waves-light btn right'])!!}

				</div>

			{!!Form::close()!!} 

		</div>

		</div>

	</div>

</main>



@endsection



