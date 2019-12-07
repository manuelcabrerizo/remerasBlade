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
                        @php
                          if(isset($_SESSION["logeado"])&& $_SESSION["logeado"] == true){
                            echo "todo bien.";
                          }else if((isset($_SESSION["logeado"])&& $_SESSION["logeado"] == false)) {
                            echo "todo mal.";
                          }
                        @endphp
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
                                    <?php if (isset($usuarioLogeado)) {

                                    }else{ ?>
                                    <a class="nav-link active"  href="register">Registro</a>
                                  <?php } ?>
                                  </li>
                                  <li class="nav-item">
                                    <?php if (isset($usuarioLogeado)) {

                                    }else{ ?>
                                    <a class="nav-link active"  href="login">Login</a>
                                  <?php } ?>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link active"  href="contacto">Contactos</a>
                                  </li>
                                  <li class="nav-item">
                                    <?php if (isset($usuarioLogeado)){?>
                                              <a class="nav-link active" href="perfil">hola <?php if(isset($usuarioLogeado)){ echo $usuarioLogeado->name;}else{ } ?></a>
                                      <?php
                                          }else{

                                          }?>
                                  </li>

                                <li class="nav-item"> <a class="nav-link active" href="carrito.php"></a> </li>
                                <li><form class="" action="home.php" method="post">
                                  <input type="submit" name="reiniciar" value="reiniciar"class="btn btn-primary" >
                                </form>  </li>
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


                          <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Ofertas
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                              <button class="dropdown-item" type="button">Action</button>
                              <button class="dropdown-item" type="button">Another action</button>
                              <button class="dropdown-item" type="button">Something else here</button>
                            </div>
                          </div>





                      </nav>

                      <section class="foto">


                              <div class="card" >
                              <img src="img/productos/1.jpg" class="card-img-top" alt="" width="242px" height="185px;" data-remera="remeraa1">
                              <img class="special" src="img/img-nuevo.png" alt="plato nuevo">
                              <div class="card-body">
                                <h5 class="card-title">1</h5>
                                <h6 class="card-text">1</h6>
                                <form class="" action="funciones.php" method="post">
                                    <button type="submit" name="incrementar" value="1" class="btn btn-primary">ver mas</button>
                                </form>
                                <form action="home.php" class="carro" method="post" onSubmit="return enviado()">
                                  <button type="submit" name="incrementar" value="1" class="btn btn-primary fas fa-cart-plus"></button>
                                </form>
                                <form action="home.php" class="eliminar" method="post">
                                  <button type="submit" name="eliminar" value="1`" class="btn">eliminar</button>
                                </form>
                              </div>
                              </div>





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
