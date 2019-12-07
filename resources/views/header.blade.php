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

          </ul>
        </nav>


  </header>
@stop
