@extends('app')
@extends('header')
@section('main')
<head>
  <link rel="stylesheet" href="{{asset('css/perfil.css')}}">
</head>
<body>
  <main>
    <div class="info">
      <h2>Mis Compras</h2>
      <p class="coment2"></p>
    </div>
    <div class="cuerpo">
        <?php
        foreach($compraUsuario as $usuario){
          if($usuario->user_id == $usuarioLogeado->id){
            ?>
            <br>
            <p class="tituloCompra">Compra: {{$usuario->created_at}}</p>
            <br>
            <br>
            <div class="productoPerfil2"> <?php
              foreach ($usuario->compras as $producto) {
                ?>
                <div class="cadaP">
                  <div class="fotoPerfil">
                    <img src="img/{{$producto->foto}}" width="242px" height="185px;">
                  </div>
                  <div class="datosPerfil">
                  <h5>{{$producto->nombre}}</h5>
                  <p>{{$producto->precio}}</p>
                </div>
                </div>
                <?php
              }
        ?> </div> <?php
          }
        }
        ?>
    </div>
  </main>
</body>
@stop
@extends('footer')
