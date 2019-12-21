@section('header')
  <?php   session_start(); ?>
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

          </ul>
        </nav>


  </header>
@stop



@section('header1')
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
@stop
