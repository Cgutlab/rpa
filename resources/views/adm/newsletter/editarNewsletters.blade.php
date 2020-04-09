@extends('adm.main')

@section('titulo', 'Lista Newsletter')

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
					<td>Orden</td>
					<td>Correo</td>
					<td>Fecha Registro</td>
				</thead>
				<tbody>
				@foreach($newsletter as $newsletter)
					<tr>
						<td>{!! $newsletter->id !!}</td>
						<td>{!! $newsletter->correo !!}</td>
						<td>{!! $newsletter->created_at !!}</td>
						<td class="text-right">
{{-- 
							<a href="{{ route('newsletter.edit',$newsletter->id) }}"><i title="Editar" class="material-icons">create</i></a>
							{!!Form::open(['class'=>'en-linea', 'route'=>['newsletter.destroy', $newsletter->id], 'method' => 'DELETE'])!!}
 --}}
<!-- 								
                <button onclick='return confirm_delete(this);' type="submit" class="submit-button">
									<i title="Eliminar" class="material-icons red-text">cancel</i>
								</button>
-->
							{!!Form::close()!!}
						</td>
					</tr>
				@endforeach
				</tbody>
			</table>			
			</div>
		</div>
    </div>
</main>

<script type="text/javascript" src="{{ asset('js/eliminar.js') }}"></script>

@endsection