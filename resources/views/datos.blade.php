@extends('app')
@extends('header')
@section('main')
<head>
  <link rel="stylesheet" href="{{asset('css/perfil.css')}}">
  <link rel="stylesheet" href="{{asset('css/datos.css')}}">
</head>
<body class="carro">
  <main>
      <div class="info">
        <h2>Datos de Facturacion</h2>
        <p class="coment2"></p>
      </div>
    <div class="cuerpo">
      <div class="tarjetas">
      <form class="tarjeta" action="guardarTarjeta" method="post">
        {{csrf_field()}}
        <div class="agregar">
        <p>Agregue su tarjeta</p>
        <div class="caja">
        <label for="tarjeta">Numero: </label>
        <input type="number" name="tarjeta" value="" required>
        <br>
      </div>
        <button type="submit" name="button" class="btn btn-dark carrito">Agregar</button>
      </form>
    </div>
    </div>
  </div>
    <div class="info">
      <p class="coment2"></p>
    </div>
    <div class="cuerpo">
      <p class="pregunta">ya tienes tarjetas agregadas?</p>
      <div class="tusTarjetas">
        <?php
        $valor = 0;
        foreach ($tarjetas as $tarjeta) {
          if($tarjeta->user_id == $usuarioLogeado->id){
            $valor++;
            ?>
            <div class="tarjeta1">
            <form class="" action="usarTarjeta" method="get">
              {{csrf_field()}}
              <label for="usarTarjeta">su tarjeta numero: {{$valor}}</label>
              <button class="usar btn btn-dark carrito" type="submit" name="usarTarjeta" value="{{$tarjeta->id}}">Usar</button>
            </form>
          </div>
            <?php
          }
        }
         ?>
      </div>
    </div>
  </main>
</body>
@stop
@extends('footer')
