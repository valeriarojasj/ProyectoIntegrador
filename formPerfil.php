
<?php
require_once('funciones/autoload.php');
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


$email=$_SESSION["email"];
$nombre=$_SESSION["nombre"];
$apellido=$_SESSION["apellido"];
$avatar=$_SESSION["avatar"];


  $name="";
  $lastName="";
  $tituloPersonal="";
  $acercaDeMi= "";
  $genero="";

  $cargo1="";
  $empresa1="";
  $ciudadExp1="";
  $paisExp1="";
  $descripcionCargo1="";
  $fechaInicioExp1="";
  $fechaFinExp1="";

  $cargo2="";
  $empresa2="";
  $ciudadExp2="";
  $paisExp2="";
  $descripcionCargo2="";
  $fechaInicioExp2="";
  $fechaFinExp2="";

  $tituloAcademico1="";
  $universidad1="";
  $ciudadEdu1="";
  $paisEdu1="";
  $descripcionEdu1="";
  $fechaInicioEdu1="";
  $fechaFinEdu1="";


  $tituloAcademico2="";
  $universidad2="";
  $ciudadEdu2="";
  $paisEdu2="";
  $descripcionEdu2="";
  $fechaInicioEdu2="";
  $fechaFinEdu2="";

  $textoIntereses="";





if($_POST){
  if(isset($_POST["name"])){$name= $_POST["name"];}
  if(isset($_POST["lastName"])){$lastName= $_POST["lastName"];}
  if(isset($_POST["tituloPersonal"])){$tituloPersonal= $_POST["tituloPersonal"];}
  if(isset($_POST["acercaDeMi"])){$acercaDeMi= $_POST["acercaDeMi"];}
if(isset($_POST["genero"])){$genero= $_POST["genero"];}

  if(isset($_POST["cargo1"])){$cargo1= $_POST["cargo1"];}
  if(isset($_POST["empresa1"])){$empresa1= $_POST["empresa1"];}
  if(isset($_POST["fechaInicioExp1"])){$fechaInicioExp1= $_POST["fechaInicioExp1"];}
  if(isset($_POST["fechaFinExp1"])){$fechaFinExp1= $_POST["fechaFinExp1"];}
  if(isset($_POST["ciudadExp1"])){$ciudadExp1= $_POST["ciudadExp1"];}
  if(isset($_POST["paisExp1"])){$paisExp1= $_POST["paisExp1"];}
  if(isset($_POST["descripcionCargo1"])){$descripcionCargo1= $_POST["descripcionCargo1"];}

    if(isset($_POST["cargo2"])){$cargo2= $_POST["cargo2"];}
    if(isset($_POST["empresa2"])){$empresa2= $_POST["empresa2"];}
    if(isset($_POST["fechaInicioExp2"])){$fechaInicioExp2= $_POST["fechaInicioExp2"];}
    if(isset($_POST["fechaFinExp2"])){$fechaFinExp2= $_POST["fechaFinExp2"];}
    if(isset($_POST["ciudadExp2"])){$ciudadExp2= $_POST["ciudadExp2"];}
    if(isset($_POST["paisExp2"])){$paisExp2= $_POST["paisExp2"];}
    if(isset($_POST["descripcionCargo2"])){$descripcionCargo2= $_POST["descripcionCargo2"];}

      if(isset($_POST["tituloAcademico1"])){$tituloAcademico1= $_POST["tituloAcademico1"];}
      if(isset($_POST["universidad1"])){$universidad1= $_POST["universidad1"];}
      if(isset($_POST["fechaInicioEdu1"])){$fechaInicioEdu1= $_POST["fechaInicioEdu1"];}
      if(isset($_POST["fechaFinEdu1"])){$fechaFinEdu1= $_POST["fechaFinEdu1"];}
      if(isset($_POST["ciudadEdu1"])){$ciudadEdu1= $_POST["ciudadEdu1"];}
        if(isset($_POST["paisEdu1"])){$paisExp2= $_POST["paisEdu1"];}
      if(isset($_POST["descripcionEdu1"])){$descripcionEdu1= $_POST["descripcionEdu1"];}

        if(isset($_POST["tituloAcademico2"])){$tituloAcademico2= $_POST["tituloAcademico2"];}
        if(isset($_POST["universidad2"])){$universidad2= $_POST["universidad2"];}
        if(isset($_POST["fechaInicioEdu2"])){$fechaInicioEdu2= $_POST["fechaInicioEdu2"];}
        if(isset($_POST["fechaFinEdu2"])){$fechaFinEdu2= $_POST["fechaFinEdu2"];}
        if(isset($_POST["ciudadEdu2"])){$ciudadEdu2= $_POST["ciudadEdu2"];}
          if(isset($_POST["paisEdu2"])){$paisExp2= $_POST["paisEdu2"];}
        if(isset($_POST["descripcionEdu2"])){$descripcionEdu2= $_POST["descripcionEdu2"];}
}







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


      <section>    <!-- Aca comienza la seccion de informacion personal -->


        <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 col-12">
          <div class="perfil">
            <!-- Button trigger modal -->
            <div class="text-right">
            <button type="button" class="btn btn-white " data-toggle="modal" data-target="#infoPersonalModal">
              <i class="far fa-edit text-primary"></i>
            </button>
            </div>
            <div class="Descripcion divAcercaDeMi">
            <div class="media avatarYtexto">



                <div class="divAvatar">
                <img class="align-self-center" src=<?=$avatar?> alt="">
                </div>

                <div class="media-body divNomOcup">
                  <h1 class = "textoNombre" id="textoNombre"><?=$nombre . " " .$apellido ?></h1>
                  <h2 id="textoOcupacion">Estudiante</h2>
                </div>

                </div>



          <h3 class="">Acerca de mí   </h3>

          <div class="caja pt-3">
            <p class="pl-3 pb-3" id="textoAcerca"><?=$acercaDeMi?></p>
          </div>



          <!-- Modal -->
          <div class="modal fade" id="infoPersonalModal" tabindex="-1" role="dialog" aria-labelledby="infoPersonalModalLabel" aria-hidden="true">


            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="infoPersonalModalLabel">Informacion Personal</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">

                                      <form method='post' action="" enctype="multipart/form-data">

                                        <div class="form-row">



                                          <div class="col">


                                            <label for="name">Nombre</label>
                                            <input name= "name" type="text" class="form-control" placeholder="Mariana">
                                          </div>

                                          <div class="col">
                                            <div class="">


                                              <label for="lastName">Apellido</label>
                                            <input name="lastName" type="text" class="form-control" placeholder="Diaz">

                                              </div>
                                          </div>


                                          </div>
                                        <div class="form-group ">
                                           <label class="mt-3"for="tituloPersonal">Titulo</label>
                                           <input name="tituloPersonal" type="text" class="form-control mb-2 " id="tituloPersonal" placeholder="Ingresa tu titulo o cargo actual">
                                         </div>
                                        <div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="hombre" name="genero" class="custom-control-input">
  <label class="custom-control-label" for="hombre">Hombre</label>
</div>
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="mujer" name="genero" class="custom-control-input">
  <label class="custom-control-label" for="mujer">Mujer</label>
</div>
  <div class="mb-2 divPosteo">
     <label class="mt-3"for="acercaDeMi">Acerca de mí</label>
  <textarea name="acercaDeMi" class="form-control textoAcerca" rows="6" id="validationTextarea" placeholder="Escribe un corto resumen sobre tu experiencia, intereses y objetivos"></textarea>
  </div>     <!--cierra el div del textArea-->



                  </div> <!--cierra el div del body del modal-->

                  <div class="modal-footer">
                          <button type="button " class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                          <button type="submit" class="btn btn-primary" value="Enviar">Guardar Cambios</button>
                  </div> <!--cierra el footer del modal-->
                                          </form><!--cierra el form de agregar posteo-->
                </div>

              </div>
            </div>
          </div>
          </div>
            </div>
              </div>
              </section>

                <section>   <!-- Aca comienza la seccion de experiencia -->
                  <div class="row">
                  <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 col-12 mt-3">
                    <div class="perfil">


                      <div class="Descripcion">
                        <h3 class = "">Experiencia </h3>

                          <button type="submit" name="masExperiencia" class="btn btn-white"><i class="fas fa-plus-circle text-primary"></i> Añadir otra experiencia</button>



                        <div class="caja pt-3">
                          <!-- Aca comienza la seccion de experiencia 1-->



                            <!-- Button trigger modal -->
                            <div class="d-flex justify-content-between">
                              <h5 class="mb-0 ml-3 mt-0 d-inline align-middle"><?=$cargo1?></h5>
                          <button type="button" class="btn btn-white d-inline" data-toggle="modal" data-target="#experienciaModal1">
                            <i class="far fa-edit text-primary"></i>
                          </button>
                        </div>
                          <h6 class="mb-0 ml-3"><?=$empresa1?></h6>
                          <p class="mb-0  ml-3"><?php if($paisExp1!=""){echo $ciudadExp1 . ", ".$paisExp1;}else{echo $ciudadExp1;}?></p>
                          <p class="pb-3 ml-3"><?php  if($fechaFinExp1==""&&$fechaInicioExp1!=""){echo $fechaInicioExp1 . " -  "."Actualmente";}if($fechaInicioExp1==""&&$fechaFinExp1==""){echo "";} if($fechaInicioExp1!=""&&$fechaFinExp1!=""){echo $fechaInicioExp1 . " -  ".$fechaFinExp1;}?></p>
                          <p class="pb-3 ml-3"><?=$descripcionCargo1?></p>
                          <div class="d-flex justify-content-between">
                            <h5 class="mb-0 ml-3 mt-0 d-inline align-middle"><?=$cargo2?></h5>
                        <button type="button" class="btn btn-white d-inline" data-toggle="modal" data-target="#experienciaModal2">
                          <i class="far fa-edit text-primary"></i>
                        </button>
                        </div>
                            <h6 class="mb-0 ml-3"><?=$empresa2?></h6>
                            <p class="mb-0  ml-3"><?php if($paisExp2!=""){echo $ciudadExp2 . ", ".$paisExp2;}else{echo $ciudadExp2;}?></p>
                            <p class="pb-3 ml-3"><?php  if($fechaFinExp2==""&&$fechaInicioExp2!=""){echo $fechaInicioExp2 . " -  "."Actualmente";}if($fechaInicioExp2==""&&$fechaFinExp2==""){echo "";} if($fechaInicioExp2!=""&&$fechaFinExp2!=""){echo $fechaInicioExp2 . " -  ".$fechaFinExp2;}?></p>
                            <p class="pb-3 ml-3"><?=$descripcionCargo2?></p>

                      </div>

                      <!-- Modal experiencia 1-->
                      <div class="modal fade" id="experienciaModal1" tabindex="-1" role="dialog" aria-labelledby="experienciaModalLabel1" aria-hidden="true">


                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="experienciaModalLabel1">Experiencia</h5>

                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">

                                                  <form method='post' action="" enctype="multipart/form-data">


                                                    <div class="form-group ">

                                                       <label class="mt-1"for="cargo1">Cargo</label>
                                                       <input name="cargo1" type="text" class="form-control " id="cargo1" placeholder="Escribe tu cargo">
                                                       <label class="mt-3"for="empresa1">Organización/Empresa</label>
                                                     <input name="empresa1" type="text" class="form-control" placeholder="Escribe el nombre de la organización o empresa">

                                                 <div class="form-row mt-2">
                                                   <div class="col">
                                                       <label class="" for="fechaInicioExp1">Fecha Inicio</label>
                                                     <input name="fechaInicioExp1" type="month" class="form-control" placeholder="">
                                                      </div>
                                                     <div class="col">
                                                         <label class="" for="fechaFinExp1">Fecha Fin</label>
                                                       <input name="fechaFinExp1" type="month" class="form-control" placeholder="">
                                                   </div>
                                                     </div>
                                                     <div class="form-row mt-2">
                                                       <div class="col">
                                                           <label class="" for="ciudadExp1">Ciudad</label>
                                                         <input name="ciudadExp1" type="text" class="form-control" placeholder="Escribe la ciudad">
                                                          </div>
                                                         <div class="col">
                                                             <label class="" for="paisExp1">País</label>
                                                           <input name="paisExp1" type="text" class="form-control" placeholder="Escribe el país">
                                                       </div>
                                                         </div>


                                                     <div class="mb-2 divDescripcionCargo">
                                                        <label class="mt-2"for="descripcionCargo1">Descripción</label>
                                                     <textarea name="descripcionCargo1" class="form-control textoDescripcionCargo" rows="6" id="validationTextarea" placeholder="Escribe un corto resumen sobre tus funciones y logros" required></textarea>
                                                     </div>     <!--cierra el div del textArea-->









                                                      </div>





                              </div> <!--cierra el div del body del modal-->

                              <div class="modal-footer">
                                      <button type="button " class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                      <button type="submit" class="btn btn-primary" value="Enviar">Guardar Cambios</button>
                              </div> <!--cierra el footer del modal-->


</form><!--cierra el form de agregar posteo-->
                            </div>
</div>
</div> <!--cierra el primer modal-->
<!-- Modal experiencia 2-->
<div class="modal fade" id="experienciaModal2" tabindex="-1" role="dialog" aria-labelledby="experienciaModalLabel2" aria-hidden="true">


  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="experienciaModalLabel2">Experiencia</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

                            <form method='post' action="" enctype="multipart/form-data">


                              <div class="form-group ">

                                 <label class="mt-1"for="cargo2">Cargo</label>
                                 <input name="cargo2" type="text" class="form-control " id="cargo2" placeholder="Escribe tu cargo">
                                 <label class="mt-3"for="empresa2">Organización/Empresa</label>
                               <input name="empresa2" type="text" class="form-control" placeholder="Escribe el nombre de la organización o empresa">

                           <div class="form-row mt-2">
                             <div class="col">
                                 <label class="" for="fechaInicioExp2">Fecha Inicio</label>
                               <input name="fechaInicioExp2" type="month" class="form-control" placeholder="">
                                </div>
                               <div class="col">
                                   <label class="" for="fechaFinExp2">Fecha Fin</label>
                                 <input name="fechaFinExp2" type="month" class="form-control" placeholder="">
                             </div>
                               </div>
                               <div class="form-row mt-2">
                                 <div class="col">
                                     <label class="" for="ciudadExp2">Ciudad</label>
                                   <input name="ciudadExp2" type="text" class="form-control" placeholder="Escribe la ciudad">
                                    </div>
                                   <div class="col">
                                       <label class="" for="paisExp2">País</label>
                                     <input name="paisExp2" type="text" class="form-control" placeholder="Escribe el país">
                                 </div>
                                   </div>


                               <div class="mb-2 divDescripcionCargo">
                                  <label class="mt-2"for="descripcionCargo2">Descripción</label>
                               <textarea name="descripcionCargo2" class="form-control textoDescripcionCargo" rows="6" id="validationTextarea" placeholder="Escribe un corto resumen sobre tus funciones y logros" required></textarea>
                               </div>     <!--cierra el div del textArea-->









                                </div>





        </div> <!--cierra el div del body del modal-->

        <div class="modal-footer">
                <button type="button " class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary" value="Enviar">Guardar Cambios</button>
        </div> <!--cierra el footer del modal-->


</form><!--cierra el form de agregar posteo-->
      </div>
</div>
</div> <!--cierra el segundo modal-->

                        </div>

                      </div>
                                                </div>
                                                </div>


</section>
<section>   <!-- Aca comienza la seccion de educacion -->
  <div class="row">
  <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 col-12 mt-3">
    <div class="perfil">


      <div class="Descripcion">
        <h3 class = "">Educación</h3>

          <button type="submit" name="masEducación" class="btn btn-white"><i class="fas fa-plus-circle text-primary"></i> Añadir otros estudios</button>



        <div class="caja pt-3">
          <!-- Aca comienza la seccion de experiencia 1-->



            <!-- Button trigger modal -->
            <div class="d-flex justify-content-between">
              <h5 class="mb-0 ml-3 mt-0 d-inline align-middle"><?=$tituloAcademico1?></h5>
          <button type="button" class="btn btn-white d-inline" data-toggle="modal" data-target="#educacionModal1">
            <i class="far fa-edit text-primary"></i>
          </button>
        </div>
          <h6 class="mb-0 ml-3"><?=$universidad1?></h6>
          <p class="mb-0  ml-3"><?php if($paisEdu1!=""){echo $ciudadEdu1 . ", ".$paisEdu1;}else{echo $ciudadEdu1;}?></p>
          <p class="pb-3 ml-3"><?php  if($fechaFinEdu1==""&&$fechaInicioEdu1!=""){echo $fechaInicioEdu1 . " -  "."Actualmente";}if($fechaInicioEdu1==""&&$fechaFinEdu1==""){echo "";} if($fechaInicioEdu1!=""&&$fechaFinEdu1!=""){echo $fechaInicioEdu1 . " -  ".$fechaFinEdu1;}?></p>
            <p class="pb-3 ml-3"><?=$descripcionEdu1?></p>
          <div class="d-flex justify-content-between">
            <h5 class="mb-0 ml-3 mt-0 d-inline align-middle"><?=$tituloAcademico2?></h5>
        <button type="button" class="btn btn-white d-inline" data-toggle="modal" data-target="#educacionModal2">
          <i class="far fa-edit text-primary"></i>
        </button>
        </div>
            <h6 class="mb-0 ml-3"><?=$universidad2?></h6>
            <p class="mb-0  ml-3"><?php if($paisEdu2!=""){echo $ciudadEdu2 . ", ".$paisEdu2;}else{echo $ciudadEdu2;}?></p>
            <p class="pb-3 ml-3"><?php  if($fechaFinEdu2==""&&$fechaInicioEdu2!=""){echo $fechaInicioEdu2 . " -  "."Actualmente";}if($fechaInicioEdu2==""&&$fechaFinEdu2==""){echo "";} if($fechaInicioEdu2!=""&&$fechaFinEdu2!=""){echo $fechaInicioEdu2 . " -  ".$fechaFinEdu2;}?></p>
            <p class="pb-3 ml-3"><?=$descripcionEdu2?></p>

      </div>

      <!-- Modal Educacion 1 -->
      <div class="modal fade" id="educacionModal1" tabindex="-1" role="dialog" aria-labelledby="educacionModalLabel1" aria-hidden="true">


        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="educacionModalLabel1">Educación</h5>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

                                  <form method='post' action="" enctype="multipart/form-data">


                                    <div class="form-group ">

                                       <label class="mt-1"for="tituloAcademico1">Título</label>
                                       <input name="tituloAcademico1" type="text" class="form-control " id="tituloAcademico1" placeholder="Escribe el nombre del título académico">
                                       <label class="mt-3"for="universidad1">Universidad/Institución educativa</label>
                                     <input name="universidad1" type="text" class="form-control" placeholder="Escribe el nombre de la universidad o institución académica">

                                 <div class="form-row mt-2">
                                   <div class="col">
                                       <label class="" for="fechaInicioEdu1">Fecha Inicio</label>
                                     <input name="fechaInicioEdu1" type="month" class="form-control" placeholder="">
                                      </div>
                                     <div class="col">
                                         <label class="" for="fechaFinEdu1">Fecha Fin</label>
                                       <input name="fechaFinEdu1" type="month" class="form-control" placeholder="">
                                   </div>
                                     </div>
                                     <div class="form-row mt-2">
                                       <div class="col">
                                           <label class="" for="ciudadEdu1">Ciudad</label>
                                         <input name="ciudadEdu1" type="text" class="form-control" placeholder="Escribe la ciudad de tus estudios">
                                          </div>
                                         <div class="col">
                                             <label class="" for="paisEdu1">País</label>
                                           <input name="paisEdu1" type="text" class="form-control" placeholder="Escribe el país">
                                       </div>
                                         </div>


                                     <div class="mb-2 divDescripcionEdu">
                                        <label class="mt-2"for="descripcionEdu1">Descripción</label>
                                     <textarea name="descripcionEdu" class="form-control" rows="6" id="validationTextarea" placeholder="Descripción: Puedes incluir Menciones, reconocimientos, area de especializacion durante tus estudios entre otros "></textarea>
                                     </div>     <!--cierra el div del textArea-->









                                      </div>





              </div> <!--cierra el div del body del modal-->

              <div class="modal-footer">
                      <button type="button " class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                      <button type="submit" class="btn btn-primary" value="Enviar">Guardar Cambios</button>
              </div> <!--cierra el footer del modal-->
            </form><!--cierra el form de agregar posteo-->
                                        </div>
            </div>
            </div> <!--cierra el primer modal-->
<!--Comienza modal 2 educacion-->
              <div class="modal fade" id="educacionModal2" tabindex="-1" role="dialog" aria-labelledby="educacionModalLabel2" aria-hidden="true">


                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="educacionModalLabel2">Educación</h5>

                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">

                                          <form method='post' action="" enctype="multipart/form-data">


                                            <div class="form-group ">

                                               <label class="mt-1"for="tituloAcademico2">Título Académico</label>
                                               <input name="tituloAcademico2" type="text" class="form-control " id="tituloAcademico2" placeholder="Escribe el nombre del título académico">
                                               <label class="mt-3"for="universidad2">Universidad/Institución educativa</label>
                                             <input name="universidad2" type="text" class="form-control" placeholder="Escribe el nombre de la universidad o institución académica">

                                         <div class="form-row mt-2">
                                           <div class="col">
                                               <label class="" for="fechaInicioEdu2">Fecha Inicio</label>
                                             <input name="fechaInicioEdu2" type="month" class="form-control" placeholder="">
                                              </div>
                                             <div class="col">
                                                 <label class="" for="fechaFinEdu2">Fecha Fin</label>
                                               <input name="fechaFinEdu2" type="month" class="form-control" placeholder="">
                                           </div>
                                             </div>
                                             <div class="form-row mt-2">
                                               <div class="col">
                                                   <label class="" for="ciudadEdu2">Ciudad</label>
                                                 <input name="ciudadEdu2" type="text" class="form-control" placeholder="Escribe la ciudad de tus estudios">
                                                  </div>
                                                 <div class="col">
                                                     <label class="" for="paisEdu2">País</label>
                                                   <input name="paisEdu2" type="text" class="form-control" placeholder="Escribe el país">
                                               </div>
                                                 </div>


                                             <div class="mb-2 divDescripcionEdu">
                                                <label class="mt-2"for="descripcionEdu2">Descripción</label>
                                             <textarea name="descripcionEdu2" class="form-control" rows="6" id="validationTextarea" placeholder="Descripción: Puedes incluir menciones, reconocimientos, area de especialización durante tus estudios, entre otros. "></textarea>
                                             </div>     <!--cierra el div del textArea-->









                                              </div>





                      </div> <!--cierra el div del body del modal-->

                      <div class="modal-footer">
                              <button type="button " class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                              <button type="submit" class="btn btn-primary" value="Enviar">Guardar Cambios</button>
                      </div> <!--cierra el footer del modal-->
</form><!--cierra el form de agregar posteo-->
            </div>
</div>
          </div>
        </div>

      </div>
                                </div>
                                </div>


</section> <!--Cierra la seccion de educacion-->
<section>    <!-- Aca comienza la seccion de Intereses -->


  <div class="row">
  <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 col-12">
    <div class="perfil Descripcion divIntereses">
      <!-- Button trigger modal -->
      <div class="text-right">
      <button type="button" class="btn btn-white " data-toggle="modal" data-target="#interesesModal">
        <i class="far fa-edit text-primary"></i>
      </button>
      </div>

                <h3 class="">Intereses</h3>

                <div class="caja pt-3">
                  <p class="pl-3 pb-3" id="textoIntereses"><?=$textoIntereses?></p>
                </div>



                <!-- Modal -->
                <div class="modal fade" id="interesesModal" tabindex="-1" role="dialog" aria-labelledby="interesesModalLabel" aria-hidden="true">


                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="intereses">Intereses</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">

                                            <form method='post' action="" enctype="multipart/form-data">


        <div class="mb-2 divIntereses">
           <label class="mt-3"for="textoIntereses">Intereses</label>
        <textarea name="textoIntereses" class="form-control textoIntereses" rows="6" id="validationTextarea" placeholder="Escribe cuales son tus intereses"></textarea>
        </div>     <!--cierra el div del textArea-->



                        </div> <!--cierra el div del body del modal-->

                        <div class="modal-footer">
                                <button type="button " class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary" value="Enviar">Guardar Cambios</button>
                        </div> <!--cierra el footer del modal-->
                                                </form><!--cierra el form de agregar posteo-->
                      </div><!--cierra el div ModalContent-->

                    </div><!--cierra el div ModalDialog-->
                  </div><!--cierra el div ModalFade-->
                </div><!--cierra el div debajo de col-->
              </div><!--cierra el div col-->
            </div><!--cierra el div row-->

                    </section>

                    <section>    <!-- Aca comienza la seccion de Intereses -->


                      <div class="row">
                      <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 col-12">
                        <div class="perfil Descripcion divIntereses">
                          <!-- Button trigger modal -->
                          <div class="text-right">
                          <button type="button" class="btn btn-white " data-toggle="modal" data-target="#habilidadesModal">
                            <i class="far fa-edit text-primary"></i>
                          </button>
                          </div>

                                    <h3 class="">Habilidades</h3>

                                    <div class="caja pt-3">
                                      <p>Aca van las habilidades con un br</p>
                                    </div>






          <!-- Modal -->
          <div class="modal fade" id="habilidadesModal" tabindex="-1" role="dialog" aria-labelledby="habilidadesModalLabel" aria-hidden="true">


            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="habilidadesModalLabel">Habilidades</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>

                <div class="modal-body">
        <form method='post' action="" enctype="multipart/form-data">
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
          <p class="ml-3">  <input type="checkbox" name="habilidades" value="enf"> Enfermería </p>
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


        </div><!--cierra el div de checkbox de habilidades-->


      </form><!--cierra el form de habilidades-->
</div> <!--cierra el div del body del modal-->
</div><!--cierra el div del content del modal-->
</div><!--cierra el div del dialog del modal-->

</div><!--cierra el div del modal fade-->
</div><!--cierra el div debajo de col-->
                          </div><!--cierra el div col-->
</div><!--cierra el div row-->

</section> <!--Cierra la seccion de habilidades-->


</div><!--cierra el div container-->






    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </body>
</html>
