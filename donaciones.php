<?php
session_start();
require_once("funciones.php");
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
  <link rel="stylesheet" href="css/donaciones.css">
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
  <h1 class="text-center">Encuentra a quién puedes donar los diferentes tipos de artículos</h1>

<div class="row">


  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
    <div class="list-group">
      <button type="submit" class="btn btn-primary rounded-top">Tipos de donaciones</button>
        </div>
    <div class="list-group dropright">
      <button type="button" class="list-group-item list-group-item-action btn btn-secondary dropdown-toggle rounded-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Alimentos</button>
        <div class="dropdown-menu jovenes">
          <p class="mb-0">
            <input type="checkbox" name="voluntariado" value="ALIM_LP"> Leche en polvo
            <br>
            <input type="checkbox" name="voluntariado" value="ALIM_LE"> Leche entera
            <br>
            <input type="checkbox" name="voluntariado" value="ALIM_NP"> No perecederos
            <br>
            <input  type="checkbox" name="voluntariado" value="ALIM_P"> Perecederos
          </p>
      </div>
    </div>

    <div class="list-group dropright">
      <button type="button" class="list-group-item list-group-item-action btn btn-secondary dropdown-toggle rounded-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Artículos para bebés</button>
        <div class="dropdown-menu mayores">
        <p class="mb-0">
            <input type="checkbox" name="voluntariado" value="bebe_panal"> Pañales
            <br>
            <input type="checkbox" name="voluntariado" value="bebe_otros"> Otros (Cochecito,cuna, etc.)

          </p>

  </div>
  </div>
  <div class="list-group dropright">
  <button type="button" class="list-group-item list-group-item-action btn btn-secondary dropdown-toggle rounded-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cocina</button>
  <div class="dropdown-menu familia">
    <p class="mb-0">
      <input type="checkbox" name="voluntariado" value="Cocina_Art"> Artículos de cocina
      <br>
      <input type="checkbox" name="voluntariado" value="Cocina_Elec"> Electrodomésticos
    </p>

  </div>
</div>
<div class="list-group dropright">
  <button type="button" class="list-group-item list-group-item-action btn btn-secondary dropdown-toggle rounded-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Colchones y frazadas</button>
  <div class="dropdown-menu comedores">
    <p class="mb-0">
      <input type="checkbox" name="voluntariado" value="Colchones"> Colchones
      <br>
      <input type="checkbox" name="voluntariado" value="Frazadas"> Frazadas
      <br>
      <input type="checkbox" name="voluntariado" value="Sábanas"> Sábanas
    </p>

  </div>
</div>
<div class="list-group dropright">
  <button type="button" class="list-group-item list-group-item-action btn btn-secondary dropdown-toggle rounded-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Libros</button>
  <div class="dropdown-menu educacion">
  <p class="mb-0">
      <input type="checkbox" name="voluntariado" value="Libros_E"> Libros Escolares
      <br>
      <input type="checkbox" name="voluntariado" value="Libros_IJ"> Infantiles/Juveniles
      <br>
      <input type="checkbox" name="voluntariado" value="Libros_O"> Otros
    </p>
</div>
  </div>
  <div class="list-group dropright">
  <button type="button" class="list-group-item list-group-item-action btn btn-secondary dropdown-toggle rounded-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Muebles</button>
  <div class="dropdown-menu salud">
    <p class="mb-0">
      <input type="checkbox" name="voluntariado" value="S_adicciones"> Bibliotecas y Armarios
      <br>
      <input type="checkbox" name="voluntariado" value="S_Enfermedades"> Camas
      <br>
      <input type="checkbox" name="voluntariado" value="S_Enfermedades"> Mesas y Sillas
      <br>
      <input type="checkbox" name="voluntariado" value="S_otros"> Otros
    </p>

  </div>
  </div>

<div class="list-group dropright">
  <button type="button" class="list-group-item list-group-item-action btn btn-secondary dropdown-toggle rounded-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Recreación</button>
  <div class="dropdown-menu discap">
  <p class="mb-0">
        <input type="checkbox" name="voluntariado" value="Rec_Dep"> Articulos deportivos
        <br>
        <input type="checkbox" name="voluntariado" value="Rec_Mus"> Instrumentos Musicales
        <br>
        <input type="checkbox" name="voluntariado" value="Rec_Jug"> Juguetes
        <br>
        <input type="checkbox" name="voluntariado" value="Rec_Arte"> Materiales para arte
      </p>
</div>

  </div>
<div class="list-group dropright">
  <button type="button" class="list-group-item list-group-item-action btn btn-secondary dropdown-toggle rounded-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Ropa y calzado</button>
  <div class="dropdown-menu indig">
    <p class="mb-0">
      <input type="checkbox" name="voluntariado" value="Ropa_bb"> Bebés
      <br>
      <input type="checkbox" name="voluntariado" value="Ropa_Nino"> Niños
      <br>
      <input type="checkbox" name="voluntariado" value="Ropa_Nina"> Niñas
      <br>
      <input type="checkbox" name="voluntariado" value="Ropa_Muj"> Mujeres
      <br>
      <input type="checkbox" name="voluntariado" value="Ropa_Hom"> Hombres
      <br>
    </p>
</div>
  </div>
<div class="list-group dropright">
  <button type="button" class="list-group-item list-group-item-action btn btn-secondary dropdown-toggle rounded-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Salud</button>
  <div class="dropdown-menu reinsercion">
  <p class="mb-0">
      <input type="checkbox" name="voluntariado" value="S_Med"> Medicinas
      <br>
      <input type="checkbox" name="voluntariado" value="S_PAux"> Primeros auxilios
      <br>
      <input type="checkbox" name="voluntariado" value="S_Sang"> Sangre
      <br>
      <input type="checkbox" name="voluntariado" value="S_0tros"> Otros
    </p>
  </div>
  </div>
<div class="list-group dropright">
  <button type="button" class="list-group-item list-group-item-action btn btn-secondary dropdown-toggle rounded-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tecnología</button>
  <div class="dropdown-menu ambiente">
    <p class="mb-0">
      <input type="checkbox" name="voluntariado" value="T_Tab"> Tabletas
      <br>
      <input type="checkbox" name="voluntariado" value="T_Comp"> Computadoras
      <br>
      <input type="checkbox" name="voluntariado" value="T_EqS"> Equipos de Sonido
      <br>
      <input type="checkbox" name="voluntariado" value="T_TelCel"> Telefonos y celulares
      <br>
      <input type="checkbox" name="voluntariado" value="T_CamV"> Camaras fotográficas y equipos de video
      <br>
      <input type="checkbox" name="voluntariado" value="T_TV"> TV
      <br>
      <input type="checkbox" name="voluntariado" value="T_TV"> Otros
    </p>
  </div>
  </div>
<div class="list-group dropright">
  <button type="button" class="list-group-item list-group-item-action btn btn-secondary dropdown-toggle rounded-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Útiles Escolares</button>
  <div class="dropdown-menu utiles">
  <p class="mb-0">
      <input type="checkbox" name="voluntariado" value="UE_Utiles"> Útiles escolares
    </p>
</div>
  </div>

  <div class="list-group dropright">
    <button type="button" class="list-group-item list-group-item-action btn btn-secondary dropdown-toggle rounded-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Higiene y limpieza</button>
    <div class="dropdown-menu higiene">
      <p class="mb-0">
        <input type="checkbox" name="voluntariado" value="Hig"> Higiene y limpieza
      </p>
  </div>
    </div>

    <div class="list-group dropright">
      <button type="button" class="list-group-item list-group-item-action btn btn-secondary dropdown-toggle rounded-b" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Construcción</button>
      <div class="dropdown-menu construccion">
      <p class="mb-0">
          <input type="checkbox" name="voluntariado" value="T_CamV"> Materiales de construcción
          <br>
          <input type="checkbox" name="voluntariado" value="T_TV"> Pintura
        </p>
    </div>
      </div>
      </div>

  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">

  </div>
  <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Comedor ABCG</h5>
        <p class="card-text">Avenida FTA CABA Buenos Aires</p>

        <a class="card-text" href="tel:12366675"><i class="fas fa-phone-alt icono"><span class=cardTexto> + 54 1234 45 778</span></i></a>
        <br>
        <a class="card-text" href="#"><i class="fas fa-globe-americas icono"><span class=cardTexto> https://www.comedorabcg.org</span></i></a>
        <br>
        <a href="#" class="btn btn-primary cardButton">Seguir</a>
        <a href="#" class="btn btn-secondary cardButton">Articulos requeridos</a>

      </div>
    </div>
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
