@extends('app')
@extends('header')
@section('main')
<head>
  <link rel="stylesheet" href="{{asset('css/perfil.css')}}">
  <link rel="stylesheet" href="{{asset('css/datos.css')}}">
</head>
<body>
  <main>
    <div class="info">
      <h2>Datos de Facturacion</h2>
      <p class="coment2"></p>
    </div>
    <div class="cuerpo">
      <div class="tarjetas">
      <form class="ubicacion" action="guardarUbicacion" method="post">
        {{csrf_field()}}
      <div class="agregar">
      <P>
        <label for="nombre">Agregue su domicilio</label>
        <input type="text" name="nombre" value="" required>
      </p>
      <p>
        <label for="calle">Agregue su calle</label>
        <input type="text" name="calle" value="" required>
      </p>
      <p>
        <label for="provincia">Agregue su provincia</label>
        <input type="text" name="provincia" value="" required>
      </p>
        <button class="btn btn-dark carrito" type="submit" name="button" value="<?php if(isset($tarjeta)){
          echo $tarjeta->id;
        }elseif(isset($usarTarjeta)){
          echo $usarTarjeta;
        } ?>">Agregar</button>
      </div>
      </form>
    </div>
    </div>
    <div class="info">
      <p class="coment2"></p>
    </div>
    <div class="cuerpo">
            <p class="pregunta">ya tienes domicilios agregadas?</p>
      <div class="tusTarjetas">
        <?php foreach ($domicilios as $domicilio) {
          if($domicilio->user_id == $usuarioLogeado->id){
          ?>
          <div class="tarjeta1">
          <form class="" action="usarUbicacion" method="get">
            {{csrf_field()}}
            <label for="usarDomicilio">tu domicilio: {{$domicilio->domicilio}}</label>
            <input class="invisible" type="text" name="tarjetaElegida" value="<?php if(isset($tarjeta)){
              echo $tarjeta->id;
            }elseif(isset($usarTarjeta)){
              echo $usarTarjeta;
            } ?>">
            <button class="usar2 btn btn-dark carrito" type="submit" name="usarDomicilio" value="{{$domicilio->id}}">Usar</button>
          </form>
          </div>
          <?php
        }
        } ?>
      </div>
      </div>
  </main>
</body>
@stop
@extends('footer')
