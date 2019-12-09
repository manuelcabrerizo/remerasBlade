@extends('app')
@extends('header')
@section('main')
  <head>
    <link rel="stylesheet" href="{{asset('css/contacto.css')}}">
    <link rel="stylesheet" href="{{asset('css/vender.css')}}">
  </head>
<body>
<div class="contenedor">
<div class="info">
  <h2>vender</h2>
  <p class="coment">Crea tu venta</p>
  <p class="coment2">aqui:</p>
</div>
<div class="cuerpo">
  <form class="" action="mostrarCrear" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <p>
      <label for="nombre">nombre</label><br>
      <input type="text" name="nombre" id="nombre" value="">
    </p>
    <p>
      <label for="foto">foto</label><br>
      <input type="file" name="foto2" id="foto" value="">
    </p>
    <p>
      <label for="detalle">detalle</label><br>
      <textarea name="detalle" rows="4" cols="40" id="detalle"></textarea>
    </p>
    <p>
      <label for="precio">precio</label><br>
      <input type="number" name="precio" id="precio" value="">
    </p>
    <p>
      <label for="color">color</label><br>
      <select class="" name="color" id="color">
        <option value="negro">negro</option>
        <option value="blanco">blanco</option>
        <option value="rojo">rojo</option>
        <option value="azul">azul</option>
      </select>
    </p>
    <p>
      <label for="talle">talle</label><br>
      <select class="" name="talle" id="talle">
        <option value="l">large</option>
        <option value="m">medium</option>
        <option value="s">small</option>
      </select>
    </p>

    <h5>
      <input type="submit" name="crear" value="crear">
    </h5>
  </form>
</div>
</div>
</body>
@stop
@extends('footer')
