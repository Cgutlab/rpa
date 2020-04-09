@extends('adm.main')



@section('titulo', 'Editar Productos')



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

				<a href="{{ route('producto.create',$categorias->id) }}"><i title="Agregar" class="material-icons medium">add_circle</i></a>			

				</div>

				<div class="right">

				<a href="{{ url('adm/categoria/show',$categorias->id_categoria) }}" class="right"><i title="Regresar" class="material-icons">backspace</i></a>					

				</div>

				</div>

				<b>{!!$categorias->titulo!!}</b>

				<table class="highlight bordered">

				<thead>

					<td>Imagen</td>

					<td>Titulo</td>

					<td>Ver Galeria</td>

					<td>Orden</td>

					<td class="text-right">Acciones</td>

				</thead>

				<tbody>

				@foreach($productos as $producto)

				<tr>

					<td>

						@foreach($galerias as $galeria)

						@if($galeria->id_producto == $producto->id)

							@if(isset($galeria))

								@if($producto->oferta != 'ninguna')

								<img src="{{asset('imagenes/help/'.$producto->oferta.'.png')}}" style="width: 76.5px; height: 55.5px ;position: absolute; z-index: 999;">

								@endif      

							<img src="{!!asset('imagenes/galerias/'.$galeria->imagen)!!}" style="height: 80px;">

							@endif

						@endif				

						@endforeach

					</td>

					<td>{!! $producto->titulo !!}</td>

					<td><a href="{{ route('galeria.lists',$producto->id) }}"><i title="Agregar" class="material-icons">add_a_photo</i></a>			</td>

					<td>{!! $producto->orden !!}</td>

					<td class="text-right">

						<a href="{{ route('producto.edit',$producto->id) }}"><i title="Editar" class="material-icons">create</i></a>

						{!!Form::open(['class'=>'en-linea', 'route'=>['producto.destroy', $producto->id], 'method' => 'DELETE', 'onsubmit' => 'return confirm_delete()'])!!}

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

		{!! $productos->render() !!}

    </div>

</main>



<script type="text/javascript">

function confirm_delete() {

var result = confirm('¿Esta Seguro? ¿Deseas eliminar el producto?');



if (result) {

        return true;

    } else {

        return false;

    }

}

</script>



@endsection