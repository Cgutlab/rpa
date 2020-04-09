@extends('adm.main')

@section('titulo', 'Editar Clientes')

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
			          <td>Orden</td>
					<td class="text-right">Acciones</td>
				</thead>
				<tbody>
				@foreach($clientes as $cliente)
					<tr>
						<td>{!! $cliente->titulo !!}</td>
			            <td>{!! $cliente->orden !!}</td>
						<td class="text-right">
							<a href="{{ route('clientes.edit',$cliente->id) }}"><i title="Editar" class="material-icons">create</i></a>
							{!!Form::open(['class'=>'en-linea', 'route'=>['clientes.destroy', $cliente->id], 'method' => 'DELETE'])!!}
								<button onclick='return confirm_delete(this);' type="submit" class="submit-button">
									<i title="Eliminar" class="material-icons cliente-text">cancel</i>
								</button>
							{!!Form::close()!!}
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>			
			</div>
		</div>
		{!! $clientes->render() !!}
    </div>
</main>

<script type="text/javascript" src="{{ asset('js/eliminar.js') }}"></script>

@endsection