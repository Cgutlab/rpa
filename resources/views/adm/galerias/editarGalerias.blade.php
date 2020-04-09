@extends('adm.main')

@section('titulo', 'Editar Galerias')

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
					<div class="left">					
					<a href="{{ route('galeria.create',$productos->id) }}"><i title="Agregar" class="material-icons medium">add_circle</i></a>			
					</div>
					<div class="right">
					<a href="{{ url('adm/producto/lists/'.$productos->id_categoria) }}" class="right"><i title="Regresar" class="material-icons">backspace</i></a>					
					</div>
					</div>
					<b>{!!$productos->titulo!!}</b>
				<table class="highlight bordered">
				<thead>
					<td>Imagen</td>
					<td>Orden</td>
					<td class="text-right">Acciones</td>
				</thead>
				<tbody>
				@foreach($galerias as $galeria)
					<tr>
						<td><img src="{!!asset('imagenes/galerias/'.$galeria->imagen)!!}" style="height: 80px;"></td>
						<td>{!! $galeria->orden !!}</td>
						<td class="text-right">
							<a href="{{ route('galeria.edit',$galeria->id) }}"><i title="Editar" class="material-icons">create</i></a>
							{!!Form::open(['class'=>'en-linea', 'route'=>['galeria.destroy', $galeria->id], 'method' => 'DELETE', 'onsubmit' => 'return confirm_delete()'])!!}
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
		{!! $galerias->render() !!}
    </div>
</main>

<script type="text/javascript">
function confirm_delete() {
var result = confirm('¿Esta Seguro? ¿Deseas eliminar la imagen?');

if (result) {
        return true;
    } else {
        return false;
    }
}
</script>

@endsection