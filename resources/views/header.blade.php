@section('header')
  <header class="cabeza">
      <img src="{{asset('img/portada.JPG')}}"  width="100%" height="200px;">
          <nav class="navbar navbar-dark bg-dark">
            <ul class="nav">
            <li class="nav-item">
              <a class="nav-link active" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active"  href="FQP.php">Preguntas Frecuentes</a>
            </li>
            <li class="nav-item">
              <?php if (isset($_SESSION["logeado"]) && $_SESSION["logeado"] == true) {

              }else{ ?>
              <a class="nav-link active"  href="register">Registro</a>
            <?php } ?>
            </li>
            <li class="nav-item">
              <?php if (isset($_SESSION["logeado"]) && $_SESSION["logeado"] == true) {

              }else{ ?>
              <a class="nav-link active"  href="login">Login</a>
            <?php } ?>
            </li>
            <li class="nav-item">
              <a class="nav-link active"  href="contacto.php">Contactos</a>
            </li>
            <li class="nav-item">
              <?php if (isset($_SESSION["logeado"])){
                      if ($_SESSION["logeado"] == true){ ?>
                        <a class="nav-link active" href="perfil.php">hola <?php echo $_SESSION["name"]; ?></a>
                <?php }else {

                      }
                    }else{

                    }?>
            </li>

          </ul>
        </nav>


  </header>
@stop
