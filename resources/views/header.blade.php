@section('header')
  <?php   session_start(); ?>
  <header class="cabeza">
      <img src="{{asset('img/portada.JPG')}}"  width="100%" height="200px;">
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
