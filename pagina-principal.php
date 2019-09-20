<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
      <script src="https://kit.fontawesome.com/dd0322cf66.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Chilanka&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/pagina-principal.css">
    <title>Inicio</title>
  </head>
  <body>
    <header>
      <div class="navegacion">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="home.php"><img src="img/logo.png" alt="logoDeRedSocial"><span class="marca">Sharityx</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="buscador">
              <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
              </form>
            </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="pagina-principal.php"><i class="fas fa-home icono"><span class=textoIcono><br>Principal</span></i></a>
              </li>

              <li class="nav-item dropdown nav-item">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="amigos.php" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-friends icono"><span class=textoIcono><br>Mis amigos</span></i></a>
                  <div class="dropdown-menu dropdown-menu-xl-right dropdown-menu-lg-right dropdown-menu-md-right">
                    <a class="dropdown-item" href="amigos.php">Ver Mis amigos</a>
                    <a class="dropdown-item" href="#">Buscar Contactos</a>
                  </div>

              </li>

              <li class="nav-item dropdown nav-item">
                    <a class="nav-link   dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-hand-holding-heart icono"><span class=textoIcono><br>Quiero ayudar</span></i></a>
                  <div class="dropdown-menu dropdown-menu-xl-right dropdown-menu-lg-right dropdown-menu-md-right">
                    <a class="dropdown-item" href="donaciones.php">Dona</a>
                    <a class="dropdown-item" href="voluntariado.php">Participa</a>
                  </div>

              </li>

              <li class="nav-item dropdown nav-item">

          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user icono"><span class=textoIcono><br>Mi Perfil</span></i></a>
          <div class="dropdown-menu dropdown-menu-xl-right dropdown-menu-lg-right dropdown-menu-md-right ">
            <a class="dropdown-item" href="perfil.php">Mi Perfil</a>
            <a class="dropdown-item" href="#">Otra Acción</a>
            <a class="dropdown-item" href="home.php">Cerrar Sesión</a>
          </div>
        </li>



        <li class="nav-item dropdown nav-item">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-comments icono"><span class=textoIcono><br>Mis mensajes</span></i></a>
      <div class="dropdown-menu dropdown-menu-xl-right dropdown-menu-lg-right dropdown-menu-md-right">
      <a class="dropdown-item" href="#">Ver Mis Mensajes</a>
      <a class="dropdown-item" href="#">Enviar Mensaje</a>
      <a class="dropdown-item" href="#">Notificaciones</a>
      </div>
      </li>

        </ul>
      </div>
      </nav>
      </div>

    </header>
    <main class="principal container-fluid">
      <div class="row">
        <div class="col-lg-3 miPerfil">
          <!--mi perfil-->
          <img src="img/voluntaria.jpg"  alt="">
          <h3>Mariana Diaz</h3>
          <h5>Experiencias:</h5> <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h4>
          <h5>Ocupación:</h5> <h4>Estudiante</h4>
          <h5>Residencia:</h5> <h4>Lima</h4>
        </div>
        <div class="col-lg-6 novedades">
          <!--noticias-->
          <h2>Ultimas novedades</h2>
          <div class="novedad">
           <img src="img/voluntaria.jpg" class="imagenAmigo"alt="">
           <h5>Mariana Diaz</h5>
           <img src="img/posteo.jpg" class="imagenPosteo" alt="">
           <p>Explicación del proyecto</p>
           <h5>Cantidad de voluntarios: 12</h5>
           <h5>Lugar: Lima</h5>
           <h5>Detalles: se necesitan preferentemente maestras y psicologas</h5>
           <h5>Deja tu comentario<ion-icon name="chatbubbles"></ion-icon></h5>
          </div>
          <div class="novedad">
           <img src="img/voluntaria.jpg" class="imagenAmigo" alt="">
           <h5>Mariana Diaz</h5>
           <img src="img/posteo.jpg" class="imagenPosteo" alt="">
           <p>Explicación del proyecto</p>
           <h5>Cantidad de voluntarios: 12</h5>
           <h5>Lugar: Lima</h5>
           <h5>Detalles: se necesitan preferentemente maestras y psicologas</h5>
           <h5>Deja tu comentario<ion-icon name="chatbubbles"></ion-icon></h5>
          </div>
          <div class="novedad">
           <img src="img/voluntaria.jpg" class="imagenAmigo" alt="">
           <h5>Mariana Diaz</h5>
           <img src="img/posteo.jpg" class="imagenPosteo" alt="">
           <p>Explicación del proyecto</p>
           <h5>Cantidad de voluntarios: 12</h5>
           <h5>Lugar: Lima</h5>
           <h5>Detalles: se necesitan preferentemente maestras y psicologas</h5>
           <h5>Deja tu comentario<ion-icon name="chatbubbles"></ion-icon></h5>
          </div>
          <div class="novedad">
           <img src="img/voluntaria.jpg" class="imagenAmigo" alt="">
           <h5>Mariana Diaz</h5>
           <img src="img/posteo.jpg" class="imagenPosteo" alt="">
           <p>Explicación del proyecto</p>
           <h5>Cantidad de voluntarios: 12</h5>
           <h5>Lugar: Lima</h5>
           <h5>Detalles: se necesitan preferentemente maestras y psicologas</h5>
           <h5>Deja tu comentario<ion-icon name="chatbubbles"></ion-icon></h5>
          </div>
          <div class="novedad">
           <img src="img/voluntaria.jpg" class="imagenAmigo" alt="">
           <h5>Mariana Diaz</h5>
           <img src="img/posteo.jpg" class="imagenPosteo" alt="">
           <p>Explicación del proyecto</p>
           <h5>Cantidad de voluntarios: 12</h5>
           <h5>Lugar: Lima</h5>
           <h5>Detalles: se necesitan preferentemente maestras y psicologas</h5>
           <h5>Deja tu comentario<ion-icon name="chatbubbles"></ion-icon></h5>
          </div>
          <div class="novedad">
           <img src="img/voluntaria.jpg" class="imagenAmigo" alt="">
           <h5>Mariana Diaz</h5>
           <img src="img/posteo.jpg" class="imagenPosteo" alt="">
           <p>Explicación del proyecto</p>
           <h5>Cantidad de voluntarios: 12</h5>
           <h5>Lugar: Lima</h5>
           <h5>Detalles: se necesitan preferentemente maestras y psicologas</h5>
           <h5>Deja tu comentario<ion-icon name="chatbubbles"></ion-icon></h5>
          </div>
        </div>
        <div class="col-lg-2 publicidad">
          <!--publicidad-->
          <div class="avisoPublicitario">
            <a href="#"><img src="img/publicidad.png" alt=""></a>
          </div>
          <div class="avisoPublicitario">
            <a href="#"><img src="img/publicidad.png" alt=""></a>
          </div>
          <div class="avisoPublicitario">
            <a href="#"><img src="img/publicidad.png" alt=""></a>
          </div>
          <div class="avisoPublicitario">
            <a href="#"><img src="img/publicidad.png" alt=""></a>
          </div>
        </div>
      </div>
    </main>
<footer>



</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </body>
</html>