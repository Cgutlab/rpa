

{{-- <div class="container buscador" id="soloBuscador" style="width: 83%;">

	<div class="bc2" style="border-radius: 0 0 0px 0px;">

		{!! Form::open(['route' => 'filter', 'method' => 'POST']) !!}

		<div class="row"  style="padding: 15px 5px;margin-bottom: 0px;">

		<div class="col l10 m12">

			<div class="row" style="margin-bottom: 0px;">

				<div class="col m4 s12">

					<select name="categoria" id="">

						<option value="categoria">&nbsp;Remeras</option>

						@foreach($selec_categorias as $categoria)

							<option value="{{ $categoria->id }}">{!! $categoria->titulo !!}</option>

						@endforeach

					</select>

				</div>

				<div class="col m4 s12">

					<select name="marca" id="">

						<option value="marca">&nbsp;Por Marca</option>

						@foreach($marcas as $marca)

							<option value="{{ $marca->id }}">{!! $marca->titulo !!}</option>

						@endforeach

					</select>

				</div>

				<div class="col m4 s12">

				{!! Form::text('codigo', null, ['class' => 'absolute', 'placeholder' => '&nbsp;Buscar Producto']) !!}

				</div>

			</div>

		</div>

		<div class="col l2 m12 s12" align="right"> 

		   <button class="btn waves-effect waves-light" style="background: var(--color6); color: var(--color1); margin-top: 5px;" type="submit" name="action">Buscar

		   <i class="material-icons right">send</i>

		   </button>

		</div>

		</div>

		{!! Form::close() !!}

	</div>	

</div> --}}



<style type="text/css">

 #soloBuscador .select-wrapper input.select-dropdown  {

    position: relative;

    cursor: pointer;

    background-color: white;

    border: 1px solid var(--color7);

    color: var(--color4);

    outline: none;

    height: 3rem;

    line-height: 3rem;

    width: 100%;

    font-size: 16px;

    margin: 0 0 8px 0;

    padding: 0;

    display: block;

    -webkit-user-select: none;

    -moz-user-select: none;

    -ms-user-select: none;

    user-select: none;

    z-index: 0;  

    border-radius: 0px;

}

input:not([type]), input[type=text]:not(.browser-default), input[type=password]:not(.browser-default), input[type=email]:not(.browser-default), input[type=url]:not(.browser-default), input[type=time]:not(.browser-default), input[type=date]:not(.browser-default), input[type=datetime]:not(.browser-default), input[type=datetime-local]:not(.browser-default), input[type=tel]:not(.browser-default), input[type=number]:not(.browser-default), input[type=search]:not(.browser-default), textarea.materialize-textarea {

    background-color: white;

    border: 1px solid var(--color7);

    color: var(--color4);

    border-radius: 0;

    outline: none;

    height: 3rem;

    width: 100%;

    font-size: 16px;

    margin: 0 0 8px 0;

    padding: 0;

    -webkit-box-shadow: none;

    box-shadow: none;

    -webkit-box-sizing: content-box;

    box-sizing: content-box;

    -webkit-transition: border .3s, -webkit-box-shadow .3s;

    transition: border .3s, -webkit-box-shadow .3s;

    transition: box-shadow .3s, border .3s;

    transition: box-shadow .3s, border .3s, -webkit-box-shadow .3s;

    border-radius: 0px;

}

</style>