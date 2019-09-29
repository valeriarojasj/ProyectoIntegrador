
<?php
session_start();
/*if(!isset($_SESSION["email"])){
header('location:login.php');
}
echo "Bienvenido";
*/
/*
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/footer.css">
  </head>
  <body>
    <form action="logout.php" method="POST"
    
  </body>
</html>
*/

  require_once('funciones.php');
  $email="";
  $nombre="";
  $apellido="";
  $avatar="";

  if($_GET){

    $email=$_GET["email"];

    $usuarios=jsonToArray("usuarios.json");

    foreach ($usuarios as $usuarioGuardado) {
      if($usuarioGuardado["email"]==$email){
        $usuarioActual=$usuarioGuardado;
      }
    }
    $nombre=$usuarioActual["nombre"];
    $apellido=$usuarioActual["apellido"];
    $avatar=$usuarioActual["avatar"];
  }
  ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">


    <title>Perfil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/dd0322cf66.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Chilanka|Mansalva&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="css/perfil.css">



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
                    <a class="nav-link   dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-hand-holding-heart icono"><span class=textoIcono><br>Quiero ayudar</span></i></a>
                  <div class="dropdown-menu dropdown-menu-xl-right dropdown-menu-lg-right dropdown-menu-md-right">
                    <a class="dropdown-item" href="donaciones.php">Dona</a>
                    <a class="dropdown-item" href="voluntariado.php">Participa</a>
                  </div>

              </li>

              <li class="nav-item dropdown nav-item active">

          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user icono"><span class=textoIcono><br>Mi Perfil</span></i></a>
          <div class="dropdown-menu dropdown-menu-xl-right dropdown-menu-lg-right dropdown-menu-md-right ">
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
    <div class="container">


        <div class="row">
      <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 col-12">
        <div class="perfil">
            <div class="media avatarYtexto">
              <div class="divAvatar">
              <img class="align-self-center" src=<?=$avatar?> alt="">
              </div>

              <div class="media-body divNomOcup">
                <h1 class = "textoNombre" id="textoNombre"><?=$nombre . " " .$apellido ?></h1>
                <h2 id="textoOcupacion">Estudiante</h2>
              </div>
              </div>
            </div>

      </div>
      </div>
      <section>


        <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 col-12">
        <div class="Descripcion divAcercaDeMi">
          <h3 class="">Acerca de mí   </h3>

          <div class="caja pt-3">
            <p class="pl-3 pb-3" id="textoAcerca">Soy Licenciada en Trabajo Social y Licenciada en Psicología.
              He liderado y gestionado proyectos sociales por mas de 8 años.
              Poseo experiencia en el Desarrollo, implementación y seguimiento de Proyectos Sociales y RSE
              y trabajando con diferentes entidades gubernamentales.
              Tengo un excelente manejo de las relaciones interpersonales, soy proactiva y recursiva.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
    <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 col-12">

        <div class="Descripcion divIntereses">
          <h3 class = "">Intereses   </h3>

          <div class="caja pt-3">
            <p class="pl-3 pb-3" id="textoIntereses">
            Me gusta trabajar con niños y ancianos.
            </p>
          </div>
        </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 col-12">

        <div class="Descripcion">
          <h3 class = "">Experiencia </h3>

          <div class="caja pt-3">
            <h5 class="mb-0 ml-3">Directora</h5>
            <h6 class="mb-0 ml-3">Fundacion para la niñez ABGS</h6>
            <p class="mb-0  ml-3">Lima, Peru</p>
            <p class="pb-3 ml-3">Jun 2018 - Abr 2019</p>


              <h5 class="mb-0 ml-3">Coordinadora de Area de Voluntariado</h5>
              <h6 class="mb-0 ml-3">Fundacion de niños GXTZ</h6>
              <p class="mb-0  ml-3">Buenos Aires, Argentina</p>
              <p class="pb-3 ml-3">Feb 2011 - May 2018</p>

        </div>
        </div>
      </div>
      </div>
      <div class="row">
      <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 col-12">
        <div class="Descripcion divHabilidades">
        <h3 class = "">Habilidades  </h3>
          <form class="habilidades" action="" method="post">
            <div class="form-row">


            <label for="habilidades"></label>

    <p class="ml-3">  <input type="checkbox" class="" name="habilidades" value="ing"> Inglés</p>
    <p class="ml-3">   <input type="checkbox" name="habilidades" value="can"> Cantar</p>
    <p class="ml-3">   <input type="checkbox" name="habilidades" value="gui"> Tocar Guitarra </p>
    <p class="ml-3">   <input type="checkbox" name="habilidades" value="cul"> Culinaria </p>
    <p class="ml-3">   <input type="checkbox" name="habilidades" value="con"> Contabilidad </p>
    <p class="ml-3">   <input type="checkbox" name="habilidades" value="rh"> Recursos Humanos </p>
    <p class="ml-3"> <input type="checkbox" name="habilidades" value="ts"> Trabajo Social </p>
    <p class="ml-3">  <input type="checkbox" name="habilidades" value="fut"> Futbol </p>
    <p class="ml-3">  <input type="checkbox" name="habilidades" value="vol"> Volleyball </p>
    <p class="ml-3">  <input type="checkbox" name="habilidades" value="ten"> Tenis </p>
    <p class="ml-3">   <input type="checkbox" name="habilidades" value="mat"> Matematicas </p>
    <p class="ml-3">   <input type="checkbox" name="habilidades" value="psi"> Psicologia </p>
    <p class="ml-3">   <input type="checkbox" name="habilidades" value="pri"> Primeros Auxilios </p>
    <p class="ml-3">  <input type="checkbox" name="habilidades" value="enf"> Enfermeria </p>
    <p class="ml-3">  <input type="checkbox" name="habilidades" value="cns"> Construcción </p>
    <p class="ml-3">   <input type="checkbox" name="habilidades" value="tyc"> Tejido y costura </p>
    <p class="ml-3">  <input type="checkbox" name="habilidades" value="nut"> Nutrición </p>
    <p class="ml-3">   <input type="checkbox" name="habilidades" value="mkt"> Marketing </p>
    <p class="ml-3">   <input type="checkbox" name="habilidades" value="rs"> Redes sociales </p>
    <p class="ml-3">   <input type="checkbox" name="habilidades" value="pr"> Relaciones Publicas y Comunicación </p>
    <p class="ml-3">   <input type="checkbox" name="habilidades" value="rg"> Relaciones Gubernamentales </p>
    <p class="ml-3">   <input type="checkbox" name="habilidades" value="fin"> Finanzas </p>
    <p class="ml-3">   <input type="checkbox" name="habilidades" value="log"> Logistica </p>
    <p class="ml-3">   <input type="checkbox" name="habilidades" value="oe"> Organizacion de Eventos </p>
    <p class="ml-3">   <input type="checkbox" name="habilidades" value="ot"> Otros </p>

        </div>
          <button class="btn btn-primary" type="submit" name="button">Agregar</button>
          </form>

        </div>
      </div>
      </div>


      </section>







    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </body>
</html>
