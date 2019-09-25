<?php
require_once('funcionHome.php');
if($_POST){
echo LogIn($_POST['email'],$_POST['password']);}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/homeStyle.css">
    <meta charset="utf-8">
    <title>home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/dd0322cf66.js"></script>
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Chilanka|Mansalva&display=swap" rel="stylesheet">
  </head>
  <body>

    <header>


    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
    <a class="navbar-brand" href="home.php"><img src="img/logo.png" alt="logoDeRedSocial"><span class="marca">Sharityx</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="conocenos.php">Conócenos <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="FAQ.php">Preguntas Frecuentes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactanos.php">Contáctanos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registro.php">Regístrate</a>
        </li>

        <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Iniciar Sesion</a>
    <div class="dropdown-menu dropdown-menu-xl-right dropdown-menu-lg-right dropdown-menu-md-right Login">
      <form action="pagina-principal.php" method="post">
  <div class="form-group">
    <label for="email">Email/Usuario</label>
    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">

  </div>
  <div class="form-group">
    <label for="password">Contraseña</label>
    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
  </div>

  <a class =colorAzul href="#">¿Olvidó su contraseña?</a>
  <button type="submit" class="btn btn-primary">Ingresar</button>

</form>
    </div>
  </li>

        </form>
          </button>
        </li>
      </ul>

    </div>
  </nav>


</header>

<main>



<div class="container-fluid contenedor">


<div class="row filas">

<div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 columnas">
    <div id="carouselExampleCaptions" class="carousel slide  " data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/actividadesVoluntarios1_1250x760.jpg" class="center-block img-fluid fotoActividades" alt="...">
          <div class="carousel-caption areaCaption d-none d-md-block ">
            <h4 >Hay muchas formas de participar</h5>
            <h2>Quieres regalar alegría a quienes mas lo necesitan?</p>
          </div>
        </div>
        <div class="carousel-item ">
          <img src="img/actividadesVoluntarios2_1250x760.jpg" class="center-block img-fluid  fotoActividades" alt="...">
          <div class="carousel-caption areaCaption d-none d-md-block ">
            <h4> y muchos proyectos sociales de donde elegir</h5>
            <h2>Quieres ayudar a conservar nuestro planeta?</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/actividadesVoluntarios3_1250x760.jpg" class="center-block img-fluid  fotoActividades" alt="...">
          <div class="carousel-caption areaCaption d-none d-md-block">
            <h4 class="titulosSlides">Unéte a Sharityx y encuentra proyectos de tu interes y personas que quieren ayudar como tú</h5>
            <h2 class= "parrafosSlides">Quieres ayudar a otros a cumplir sus sueños?</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

</div>
</div>
</div>


</div>
</main>


<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



  </body>


</html>
