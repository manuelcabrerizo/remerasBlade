@extends('app')
@extends('header')
@section('main')
<head>
  <link rel="stylesheet" href="{{asset('css/perfil.css')}}">
  <link rel="stylesheet" href="{{asset('css/carrito.css')}}">
</head>
<body class="carro">
  <main>
    <div class="cuerpo">
    <div class="compras">
      <?php foreach ($usuarioLogeado->carrito as $productoCarro) {
        ?>
        <div class="compra">
             <div class="texto">
                 <h5>{{$productoCarro->nombre}}</h5>
                 <p>{{$productoCarro->detalle}}</p>
                 <p>{{$productoCarro->precio}}</p>
             </div>
             <div class="imagen">
                 <img src="img/{{$productoCarro->foto}}" width="200px" height="150px">
             </div>
       </div>
       <?php
      } ?>


    </div>
    <div class="perfil">
      <div class="logo">
        <img src="img/.jpg" alt="foto perfil" width="320px" height="320px">
      </div>
      <h5>nomnre</h5>
      <h5>precio</h5>
      <a class="btn btn-dark" href="home.php" role="button">Volver</a>
      <button class="btn btn-dark" type="button" name="comprar" value="comprar" >comprar</button>
    </div>
    </div>
  </main>
</body>
@stop
@extends('footer')
