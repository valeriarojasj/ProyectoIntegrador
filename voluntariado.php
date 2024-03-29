<?php
require_once('funciones/autoload.php');
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- bootstrap css stylesheet link antes de todos los demas stylesheet links-->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!-- script para fontawesome version 5 usando kit con codigo personal para mantener la ultima actualizacion-->
<script src="https://kit.fontawesome.com/dd0322cf66.js"></script>
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Chilanka|Mansalva&display=swap" rel="stylesheet">
<!-- link a mi css-->
  <link rel="stylesheet" href="css/voluntariado.css">
  </head>
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
          <li class="nav-item">
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
                <a class="nav-link  active dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-hand-holding-heart icono"><span class=textoIcono><br>Quiero ayudar</span></i></a>
              <div class="dropdown-menu dropdown-menu-xl-right dropdown-menu-lg-right dropdown-menu-md-right">
                <a class="dropdown-item" href="donaciones.php">Dona</a>
                <a class="dropdown-item" href="voluntariado.php">Participa</a>
              </div>

          </li>

          <li class="nav-item dropdown nav-item">

      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user icono"><span class=textoIcono><br>Mi Perfil</span></i></a>
      <div class="dropdown-menu dropdown-menu-xl-right dropdown-menu-lg-right dropdown-menu-md-right">
        <a class="dropdown-item" href="perfil.php">Ver Mi perfil</a>
        <a class="dropdown-item" href="#">Editar Mi Perfil</a>
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
<body>
<div class="container-fluid">


<div class="row">

<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">


<h1 class="h1" id="tituloVoluntariado">En donde puedo ayudar?</h1>



</div>
</div>
<div class="row">



  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
    <div class="list-group dropright">
      <button type="button" class="btn btn-primary">Quiero ayudar a:</button>
        </div>
    <div class="list-group dropright">
      <button type="button" class="list-group-item list-group-item-action btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Niños y Adolescentes</button>
        <div class="dropdown-menu jovenes">
          <p>
            <input type="checkbox" name="voluntariado" value="NJ_0-3"> 0 a 3 años
            <br>
            <input type="checkbox" name="voluntariado" value="NJ_4-6"> 4 a 6 años
            <br>
            <input type="checkbox" name="voluntariado" value="NJ_7-12"> 7 a 12 años
            <br>
            <input type="checkbox" name="voluntariado" value="NJ_13-17"> 13 a 17 años
          </p>
      </div>
    </div>

    <div class="list-group dropright">
      <button type="button" class="list-group-item list-group-item-action btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Personas mayores</button>
        <div class="dropdown-menu mayores">
          <p>
      <input type="checkbox" name="voluntariado" value="May_mayores"> Personas Mayores


    </p>

  </div>
  </div>
  <div class="list-group dropright">
  <button type="button" class="list-group-item list-group-item-action btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Familia</button>
  <div class="dropdown-menu familia">
    <p>
      <input type="checkbox" name="voluntariado" value="Fam_AS"> Asistencia Social
      <br>
      <input type="checkbox" name="voluntariado" value="Fam_Vivienda"> Vivienda
    </p>

  </div>
</div>
<div class="list-group dropright">
  <button type="button" class="list-group-item list-group-item-action btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Comedores</button>
  <div class="dropdown-menu comedores">
    <p>
      <input type="checkbox" name="voluntariado" value="Comedores_Ninos"> Niños
      <br>
      <input type="checkbox" name="voluntariado" value="Comedores_Adultos"> Adultos
    </p>

  </div>
</div>
<div class="list-group dropright">
  <button type="button" class="list-group-item list-group-item-action btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Educación</button>
  <div class="dropdown-menu educacion">
    <p>
      <input type="checkbox" name="voluntariado" value="Edu_AE"> Apoyo Escolar
      <br>
      <input type="checkbox" name="voluntariado" value="Edu_talleres"> Talleres
      <br>
      <input type="checkbox" name="voluntariado" value="Edu_cursos"> Cursos
    </p>
</div>
  </div>
  <div class="list-group dropright">
  <button type="button" class="list-group-item list-group-item-action btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Salud</button>
  <div class="dropdown-menu salud">
    <p>
      <input type="checkbox" name="voluntariado" value="S_adicciones"> Adicciones
      <br>
      <input type="checkbox" name="voluntariado" value="S_Enfermedades"> Enfermedades
      <br>
      <input type="checkbox" name="voluntariado" value="S_otros"> Otros
    </p>

  </div>
  </div>

<div class="list-group dropright">
  <button type="button" class="list-group-item list-group-item-action btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Personas con Discapacidad</button>
  <div class="dropdown-menu discap">
    <p>
        <input type="checkbox" name="voluntariado" value=" Disc_Ninos"> Niños
        <br>
        <input type="checkbox" name="voluntariado" value="Disc_Adultos"> Adultos
      </p>
</div>

  </div>
<div class="list-group dropright">
  <button type="button" class="list-group-item list-group-item-action btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Indigencia</button>
  <div class="dropdown-menu indig">
    <p>
      <input type="checkbox" name="voluntariado" value="Ind_Indigencia"> Indigencia
    </p>
</div>
  </div>
<div class="list-group dropright">
  <button type="button" class="list-group-item list-group-item-action btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Reinserción Social</button>
  <div class="dropdown-menu reinsercion">
    <p>
      <input type="checkbox" name="voluntariado" value="RI carceles"> Cárceles
      <br>
      <input type="checkbox" name="voluntariado" value="RO otros"> Otros
    </p>
  </div>
  </div>
<div class="list-group dropright">
  <button type="button" class="list-group-item list-group-item-action btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Medio Ambiente</button>
  <div class="dropdown-menu ambiente">
    <p>
      <input type="checkbox" name="voluntariado" value="Medio_Ambiente"> Medio Ambiente
    </p>
  </div>
  </div>
<div class="list-group dropright">
  <button type="button" class="list-group-item list-group-item-action btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Animales</button>
  <div class="dropdown-menu animales">
    <p>
      <input type="checkbox" name="voluntariado" value="Animales"> Animales
    </p>
</div>
  </div>
  </div>
    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2">
      </div>

  <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
    <div class="buscador mb-3">
      <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Buscar en mi zona" aria-label="Search">
          <button class="btn btn-primary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
      </form>
    </div>

    <div class="embed-responsive embed-responsive-1by1">

  <iframe class = "embed-responsive-item " src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.7614881508416!2d-58.39716428459162!3d-34.610192265348026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccac148b8d1a1%3A0x4959224ff35a0c72!2sTecho%20Buenos%20Aires!5e0!3m2!1sen!2sar!4v1568343718054!5m2!1sen!2sar" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>
</div>

<footer>



</footer>
</div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    </body>
  </html>
