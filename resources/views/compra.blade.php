@extends('app')
@extends('header')
@section('main')
<head>
  <link rel="stylesheet" href="{{asset('css/perfil.css')}}">
</head>
<body class="carro">
  <main>
    <div class="cuerpo">
      <?php if(isset($tarjetaNueva)){ ?>
      <p>tu tarjeta es: {{$tarjetaNueva}}</p>
      <p>tu domicilio es: </p>
      <p>{{$domicilio->domicilio}}</p>
      <p>{{$domicilio->calle}}</p>
      <p>{{$domicilio->provincia}}</p>

      <?php
      foreach ($usuarioLogeado->carrito as $productoCarro) {
       ?>
       <div class="compra">
            <div class="texto">
              <img src="img/{{$productoCarro->foto}}" width="200px" height="150px">
                <h5>{{$productoCarro->nombre}}</h5>
                <p>{{$productoCarro->detalle}}</p>
                <p>${{$productoCarro->precio}}</p>
            </div>
      </div>
      <?php
     }
   }elseif(isset($tarjeta)){
     ?>
     <p>tu tarjeta es: {{$tarjeta}}</p>
     <p>tu domicilio es: </p>
     @foreach ($domicilios as $domicilio)
       <?php if($ubicacionId == $domicilio->id){
         ?>
         <p>{{$domicilio->domicilio}}</p>
         <p>{{$domicilio->calle}}</p>
         <p>{{$domicilio->provincia}}</p>
         <?php
       } ?>
     @endforeach
     <?php
     foreach ($usuarioLogeado->carrito as $productoCarro) {
      ?>
      <div class="compra">
           <div class="texto">
             <img src="img/{{$productoCarro->foto}}" width="200px" height="150px">
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
  </main>
</body>
@stop
@extends('footer')
