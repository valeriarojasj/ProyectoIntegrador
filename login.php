<?php
require_once('funciones.php');
$errorLogin="";
$password="";
$email="";
if(isset($_POST["mantenermeLogeado"])){
  header('location:pagina-principal.php');
}
if(isset($_POST["email"]) && isset($_POST["password"])){
  $errorLogin=logIn($_POST["email"],$_POST["password"]);
  $email=$_POST["email"];
}
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Iniciar Sesion</title>
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
              <a class="nav-link" href="conocenos.php">Conócenos<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="FAQ.php">Preguntas Frecuentes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactanos.php">Contáctanos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="registro.php">Regístrate</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="login.php">Iniciar Sesión</a>
            </li>
          </ul>
        </div>
      </nav>
     </header>


     <div class="container">
       <h2>Bienvenida, para continuar debes ingresar tu email y contraseña</h2>
       <form method='post' action='login.php'>
         <div class="row">
           <div class="col-lg-6 col-xl-6 col-md-6 col-sm-10 col-10  mx-auto fondoFormulario">
             <div class="form-group">
               <label for="email">Email</label>
               <input name="email" type="email" class="form-control" placeholder="Tu email" value="<?=$email?>" required>
               <small id="email" class="form-text text-muted"></small>
             </div>
             <div class="form-group">
               <label for="inputPassword1">Contraseña</label>
               <input  name="password" type="password" class="form-control" id="inputPassword1" placeholder="Tu contraseña" value="<?=$password?>" required>
               <small id="passwordHelp" class="form-text text-muted"><?=$errorLogin?></small>
             </div>
             <div class="form-group form-check">
               <input name="mantenermeLogeado" type="checkbox" class="form-check-input" id="check1">
               <label class="form-check-label" for="check1">Mantenerme logueado</label>
             </div>
             <a class =colorAzul href="#">¿Olvidó su contraseña?</a>
             <button type="submit" class="btn btn-primary">Ingresar</button>
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
