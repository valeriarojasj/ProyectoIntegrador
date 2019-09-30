<?php
require_once('funciones/autoload.php');
$errorNombre="";
$errorApellido="";
$errorEmail="";
$errorPassword="";
$errorConfirm="";
$errorArchivo="";
$avatar=null;
if($_FILES){
  $avatar=$_FILES['avatar'];
}
if($_POST){
RegistroUsuario($_POST['name'],$_POST['lastName'],$_POST['email'],$_POST['inputPassword1'],$_POST['confirmPassword1'],$avatar);
}
 ?>


 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/dd0322cf66.js"></script>
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Chilanka|Mansalva&display=swap" rel="stylesheet">
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
              <a class="nav-link" href="conocenos.php">Conócenos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="FAQ.php">Preguntas Frecuentes</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="contactanos.php">Contáctanos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registro.php">Regístrate</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Iniciar Sesion</a>
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
              <input name="name" type="text" class="form-control" id="inputName"  placeholder="Tu nombre" value="" required>
              <small id="nombreHelp" class="form-text text-muted"><?=$errorNombre?></small>
            </div>
            <div class="form-group">
              <label for="lastName">Apellido</label>
              <input name="lastName" type="text" class="form-control" id="inputLastName"  placeholder="Tu apellido" value="" required>
              <small id="apellidoHelp" class="form-text text-muted"><?=$errorApellido?></small>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input name="email" type="email" class="form-control" id="inputEmail1"  placeholder="user@example.com" value=""required>
              <small id="emaildHelp" class="form-text text-muted"><?=$errorEmail?></small>
            </div>
            <div class="form-group">
              <label for="inputPassword1">Contraseña</label>
              <input  name="inputPassword1" type="password" class="form-control" id="inputPassword1" placeholder="Tu contraseña" aria-describedby="emailHelp" required>
              <small id="passwordHelp" class="form-text text-muted"><?=$errorPassword?></small>
            </div>
            <div class="form-group">
              <label for="confirmPassword1">Confirmar Contraseña</label>
              <input name="confirmPassword1" type="password" class="form-control" id="exampleInputPassword1" placeholder="Escribe nuevamente tu contraseña" aria-describedby="emailHelp" required>
              <small id="confirmHelp" class="form-text text-muted"><?=$errorConfirm  ?></small>
            </div>
            <div class="form-group">
              <input name="avatar" type="file" id="archivo" aria-describedby="archivoHelp">
              <small id="archivoHelp" class="form-text text-muted"><?=$errorArchivo?></small>
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
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
