<div class="" style="background: #F5F5F5;">
  <div class="carousel" style="max-height: 210px; display: flex; justify-content: center; align-items: center;">
  @foreach($marcas as $marca)
    <a class="carousel-item" style="display: flex; justify-content: center; align-items: center;"><img class="responsive-img" src="{{asset('imagenes/marcas/'.$marca->imagen)}}"></a>
  @endforeach
  </div>
</div>