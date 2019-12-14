@extends('app')
@extends('header')
@section('main')
<head>
  <link rel="stylesheet" href="{{asset('css/perfil.css')}}">
</head>
<body class="carro">
  <main>
    <div class="cuerpo">
      <form class="ubicacion" action="guardarUbicacion" method="post">
        {{csrf_field()}}
      <P>
        <label for="nombre">Agregue su domicilio</label>
        <input type="text" name="nombre" value="">
      </p>
      <p>
        <label for="calle">Agregue su calle</label>
        <input type="text" name="calle" value="">
      </p>
      <p>
        <label for="provincia">Agregue su provincia</label>
        <input type="text" name="provincia" value="">
      </p>
        <button type="submit" name="button" value="<?php if(isset($nuevaTarjeta)){
          echo $nuevaTarjeta;
        }elseif(isset($usarTarjeta)){
          echo $usarTarjeta;
        } ?>">Agregar</button>
      </form>
      <div class="tusDomicilios">
        <p>ya tienes domicilios agregadas?</p>
        <?php foreach ($domicilios as $domicilio) {
          if($domicilio->user_id == $usuarioLogeado->id){
          ?>
          <form class="" action="usarUbicacion" method="get">
            {{csrf_field()}}
            <label for="usarDomicilio">{{$domicilio->domicilio}}
            {{$domicilio->calle}}
          {{$domicilio->provincia}}</label>
            <input class="invisible" type="text" name="tarjetaElegida" value="<?php if(isset($nuevaTarjeta)){
              echo $nuevaTarjeta;
            }elseif(isset($usarTarjeta)){
              echo $usarTarjeta;
            } ?>">
            <button type="submit" name="usarDomicilio" value="{{$domicilio->id}}">Usar</button>
          </form>
          <?php
        }
        } ?>
      </div>
    </div>
    <?php if(isset($nuevaTarjeta)){
      echo $nuevaTarjeta;
    }elseif(isset($usarTarjeta)){
      echo $usarTarjeta;
    } ?>
  </main>
</body>
@stop
@extends('footer')
