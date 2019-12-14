@extends('app')
@extends('header')
@section('main')
<head>
  <link rel="stylesheet" href="{{asset('css/perfil.css')}}">
</head>
<body class="carro">
  <main>
    <div class="cuerpo">
      <form class="tarjeta" action="guardarTarjeta" method="post">
        {{csrf_field()}}
        <label for="tarjeta">Agregue su tarjeta de credito</label>
        <input type="number" name="tarjeta" value="">
        <button type="submit" name="button">Agregar</button>
      </form>
      <div class="tusTarjetas">
        <p>ya tienes tarjetas agregadas?</p>
        <?php
        foreach ($tarjetas as $tarjeta) {
          if($tarjeta->user_id == $usuarioLogeado->id){
            ?>
            <form class="" action="usarTarjeta" method="get">
              {{csrf_field()}}
              <label for="usarTarjeta">{{$tarjeta->numero}}</label>
              <button type="submit" name="usarTarjeta" value="{{$tarjeta->numero}}">Usar</button>
            </form>
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
