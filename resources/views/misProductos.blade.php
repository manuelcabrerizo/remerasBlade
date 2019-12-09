@extends('app')
@extends('header')
@section('main')
<head>
  <link rel="stylesheet" href="{{asset('css/perfil.css')}}">
  <link rel="stylesheet" href="{{asset('css/carrito.css')}}">
</head>
<body class="carro">


      <div class="info">
        <h2>Tus Productos</h2>
        <p class="coment2"></p>
      </div>
      <div class="cuerpo">
      <div class="compras">
      @foreach ($productos as $producto)
        <?php
        if($producto->user_id == $usuarioLogeado->id){
          ?>
          <div class="compra">
                    <div class="texto">
                      <h5>{{$producto["nombre"]}}</h5>
                      <p>{{$producto["detalle"]}}</p>
                      <p>{{$producto["precio"]}}</p>
                      <form class="" action="/misProductos" method="post">
                        {{csrf_field()}}
                        <button type="submit" name="editar" value="{{$producto["id"]}}">Editar</button>
                      </form>
                      <form class="" action="/misProductos" method="post">
                        {{csrf_field()}}
                        <button type="submit" name="eliminar" value="{{$producto["id"]}}">eliminar</button>
                      </form>
                    </div>
                      <div class="imagen">
                        <img src="img/<?php echo $producto->foto;?>" width="200px" height="150px">
                      </div>
          </div>
          <?php
        }
        ?>
      @endforeach
      </div>
      <?php if($editar == true){ ?>
      <div class="perfil">
        <form class="" action="modificarProducto" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          <p>
            <label for="nombre">nombre</label><br>
            <input type="text" name="nombre" id="nombre" value="{{$productoId->nombre}}">
          </p>
          <p>
            <label for="foto">foto</label><br>
            <input type="file" name="foto3" id="foto" value="">
          </p>
          <p>
            <label for="detalle">detalle</label><br>
            <textarea name="detalle" rows="4" cols="35" id="detalle">{{$productoId->detalle}}</textarea>
          </p>
          <p>
            <label for="precio">precio</label><br>
            <input type="number" name="precio" id="precio" value="{{$productoId->precio}}">
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
            <button type="submit" name="modificar" value="{{$productoId->id}}">Modificar</button>
          </h5>
        </form>
      </div>
      <?php } ?>
    </div>



</body>
@stop
@extends('footer')
