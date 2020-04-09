@extends('adm.main')



@section('titulo', 'Editar Categorias')



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

			<a href="{{ route('categoria.create') }}"><i title="Agregar" class="material-icons medium">add_circle</i></a>			

				<table class="highlight bordered">

				<thead>

          			<td>Pertenece: </td>
					<td>Imagen</td>

					<td>Titulo</td>

          			<td>Productos</td>


					<td>Orden</td>

					<td class="text-right">Acciones</td>

				</thead>

				<tbody>

				@foreach($categorias as $categoria)
				@if($categoria->id != 0)
					<tr>

						<td>@foreach ($categoriax as $category) @if($categoria->id_padre == $category->id){{$category->titulo}} @endif @endforeach</td>
						<td><img class="slider-foto" src="{{ asset("imagenes/img_cat/".$categoria->imagen) }}" height="100px"></td>

						<td>{!! $categoria->titulo !!}</td>

            <td><a href="{{ route('producto.lists',$categoria->id) }}"><i title="Editar" class="material-icons">shopping_cart</i></a></td>


						<td>{!!$categoria->orden!!}</td>

						<td class="text-right">

              <a href="{{ route('categoria.edit',$categoria->id) }}"><i title="Editar" class="material-icons">create</i></a>

              {!!Form::open(['class'=>'en-linea', 'route'=>['categoria.destroy', $categoria->id], 'method' => 'DELETE', 'onsubmit' => 'return confirm_delete()'])!!}

                <button type="submit" class="submit-button" id="delete-btn">

                  <i title="Eliminar" class="material-icons red-text">cancel</i>

                </button>

              {!!Form::close()!!}                

            </td>

          </tr>
        @endif
        @endforeach

        </tbody>

      </table>      

      </div>

    </div>

    {!! $categorias->render() !!}

    </div>

</main>



<script type="text/javascript">

function confirm_delete() {

var result = confirm('¿Esta Seguro Que Deseas Eliminar La Categoria?');



if (result) {

        return true;

    } else {

        return false;

    }

}

</script>





@endsection