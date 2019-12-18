@extends('app')
@extends('header')
@section('main')
<head>
  <link rel="stylesheet" href="{{asset('css/perfil.css')}}">
</head>
<body>

<?php if (isset($usuarioLogeado) == false) {
  ?>    <div class="contenedor">
        <div class="info">
          <h2>Tu Perfil</h2>
          <p class="coment2"></p>
        </div>
        <div class="cuerpo">
          <p>No iniciaste Secion</p>
        </div>
      </div><?php

}elseif(isset($usuarioLogeado)){
  ?>
    <div class="contenedor">
      <div class="info">
        <h2>Tu Perfil</h2>
        <p class="coment2"></p>
      </div>
      <div class="cuerpo">
        <div class="logo">


        <img src="img/<?php echo $usuarioLogeado->foto;?>" alt="foto perfil" width="100px" height="100px">
        </div>
        <?php if($update == false){ ?>
        <div class="usuario">
              <label for="nombre">nombre:</label>
              <h5><?php echo $usuarioLogeado->name."<br>"; ?></h5>
              <?php
              ?>
              <label for="nombre">email:</label>
              <h5><?php echo $usuarioLogeado->email."<br>"; ?></h5>
              <h5>
                <a href="update" class="btn btn-dark botones carrito" role="button">Actualizar perfil</a><br>
                <a href="misCompras" class="btn btn-dark botones carrito" role="button">Mis Compras</a><br>
                <a href="mostrarCrear" class="btn btn-dark botones carrito" role="button">Crear Producto</a><br>
                <a href="misProductos" class="btn btn-dark botones carrito" role="button">Editar Productos</a>
              </h5>
              <?php


           ?>
        </div>
      <?php }else if($update == true){
        ?>    <div class="usuario">
            <ul style="color:red" class="errores">
              @foreach ($errors->all() as $error)
                <li>
                  {{$error}}
                </li>
              @endforeach
            </ul>
                <form class="update" action="/perfil" method="post" enctype="multipart/form-data">
                  {{csrf_field()}}
                      <p>
                        <label for="usuario">nombre</label><br>
                        <h5><input type="text" name="name" id="usuario" value=""></h5>
                      </p>
                      <p>
                        <label for="email">email</label><br>
                        <h5><input type="email" name="email" id="email" value=""></h5>
                      </p>
                      <p>
                        <label for="password">contrasena</label><br>
                        <h5><input type="password" name="password" id="password" value=""></h5>
                      </p>
                      <p>

                        <h5> <input  type="file" id="imagen2" name="imagen2" value=""></h5>
                      </p>
                      <h5>
                        <input class="btn btn-dark carrito" type="submit" name="update" value="update">
                      </h5>
                 </form>

              </div><?php
      }
     ?>
     <div class="info2">
       <p class="coment2"></p>
     </div>
     <h2 class="tituloProduct">Tus productos</h2>
     <div class="productoPerfil">

     @foreach ($productos as $producto)
       <?php
       if($producto->user_id == $usuarioLogeado->id){
         ?>
         <div class="cadaP">
           <div class="fotoPerfil">
             <img src="img/<?php echo $producto->foto;?>" width="242px" height="185px;">
           </div>
           <div class="datosPerfil">
             <h5>{{$producto["nombre"]}}</h5>
             <p>{{$producto["precio"]}}</p>
             <form class="" action="mostrarMas" method="get">
               {{csrf_field()}}
                 <button type="submit" name="verMas" value="{{$producto["id"]}}" class="btn btn-dark carrito">ver mas</button>
             </form>
           </div>
           </div>
         <?php
       }
       ?>
     @endforeach
     </div>
      </div>
    </div>
  <?php
}
?>
</body>
@stop
@extends('footer')
