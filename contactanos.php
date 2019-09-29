<?php
session_start();
require_once("funciones.php");
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contactanos</title>
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
      <h2>Ponte en contacto con nosotros!</h2>
      <form>
        <div class="row">
          <div class="col-lg-6 col-xl-6 col-md-6 col-sm-10 col-10  mx-auto fondoFormulario">
            <div class="form-group">
              <label for="formControlInput1">Nombre</label>
              <input type="text" class="form-control" id="formControlInput1" placeholder="Escribe tu nombre" required>
            </div>
            <div class="form-group">
              <label for="formControlInput2">Email de contacto</label>
              <input type="email" class="form-control" id="formControlInput2" placeholder="&#xf0e0; user@example.com" required>
            </div>
            <div class="form-group">
              <label for="formControlSelect1">Motivo de contacto</label>
              <select class="form-control" id="exampleFormControlSelect1" required placeholder="Selecciona una opción">
                <option>Información general</option>
                <option>Problemas técnicos</option>
                <option>Sugerencias y Comentarios</option>
                <option>Otro</option>
              </select>
            </div>
            <div class="form-group">
              <label for="formControlTextarea1">Comentarios</label>
              <textarea class="form-control" placeholder="Escribe aqui tus comentarios, preguntas y sugerencias." id="formControlTextarea1" rows="5" required></textarea>
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
