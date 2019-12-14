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
                      </head>
                      <body>

                      <header class="cabeza">

                          <img src="img/portada.JPG"  width="100%" height="200px;">
                              <nav class="navbar navbar-dark bg-dark">
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
                                <li class="nav-item"> <a class="nav-link active" href="carrito"> su carrito</a> </li>
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
                              </ul>



                      <form class="form-inline">
                          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                      </form>
                      <!-- Navbar content -->
                            </nav>


                      </header>


                      <div>
                      <main class="contenedor">

                      <nav class="botones">

                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Remeras
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                              <button class="dropdown-item" type="button">Action</button>
                              <button class="dropdown-item" type="button">Another action</button>
                              <button class="dropdown-item" type="button">Something else here</button>
                            </div>
                          </div>

                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Camperas
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                              <button class="dropdown-item" type="button">Action</button>
                              <button class="dropdown-item" type="button">Another action</button>
                              <button class="dropdown-item" type="button">Something else here</button>
                            </div>
                          </div>

                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Camisas
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                              <button class="dropdown-item" type="button">Action</button>
                              <button class="dropdown-item" type="button">Another action</button>
                              <button class="dropdown-item" type="button">Something else here</button>
                            </div>
                          </div>

                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Accesorios
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                              <button class="dropdown-item" type="button">Action</button>
                              <button class="dropdown-item" type="button">Another action</button>
                              <button class="dropdown-item" type="button">Something else here</button>
                            </div>
                          </div>

                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Trajes
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                              <button class="dropdown-item" type="button">Action</button>
                              <button class="dropdown-item" type="button">Another action</button>
                              <button class="dropdown-item" type="button">Something else here</button>
                            </div>
                          </div>

                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Indumentaria
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                              <button class="dropdown-item" type="button">Action</button>
                              <button class="dropdown-item" type="button">Another action</button>
                              <button class="dropdown-item" type="button">Something else here</button>
                            </div>
                          </div>

                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Cinturones
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                              <button class="dropdown-item" type="button">Action</button>
                              <button class="dropdown-item" type="button">Another action</button>
                              <button class="dropdown-item" type="button">Something else here</button>
                            </div>
                          </div>
                      </nav>

                      <section class="foto">
                        @foreach ($productos as $producto)
                          <div class="card" >
                          <img src="img/<?php echo $producto->foto;?>" class="card-img-top" alt="" width="242px" height="185px;" data-remera="remeraa1">
                          <!-- <img class="special" src="img/img-nuevo.png" alt="plato nuevo"> -->
                          <div class="card-body">
                            <h5 class="card-title">{{$producto["nombre"]}}</h5>
                            <h6 class="card-text">{{$producto["precio"]}}</h6>
                            <form class="" action="mostrarMas" method="get">
                              {{csrf_field()}}
                                <button type="submit" name="verMas" value="{{$producto["id"]}}" class="btn btn-primary">ver mas</button>
                            </form>
                            <?php if (isset($usuarioLogeado)){ ?>
                            <form action="carrito" class="carro" method="post">
                              {{csrf_field()}}
                              <button type="submit" name="incrementar" value="{{$producto["id"]}}" class="btn btn-primary fas fa-cart-plus carrito">carrito</button>
                            </form>
                            <?php }else{

                              ?>

                              <a class="btn btn-primary" href="login" role="button">carrito</a>
                              <?php

                            } ?>
                          </div>
                        </div>
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
