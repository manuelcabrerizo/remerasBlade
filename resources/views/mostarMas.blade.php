@extends('app')
@extends('header')
@section('main')
  <head>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
  </head>
  <main class="contenedor">
  <nav class="botones">

      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle boton7" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Remeras
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <button class="dropdown-item" type="button">Action</button>
          <button class="dropdown-item" type="button">Another action</button>
          <button class="dropdown-item" type="button">Something else here</button>
        </div>
      </div>

      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle boton7" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Camperas
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <button class="dropdown-item" type="button">Action</button>
          <button class="dropdown-item" type="button">Another action</button>
          <button class="dropdown-item" type="button">Something else here</button>
        </div>
      </div>

      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle boton7" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Camisas
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <button class="dropdown-item" type="button">Action</button>
          <button class="dropdown-item" type="button">Another action</button>
          <button class="dropdown-item" type="button">Something else here</button>
        </div>
      </div>

      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle boton7" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Accesorios
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <button class="dropdown-item" type="button">Action</button>
          <button class="dropdown-item" type="button">Another action</button>
          <button class="dropdown-item" type="button">Something else here</button>
        </div>
      </div>

      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle boton7" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Trajes
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <button class="dropdown-item" type="button">Action</button>
          <button class="dropdown-item" type="button">Another action</button>
          <button class="dropdown-item" type="button">Something else here</button>
        </div>
      </div>

      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle boton7" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Indumentaria
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <button class="dropdown-item" type="button">Action</button>
          <button class="dropdown-item" type="button">Another action</button>
          <button class="dropdown-item" type="button">Something else here</button>
        </div>
      </div>

      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle boton7" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Cinturones
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <button class="dropdown-item" type="button">Action</button>
          <button class="dropdown-item" type="button">Another action</button>
          <button class="dropdown-item" type="button">Something else here</button>
        </div>
      </div>


      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle boton7" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ofertas
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
          <button class="dropdown-item" type="button">Action</button>
          <button class="dropdown-item" type="button">Another action</button>
          <button class="dropdown-item" type="button">Something else here</button>
        </div>
      </div>



</nav>
@foreach ($productos as $producto)
  @if ($producto->id == $productoId)
    <div class="row no-gutters bg-light position-relative">
      <div class="col-md-6 mb-md-0 p-md-4">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/<?php echo $producto->foto;?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/<?php echo $producto->foto;?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/<?php echo $producto->foto;?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/<?php echo $producto->foto;?>" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

      </div>
      <div class="col-md-6 position-static p-4 pl-md-0">
        <h2>{{$producto->nombre}}</h2>
        <h4>${{$producto->precio}}</h4>
        <h6 class="mt-0">Descripción:</h6>
        <p>{{$producto->detalle}}</p>
        <p>color: {{$producto->color}}</p>
        <p>talle: {{$producto->talle}}</p>


        <a class="btn btn-dark carrito" href="home" role="button">Volver</a>
        <?php if (isset($usuarioLogeado)){ ?>
        <form action="carritoFinal" class="carro" method="post">
          {{csrf_field()}}
          <button type="submit" name="incrementar" value="{{$producto["id"]}}" class="btn btn-dark carrito">comprar</button>
        </form>
        <?php }else{
          ?>
          <form action="carritoFinal" class="carro" method="post">
            {{csrf_field()}}
            <button type="submit" name="incrementar2" value="{{$producto["id"]}}" class="btn btn-dark carrito">comprar</button>
          </form>
          <?php
        } ?>
      </div>
    </div>
    </main>
        <?php
        foreach ($preguntas as $pregunta) {
          if($productoId == $pregunta->producto_id){
        ?><div class="pregunta">
         <div class="cadaPregunta">
           <?php
           foreach ($usuarios as $usuario) {
             if($pregunta->user_id == $usuario->id){
               ?> <b>{{$usuario->name}}</b> <?php
             }
           }
            ?>
          <p>{{$pregunta->contenido}}</p>
          <?php if(isset($usuarioLogeado) && $usuarioLogeado->id == $producto->user_id){ ?>
            <form class="" action="guardarRespuesta" method="post">
              {{csrf_field()}}
              <input class="invisible" type="text" name="productoId" value="{{$producto->id}}">
              <input class="invisible" type="text" name="preguntaId" value="{{$pregunta->id}}">
              <input type="text" name="respuesta" value="">
              <button type="submit" name="button">Responder</button>
            </form>
            <?php } ?>
          </div>
          <?php
          foreach ($respuestas as $respuesta) {
            if($respuesta->pregunta_id == $pregunta->id){
            ?> <div class="cadaRespuesta">
              <p>{{$respuesta->contenido}}</p>
            </div> <?php
            }
          }
          ?>
             <?php
          }
          ?> </div> <?php
        }
        ?>
      <div class="pregunta">
        <?php if(isset($usuarioLogeado) && $usuarioLogeado->id != $producto->user_id){ ?>
        <form class="" action="mostrarMasPregunta" method="post">
          {{csrf_field()}}
          <input class="invisible" type="text" name="productoId" value="{{$producto->id}}">
          <input type="text" name="pregunta" value="" class="preguntar">
          <button type="submit" name="button">Enviar</button>
        </form>
        <?php } ?>
      </div>
  @endif
@endforeach
@stop
@extends('footer')
