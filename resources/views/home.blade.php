@extends('layouts.app')

@section('content')
{{-- <div class="container"> --}}
    {{-- <div class="row justify-content-center"> --}}
        {{-- <div class="col-md-8"> --}}
            {{-- <div class="card"> --}}
                {{-- <div class="card-header">Dashboard</div> --}}

                {{-- <div class="card-body"> --}}
                    {{-- @if (session('status')) --}}
                        {{-- <div class="alert alert-success" role="alert"> --}}
                            {{-- {{ session('status') }} --}}
                        {{-- </div> --}}
                    {{-- @endif --}}

                    {{-- You are logged in! --}}


                      <head>
                        <link rel="stylesheet" href="{{asset('css/style.css')}}">
                        <link rel="stylesheet" href="{{asset('css/header1.css')}}">
                      </head>
                      <body>

                        <header class="cabeza2">
                          <div class="pos-f-t">
                            <div class="collapse" id="navbarToggleExternalContent">
                              <div class="p-4">
                                <span class="text-muted">
                                  <ul class="menu">
                                    <li class="nav-item">
                                      <a class="nav-link active" href="home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link active"  href="faq">Preguntas Frecuentes</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link active"  href="contacto">Contactos</a>
                                    </li>
                                    <?php if(isset($usuarioLogeado)){ ?>
                                  <li class="nav-item"> <a class="nav-link active" href="carrito"> Tu Carrito</a> </li>
                                  <?php   }else{

                                          } ?>
                                    @guest
                                        <li class="nav-item">
                                            <a class="nav-link active" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link active" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="nav-item">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle nombreUsuario" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>
                        ​
                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                              <a class="dropdown-item" href="perfil">perfil</a>
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
                        ​
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest


                                  </ul>
                                </span>

                                </div>
                              </div>
                              <nav class="navbar navbar-dark">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                                  <span class="navbar-toggler-icon"></span>
                                </button>
                              </nav>
                            </div>
                        </header>









                      <header class="cabeza">

                          <img src="img/boruto-naruto-the-movie-wallpaper-hd-2048x1080-327497.jpg"  width="100%" height="200px;">
                              <nav class="navbar">
                                <ul class="nav">
                                  <li class="nav-item">
                                    <a class="nav-link active" href="home">Home</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link active"  href="faq">Preguntas Frecuentes</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link active"  href="contacto">Contactos</a>
                                  </li>
                                  <?php if(isset($usuarioLogeado)){ ?>
                                <li class="nav-item"> <a class="nav-link active" href="carrito"> Tu Carrito</a> </li>

                                <?php   }else{

                                        } ?>
                                        @guest
                                            <li class="nav-item">
                                                <a class="nav-link active" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                            @if (Route::has('register'))
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li>
                                            @endif
                                        @else

                                            <li class="nav-item">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }} <span class="caret"></span>
                                                </a>
                            ​
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                  <a class="dropdown-item" href="perfil">perfil</a>
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                       onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>
                            ​
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>

                                        @endguest
                                        <li>  <form class="form-inline" action="/buscar" method="get">
                                            {{csrf_field()}}
                                              <input class="form-control mr-sm-2" name="q" type="search" placeholder="Search" aria-label="Search">
                                              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                          </form></li>
                              </ul>



                    
                      <!-- Navbar content -->
                            </nav>


                      </header>


                      <div>

                      <main class="contenedor">
                      <nav class="botones">
                          <?php foreach ($categorias as $categoria) {
                            ?>
                            <div class="dropdown">
                              <form class="" action="homeCategoria{{$categoria->id}}" method="get">
                                <button value="{{$categoria->id}}" class="btn btn-secondary dropdown-toggle boton7" type="submit" name="categoria" aria-haspopup="true" aria-expanded="false">{{$categoria->categoriaNombre}}</button>
                              </form>
                            </div>
                            <?php
                          } ?>

                      </nav>

                      <section class="foto">
                          @foreach ($productos as $producto)
                            <?php
                            if($remeras == false && $camperas == false && $camisas == false && $accesorios == false && $trajes == false && $indumentaria == false && $cinturones == false && isset($buscar) == false){
                              ?>

                            <div class="card" >
                            <img src="img/<?php echo $producto->foto;?>" class="card-img-top" alt="" width="242px" height="185px;" data-remera="remeraa1">
                            <!-- <img class="special" src="img/img-nuevo.png" alt="plato nuevo"> -->
                            <div class="card-body">
                              <h5 class="card-title">{{$producto["nombre"]}}</h5>
                              <h6 class="card-text">${{$producto["precio"]}}</h6>
                              <form class="" action="/producto{{$producto["id"]}}" method="get">
                                {{csrf_field()}}
                                  <button type="submit" name="verMas" value="{{$producto["id"]}}" class="btn btn-dark carrito">Ver mas</button>
                              </form>
                              <?php if (isset($usuarioLogeado)){ ?>
                              <form action="carrito" class="carro" method="post">
                                {{csrf_field()}}
                                <button type="submit" name="incrementar" value="{{$producto["id"]}}" class="btn btn-dark carrito">Carrito</button>
                              </form>
                              <?php }else {

                                ?>

                                <a class="btn btn-dark carrito" href="login" role="button">Carrito</a>
                                <?php

                              }
                        ?>   </div>
                              </div> <?php

                        }elseif($remeras == true || $camperas == true || $camisas == true || $accesorios == true || $trajes == true || $indumentaria == true || $cinturones == true && isset($buscar) == false){

                              if($producto->categoria_id == $categoriaId){
                                ?> <div class="card" >
                                <img src="img/<?php echo $producto->foto;?>" class="card-img-top" alt="" width="242px" height="185px;" data-remera="remeraa1">
                                <!-- <img class="special" src="img/img-nuevo.png" alt="plato nuevo"> -->
                                <div class="card-body">
                                  <h5 class="card-title">{{$producto["nombre"]}}</h5>
                                  <h6 class="card-text">${{$producto["precio"]}}</h6>
                                  <form class="" action="/producto{{$producto["id"]}}" method="get">
                                    {{csrf_field()}}
                                      <button type="submit" name="verMas" value="{{$producto["id"]}}" class="btn btn-dark carrito">Ver mas</button>
                                  </form>
                                  <?php if (isset($usuarioLogeado)){ ?>
                                  <form action="carrito" class="carro" method="post">
                                    {{csrf_field()}}
                                    <button type="submit" name="incrementar" value="{{$producto["id"]}}" class="btn btn-dark carrito">Carrito</button>
                                  </form>
                                  <?php }else {

                                    ?>

                                    <a class="btn btn-dark carrito" href="login" role="button">Carrito</a>
                                    <?php

                                  }
                            ?>   </div>
                                  </div> <?php
                              }
                            }else{
                              if (strpos($producto->detalle, $buscar) !== false) {
                                ?>

                              <div class="card" >
                              <img src="img/<?php echo $producto->foto;?>" class="card-img-top" alt="" width="242px" height="185px;" data-remera="remeraa1">
                              <!-- <img class="special" src="img/img-nuevo.png" alt="plato nuevo"> -->
                              <div class="card-body">
                                <h5 class="card-title">{{$producto["nombre"]}}</h5>
                                <h6 class="card-text">${{$producto["precio"]}}</h6>
                                <form class="" action="/producto{{$producto["id"]}}" method="get">
                                  {{csrf_field()}}
                                    <button type="submit" name="verMas" value="{{$producto["id"]}}" class="btn btn-dark carrito">Ver mas</button>
                                </form>
                                <?php if (isset($usuarioLogeado)){ ?>
                                <form action="carrito" class="carro" method="post">
                                  {{csrf_field()}}
                                  <button type="submit" name="incrementar" value="{{$producto["id"]}}" class="btn btn-dark carrito">Carrito</button>
                                </form>
                                <?php }else {

                                  ?>

                                  <a class="btn btn-dark carrito" href="login" role="button">Carrito</a>
                                  <?php

                                }
                          ?>   </div>
                                </div> <?php
                                }
                            } ?>
                          @endforeach

                      </section>
                      </div>
                      </main>
                      </body>
                {{-- </div> --}}
            {{-- </div> --}}
        {{-- </div> --}}
    {{-- </div> --}}
{{-- </div> --}}
@endsection
@extends('footer')
