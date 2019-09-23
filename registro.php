<!DOCTYPE html>
<?php
require_once('funciones.php');
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <title>Registro</title>
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- bootstrap css stylesheet link antes de todos los demas stylesheet links-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- script para fontawesome version 5 usando kit con codigo personal para mantener la ultima actualizacion-->
<script src="https://kit.fontawesome.com/dd0322cf66.js"></script>
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Chilanka&display=swap" rel="stylesheet">
<!-- link a mi css-->
    <link rel="stylesheet" href="css/style.css">

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
            <a class="nav-link" href="conocenos.php">Conócenos<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="FAQ.php">Preguntas Frecuentes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contactanos.php">Contáctanos</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link " href="registro.php">Regístrate</a>
          </li>

          <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Iniciar Sesion</a>
      <div class="dropdown-menu dropdown-menu-xl-right dropdown-menu-lg-right dropdown-menu-md-right Login">
        <form action="pagina-principal.php" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Email/Usuario</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Contraseña</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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

<div class="container">



<h2>Regístrate ahora!</h2>

    <form method='post' action='registro.php' enctype="multipart/form-data">
      <div class="row">
      <div class="col-lg-6 col-xl-6 col-md-6 col-sm-10 col-10  mx-auto fondoFormulario">

        <div class="form-group">
          <label for="name">Nombre</label>
          <input name="name" type="text" class="form-control" id="inputName"  placeholder="Tu nombre" value="<?=$nombre?>" required>
          <small id="nombreHelp" class="form-text text-muted"><?=$errorNombre  ?></small>
  </div>
  <div class="form-group">
    <label for="lastName">Apellido</label>
    <input name="lastName" type="text" class="form-control" id="inputLastName"  placeholder="Tu apellido" value="<?=$apellido?>" required>
    <small id="apellidoHelp" class="form-text text-muted"><?=$errorApellido  ?></small>
  </div>
  <!-- &#xf0e0 es el codigo de fontawesome para envelope icon-->
      <div class="form-group">
        <label for="email">Email</label>
        <input name="email" type="email" class="form-control" id="inputEmail1"  placeholder="&#xf0e0; user@example.com" value="<?=$email?>"required>
        <small id="emaildHelp" class="form-text text-muted"><?=$errorEmail  ?></small>
      </div>
      <div class="form-group">
        <label for="inputPassword1">Contraseña</label>
        <!-- &#xf084 es el codigo de fontawesome para key icon-->
        <input  name="inputPassword1" type="password" class="form-control" id="inputPassword1" placeholder="&#xf084; Tu contraseña" aria-describedby="emailHelp" required>
        <small id="passwordHelp" class="form-text text-muted"><?=$errorPassword  ?></small>
      </div>
      <!-- &#xf084 es el codigo de fontawesome para key icon-->
      <div class="form-group">
        <label for="confirmPassword1">Confirmar Contraseña</label>
        <input name="confirmPassword1" type="password" class="form-control" id="exampleInputPassword1" placeholder="&#xf084; Escribe nuevamente tu contraseña" aria-describedby="emailHelp" required>
        <small id="confirmHelp" class="form-text text-muted"><?=$errorConfirm  ?></small>
      </div>
      <div class="form-group">
        <input name="avatar" type="file" id="archivo" aria-describedby="archivoHelp">
        <small id="archivoHelp" class="form-text text-muted"><?=$errorArchivo  ?></small>
      </div>


      <div class="form-group form-check">
        <input name="recordar" type="checkbox" class="form-check-input" id="check1">
        <label class="form-check-label" for="check1">Recordar mi usuario y contraseña</label>
      </div>
      <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
      </div>
    </form>

</div>
  <!-- script de javascript para bootstrap  al final del body -->
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
