@extends('adm.main')

@section('titulo', 'Editar Galeria')

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
      
      </div>
      <div class="right">
      <a href="{{ route('galeria.lists',$galeria->id_producto) }}"><i title="Regresar" class="material-icons">backspace</i></a>        
      </div>
      </div>

			{!!Form::model($galeria, ['route'=>['galeria.update', $galeria->id], 'method'=>'PUT', 'files' => true])!!}
				
      <div class="file-field input-field col s6">
        {!! Form::label('Producto') !!}<br />
        {!! Form::select('id_producto', $productos, $galeria->id_producto, ['class' => 'form-control', 'required']) !!}
      </div> 

      <div class="row">         
      <div class="file-field input-field col s8">
        <div class="btn">
          <span>Imagen</span>
          {!! Form::file('imagen') !!}
        </div>
        <div class="file-path-wrapper">
          {!! Form::text('',$galeria->imagen, ['class'=>'file-path validate', 'placeholder' => 'Recomendado (800x800)px']) !!}
        </div>
      </div>
      <div class="input-field col s4">
        {!!Form::label('Orden')!!}
        {!!Form::text('orden',$galeria->orden,['class'=>'validate','required'])!!}
      </div>      
      </div>

			{!!Form::submit('guardar', ['class'=>'waves-effect waves-light btn right'])!!}
			{!!Form::close()!!} 
			</div>
		</div>
	</div>
</main>
<!--       
        <div class="row">  
          <div class="file-field input-field col s6">
            <div class="btn">
                <span>Ficha</span>
                {!! Form::file('pdf') !!}
            </div>
            <div class="file-path-wrapper">
                {!! Form::text('',$galeria->pdf, ['class'=>'file-path validate']) !!}
            </div>
          </div>
        </div>
--> 
<script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
<script>
	CKEDITOR.replace('texto1');
    CKEDITOR.config.width = 500;
    CKEDITOR.config.width = '99%';
</script>
@endsection