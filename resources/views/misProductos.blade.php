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
        <?php $hayProductos = false; ?>
      @foreach ($productos as $producto)
        <?php
        if($producto->user_id == $usuarioLogeado->id){
          $hayProductos = true;
          ?>
          <div class="compra">
                    <div class="texto">
                      <h5>{{$producto["nombre"]}}</h5>
                      <p>{{$producto["precio"]}}</p>

                      <form class="" action="/misProductos" method="post">
                        {{csrf_field()}}
                        <button class="btn btn-dark carrito2 flotarBoton" type="submit" name="editar" value="{{$producto["id"]}}">Editar</button>
                      </form>
                      <form class="" action="/misProductos" method="post">
                        {{csrf_field()}}
                        <button class="btn btn-dark carrito2" type="submit" name="eliminar" value="{{$producto["id"]}}">Eliminar</button>
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
      <?php if($hayProductos == false){
        ?>     <div class="compra">
                      <div class="texto">
                      No tienes prouctos creados
                        </div>
            </div> <?php
      } ?>
      </div>
      <?php if($editar == true){ ?>
      <div class="perfil">
        <form class="" action="modificarProducto" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
          <p>
            <label for="nombre">Nombre</label><br>
            <input type="text" name="nombre" id="nombre" value="{{$productoId->nombre}}">
          </p>
          <p>
            <label for="foto">Foto</label><br>
            <input type="file" name="foto3" id="foto" value="">
          </p>
          <p>
            <label for="detalle">Detalle</label><br>
            <textarea name="detalle" rows="4" cols="35" id="detalle">{{$productoId->detalle}}</textarea>
          </p>
          <p>
            <label for="precio">Precio</label><br>
            <input type="number" name="precio" id="precio" value="{{$productoId->precio}}">
          </p>
          <p>
            <label for="color">color</label><br>
            <select class="" name="color" id="color">
              <option value="{{$productoId->color}}">{{$productoId->color}}</option>
              <option value="negro">negro</option>
              <option value="blanco">blanco</option>
              <option value="rojo">rojo</option>
              <option value="azul">azul</option>
            </select>
          </p>
          <p>
            <label for="talle">talle</label><br>
            <select class="" name="talle" id="talle">
              <option value="{{$productoId->talle}}">{{$productoId->talle}}</option>
              <option value="xl">Extra large</option>
              <option value="l">Large</option>
              <option value="m">Medium</option>
              <option value="s">small</option>
            </select>
          </p>

          <h5>
            <button class="btn btn-dark carrito2" type="submit" name="modificar" value="{{$productoId->id}}">Modificar</button>
          </h5>
        </form>
      </div>
      <?php }else{
        ?>
        <div class="perfil">
          <h4>Aqui puedes editar tus productos</h4>
        </div>
        <?php
      } ?>
    </div>



</body>
@stop
@extends('footer')
