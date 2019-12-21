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
      <?php
        if(count($usuarioLogeado->carrito) > 0){
          foreach ($usuarioLogeado->carrito as $productoCarro) {
           ?>
           <div class="compra">
                <div class="texto">
                    <h5>{{$productoCarro->nombre}}</h5>

                    <p>${{$productoCarro->precio}}</p>
                </div>
                <form class="botonEliminar" action="/eliminarCarrito" method="post">
                  {{csrf_field()}}
                  <button type="submit" name="eliminar" class="btn btn-dark carrito2" value="{{$productoCarro->id}}">Eliminar</button>
                </form>
                <div class="imagen">
                    <img src="img/{{$productoCarro->foto}}" width="200px" height="150px">
                </div>
          </div>
          <?php
         }
       }else {
         ?>
         <div class="compra" style="padding-left: 30%">No tienes productos en el carrito</div>
         <?php
       }
      ?>
    </div>
    <div class="perfil">
      <?php if(isset($usuarioLogeado)){ ?>
      <div class="logoPerfil">
        <img src="img/<?php echo $usuarioLogeado->foto;?>" alt="foto perfil" width="320px" height="320px">
      </div>
      <h5><?php echo $usuarioLogeado->name; ?></h5>
      <?php
        $precioFinal = 0;
          foreach ($usuarioLogeado->carrito as $productoCarro) {
            $precioFinal = $precioFinal + $productoCarro->precio;
          } ?>
      <p>Total a pagar: </p>
      <h3>$<?php echo $precioFinal; ?></h3>
      <a class="btn btn-dark carrito" href="home" role="button">Volver</a>
      <form action="datos" method="get">
        <button type="submit" name="compra" class="btn btn-dark carrito" value="">Comprar</button>
      </form>
      <?php }else{
        ?> Tienes que iniciar secion para realizar una compra <?php
      } ?>
    </div>
    </div>
  </main>
</body>
@stop
@extends('footer')
