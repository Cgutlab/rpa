@extends('adm.main')



@section('titulo', 'Editar dato')



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

			<div class="col-sm-12">

            {!!Form::model($dato, ['route'=>['datos.update', $dato->id], 'method'=>'PUT' , 'files' => true])!!}

				<div class="row">

            <label class="col s12" for="caracteristica">Texto</label>

            <div class="input-field col s12">

            {!!Form::text('texto', $dato->texto, ['class'=>'validate'])!!}

            </div>

        </div>
        
        @if($dato->tipo == 'imagen1' || $dato->tipo == 'imagen2' || $dato->tipo == 'imagen3')
        <div class="row">

			<div class="file-field input-field col s8">

				<div class="btn">

				    <span>Imagen</span>

				    {!! Form::file('imagen') !!}

				</div>

				<div class="file-path-wrapper">

				    {!! Form::text('',$dato->imagen, ['class'=>'file-path validate', 'placeholder'=>'Recomendado (400px  X  400px)']) !!}

				</div>

			</div>        	

        </div>	
        @endif
        

				<div class="col s12 no-padding">

					{!!Form::submit('Guardar', ['class'=>'waves-effect waves-light btn right'])!!}

				</div>

			{!!Form::close()!!} 

			</div>

			</div>

		</div>

	</div>

@endsection