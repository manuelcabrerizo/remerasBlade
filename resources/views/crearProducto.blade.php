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
      <?php if(isset($errorNombre) && $errorNombre == true){
        ?> <p style="color:red">debe completar el campo</p> <?php
      } ?>
      <input type="text" name="nombre" id="nombre" value="" required>
    </p>
    <p>
      <label for="foto">foto</label><br>
      <?php if(isset($errorFoto) && $errorFoto == true){
        ?> <p style="color:red">debe elegir una foto</p> <?php
      } ?>
      <input type="file" name="foto2" id="foto" value="">
    </p>
    <p>
      <label for="detalle">detalle</label><br>
      <?php if(isset($errorDetalle) && $errorDetalle == true){
        ?> <p style="color:red">debe completar la descripcion</p> <?php
      } ?>
      <textarea name="detalle" rows="4" cols="40" id="detalle" required></textarea>
    </p>
    <p>
      <label for="precio">precio</label><br>
      <?php if(isset($errorPrecio) && $errorPrecio == true){
        ?> <p style="color:red">debe colocar un precio</p> <?php
      } ?>
      <input type="number" name="precio" id="precio" value="" required>
    </p>
    <p>
      <label for="color">color</label><br>
      <select class="" name="color" id="color">
        <option value=""></option>
        <option value="negro">negro</option>
        <option value="blanco">blanco</option>
        <option value="rojo">rojo</option>
        <option value="azul">azul</option>
      </select>
    </p>
    <p>
      <label for="talle">talle</label><br>
      <select class="" name="talle" id="talle">
        <option value=""></option>
        <option value="l">large</option>
        <option value="m">medium</option>
        <option value="s">small</option>
      </select>
    </p>

    <h5>
      <button type="submit" class="btn btn-dark carrito" name="button">Crear Venta</button>
    </h5>
  </form>
</div>
</div>
</body>
@stop
@extends('footer')
