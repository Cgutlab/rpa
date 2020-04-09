@extends('adm.main')

@section('titulo', 'Crear Producto')

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
        <b>{{$categorias->titulo}}</b>
        </div>
        <div class="right">
        <a href="{{ route('producto.lists',$categorias->id) }}"><i title="Regresar" class="material-icons">backspace</i></a>        
        </div>
        </div>
      {!!Form::open(['route'=>'producto.store', 'method'=>'POST', 'files' => true])!!}

        <div class="row">
        <div class="file-field input-field col s6">
          <div class="btn">
            <span>FICHA PDF</span>
            {!! Form::file('ficha') !!}
          </div>
          <div class="file-path-wrapper">
            {!! Form::text('',null, ['class'=>'file-path validate', 'placeholder' => 'Archivos PDF']) !!}
          </div>
        </div>
          <div class="file-field input-field col s6">
            {!! Form::label('Oferta') !!}<br />
            {!! Form::select('oferta', ['ninguna' => 'ninguna',
                                      'descuento' => 'descuento',
                                      'oportunidad' => 'oportunidad',
                                      'ultimos' => 'ultimos'], null, ['class'=>'validate', 'required']) !!}
          </div>  
        </div>

        <div class="row">
          <div class="input-field col s6">
           {!!Form::label('Codigo')!!}
           {!!Form::text('codigo',null,['class'=>'validate', 'required'])!!}
          </div>
          <div class="input-field col s6">
           {!!Form::label('Orden')!!}
           {!!Form::text('orden',null,['class'=>'validate', 'required'])!!}
          </div>
        </div>

        <div class="row">
          <div class="file-field input-field col s6 hide">
            {!! Form::label('Remeras') !!}<br />
            {!! Form::text('id_categoria', $categorias->id, ['class' => 'hide']) !!}
          </div>    
          <div class="file-field input-field col s6">
            {!! Form::label('Marca') !!}<br />
            {!! Form::select('id_marca', $marcas, null, ['class' => 'form-control', 'required']) !!}
          </div>            
        </div>

        <div class="row">         
          <div class="input-field col s12">
            {!!Form::label('Titulo')!!}
            {!!Form::text('titulo',null,['class'=>'validate', 'required'])!!}
          </div>
        </div>

        <div class="row">
            <label class="col s12" for="caracteristica">Texto</label>
            <div class="input-field col s12">
            {!!Form::textarea('texto', null, ['class'=>'validate', 'cols'=>'74', 'rows'=>'5'])!!}
            </div>
        </div>

        <div class="row">
          <div class="input-field col l6 s12">
            {!! Form::label('colores') !!}<br />
            {!! Form::select('colores[]', $colores, null, ['class' => 'form-control', 'multiple' => 'multiple']) !!}
          </div>          
          <div class="input-field col l6 s12">
            {!! Form::label('tallas') !!}<br />
            {!! Form::select('tallas[]', $tallas, null, ['class' => 'form-control', 'multiple' => 'multiple']) !!}
          </div>           
        </div>

			<div class="col s12 no-padding">
				{!!Form::submit('Crear', ['class'=>'waves-effect waves-light btn right'])!!}
			</div>
			{!!Form::close()!!} 
		</div>
		</div>
	</div>
</main>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="{{ asset('plugins/materialize/js/materialize.min.js') }}">
</script>
<script src="//cdn.ckeditor.com/4.7.3/full/ckeditor.js"></script>
<script>
  CKEDITOR.replace('texto');
    CKEDITOR.config.width = 500;
    CKEDITOR.config.width = '99%';
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('select').formSelect();
  });
</script>
@endsection
