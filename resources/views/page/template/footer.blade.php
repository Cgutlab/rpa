<footer class="bc6 fc1" style="width: 100%; padding: 15px 0;">

<div class="container yp25 cero" style="width: 100%; height: 100%; ">



<div class="row cero" style="margin-bottom: 0;">

<div class="col l4">



  <div class="row cero">

    <div class="col l4 m12 center-align">

        <img class="responsive-img" src="{{asset('imagenes/logos/'.$footer->imagen)}}">

        @foreach($footerRedes as $footerRed)

        <span>

        <a href="{{$footerRed->ruta}}" style="padding: 0; margin: 0;">

          <img class="responsive-img" src="{{asset('imagenes/redes/'.$footerRed->imagen)}}">

        </a>

        </span>

        @endforeach

    </div>

    <div class="col l8 m12 s8">

      <div class="row">

      <div class="col l12 fw7">

      <span style="text-decoration: underline;">NEWSLETTER</span>

      {!!Form::open(['route'=>'mailernew', 'method'=>'POST', 'files' => true])!!}

        <div class="input-field left">

        {!!Form::email('correo', null, ['class'=>'fc1', 'required', 'autocomplete' => 'off', 'placeholder' => 'Ingrese su email', 'style' => 'height: 35px;border: 1px solid gray; margin-bottom:0;'])!!}

        </div>

        <button class="btn waves-effect orange waves-light right" name="action" type="submit" style="margin: 15px auto auto 0px;">enviar</button>

      {!!Form::close()!!}
<style type="text/css">
.hoover{color: white!important;}
.hoover:hover{color: #E87732!important;}  
</style>
      </div>

        <div class="col l12 s12 fw7">SITEMAP</div>

        <div class="col l4 s6"><a class="hoover" href="{{route('index')}}" style="@if($active == 'home') color: #E87732!important; @endif">Home</a></div>

        <div class="col l4 s6"><a class="hoover" href="{{route('familia')}}" style="@if($active == 'productos') color: #E87732!important; @endif">Productos</a></div>

        <div class="col l4 s6"><a class="hoover" href="{{route('ofertas')}}" style="@if($active == 'ofertas') color: #E87732!important; @endif">Ofertas</a></div>

        <div class="col l4 s6"><a class="hoover" href="{{route('empresax')}}" style="@if($active == 'empresa') color: #E87732!important; @endif">Empresa</a></div>

        <div class="col l4 s6"><a class="hoover" href="{{route('marcas')}}" style="@if($active == 'marcas') color: #E87732!important; @endif">Marcas</a></div>

        <div class="col l4 s6"><a class="hoover" href="{{route('contacto')}}" style="@if($active == 'contacto') color: #E87732!important; @endif">Contacto</a></div>

      </div>

    </div>



  </div>

</div>

<div class="col l8">

<div class="row" style="margin-bottom: 0;">



<div class="col l4">

    <div class="row">

      <div class="offset-l2 col l10 m12 fw7" style="text-decoration: underline;">{!!$titulo1->texto!!}</div>

    </div>

    <div class="row">

      <div class="col s2"> <i class="material-icons fc1" style="margin-left:10px;">location_on</i></div>

      <div class="col s10">{!!$direccion1->texto!!}</div>

    </div>

    <div class="row">

      <div class="col s2"> <i class="material-icons fc1" style="margin-left:10px;">phone</i></div>

      <div class="col s10"><a href="tel:{!!$telefono1->texto!!}">{!!$telefono1->texto!!}</a></div>

    </div>

    <div class="row">

      <div class="col s2"> <i class="material-icons fc1" style="margin-left:10px;">email</i></div>

      <div class="col s10"><a href="mailto:{!!$correo1->texto!!}">{!!$correo1->texto!!}</a></div>

    </div>  

</div>



<div class="col l4">

    <div class="row">

      <div class="offset-l2 col l10 m12 fw7" style="text-decoration: underline;">{!!$titulo2->texto!!}</div>

    </div>

    <div class="row">

      <div class="col s2"> <i class="material-icons fc1" style="margin-left:10px;">location_on</i></div>

      <div class="col s10">{!!$direccion2->texto!!}</div>

    </div>

    <div class="row">

      <div class="col s2"> <i class="material-icons fc1" style="margin-left:10px;">phone</i></div>

      <div class="col s10"><a href="tel:{!!$telefono2->texto!!}">{!!$telefono2->texto!!}</a></div>

    </div>

    <div class="row">

      <div class="col s2"> <i class="material-icons fc1" style="margin-left:10px;">email</i></div>

      <div class="col s10"><a href="mailto:{!!$correo2->texto!!}">{!!$correo2->texto!!}</a></div>

    </div>  

</div>



<div class="col l4">

    <div class="row">

      <div class="offset-l2 col l10 m12 fw7" style="text-decoration: underline;">{!!$titulo3->texto!!}</div>

    </div>

    <div class="row">

      <div class="col s2"> <i class="material-icons fc1" style="margin-left:10px;">location_on</i></div>

      <div class="col s10">{!!$direccion3->texto!!}</div>

    </div>

    <div class="row">

      <div class="col s2"> <i class="material-icons fc1" style="margin-left:10px;">phone</i></div>

      <div class="col s10"><a href="tel:{!!$telefono3->texto!!}">{!!$telefono3->texto!!}</a></div>

    </div>

    <div class="row">

      <div class="col s2"> <i class="material-icons fc1" style="margin-left:10px;">email</i></div>

      <div class="col s10"><a href="mailto:{!!$correo3->texto!!}">{!!$correo3->texto!!}</a></div>

    </div> 

  

</div>



</div>

</div> 



</div>

</div>



</footer>
