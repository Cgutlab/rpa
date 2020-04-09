@extends('adm.main')

@section('titulo', 'Editar Items')

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
				<table class="highlight bordered">
				<thead>
						<td>Titulo</td>
						<td>Subtitulo</td>
			          <td>Orden</td>
					<td class="text-right">Acciones</td>
				</thead>
				<tbody>
				@foreach($servdestacados as $servdestacado)
					<tr>
						<td>{!! $servdestacado->titulo !!}</td>
						<td>{!! $servdestacado->texto !!}</td>
			            <td>{!! $servdestacado->orden !!}</td>
						<td class="text-right">
							<a href="{{ route('ihome.edit',$servdestacado->id) }}"><i title="Editar" class="material-icons">create</i></a>
 							{!!Form::open(['class'=>'en-linea', 'route'=>['ihome.destroy', $servdestacado->id], 'method' => 'DELETE'])!!}
				                <button type="submit" class="submit-button" id="delete-btn">
				                  <i title="Eliminar" class="material-icons red-text">cancel</i>
				                </button>
							{!!Form::close()!!}
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>			
			</div>
		</div>
		{!! $servdestacados->render() !!}
    </div>
</main>

<script type="text/javascript" src="{{ asset('js/eliminar.js') }}"></script>

@endsection