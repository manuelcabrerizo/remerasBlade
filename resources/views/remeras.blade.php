

@foreach ($productos as $producto)
  <p>{{$producto["color"]}}</p>
  <p>{{$producto["precio"]}}</p>
@endforeach
