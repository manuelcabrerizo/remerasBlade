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
      <h2>Confirma tu Compra</h2>
      <p class="coment2"></p>
    </div>
      <?php if(isset($tarjetaNueva)){
        foreach ($tarjetas as $tarjeta) {
         if($tarjetaNueva == $tarjeta->id){
       ?>
       <div class="cuerpo">
         <div class="tarjetas">
           <div class="agregar">
       <b>tu tarjeta es:</b>
       <p>{{$tarjeta->numero}}</p>
       <b>tu domicilio es: </b>
       <?php
        }
      } ?>
      <p>{{$domicilio->domicilio}}</p>
      <p>{{$domicilio->calle}}</p>
      <p>{{$domicilio->provincia}}</p>
    </div>
    </div>
  </div>
  <div class="info">
    <p class="coment2"></p>
  </div>
  <div class="cuerpo">
      <?php
      foreach ($usuarioLogeado->carrito as $productoCarro) {
       ?>
       <div class="cadaP">
            <div class="fotoPerfil">
              <img src="img/{{$productoCarro->foto}}" width="242px" height="185px">
            </div>
            <div class="datosPerfil">
                <h5>{{$productoCarro->nombre}}</h5>
                <p>{{$productoCarro->detalle}}</p>
                <p>${{$productoCarro->precio}}</p>
            </div>
      </div>
      <?php
     }
     ?> </div>  <?php


   }elseif(isset($tarjeta)){
     foreach ($tarjetas as $tarjet) {
       if($tarjeta == $tarjet->id){
     ?>
     <div class="cuerpo">
       <div class="tarjetas">
         <div class="agregar">
     <b>tu tarjeta es:</b>
     <p>{{$tarjet->numero}}</p>
     <b>tu domicilio es: </b>
     <?php
      }
    }
     ?>
     @foreach ($domicilios as $domicilio)
       <?php if($ubicacionId == $domicilio->id){
         ?>
         <p>{{$domicilio->domicilio}}: {{$domicilio->calle}}</p>
         <p>{{$domicilio->provincia}}</p>
         <?php
       } ?>
     @endforeach
   </div>
   </div>
 </div>
 <div class="info">
   <p class="coment2"></p>
 </div>
 <div class="cuerpo">
     <?php
     foreach ($usuarioLogeado->carrito as $productoCarro) {
      ?>
      <div class="cadaP">
           <div class="fotoPerfil">
             <img src="img/{{$productoCarro->foto}}" width="242px" height="185px">
           </div>
           <div class="datosPerfil">
               <h5>{{$productoCarro->nombre}}</h5>
               <p>{{$productoCarro->detalle}}</p>
               <p>${{$productoCarro->precio}}</p>
          </div>
     </div>
     <?php
    }
   }
      ?>
    </div>
    <div class="botonCompar">
      <form class="" action="comprar" method="post">
        {{csrf_field()}}
        <button type="submit" name="button" class="btn btn-dark carrito">Confirmar Compra</button>
      </form>
    </div>
  </main>
</body>
@stop
@extends('footer')
