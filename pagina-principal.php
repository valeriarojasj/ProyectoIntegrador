
<?php
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


$errorFoto="";
$errorVideo="";
$errorDoc="";
$imagen="";
$video="";
$docs="";




if($_FILES){
    if($_FILES["inputImagen"]["error"] != 0){
      "Error al cargar la imagen";
    }else{
      $ext=pathinfo($_FILES["inputImagen"]["name"],PATHINFO_EXTENSION);
      if($ext!="jpg" && $ext!="jpeg" && $ext!="png"){
      $errorFoto="Solo se permiten fotos en formato jpg, jpeg o png.<br>";
    }else{$imagen="uploads/imagen.$ext";
      move_uploaded_file($_FILES["inputImagen"]["tmp_name"],$imagen);}
    }
  if($_FILES["inputVideo"]["error"] != 0){
    "Error al cargar el Video";
    }else{
      $ext=pathinfo($_FILES["inputVideo"]["name"],PATHINFO_EXTENSION);
      if($ext!="mpg" && $ext!="mov" && $ext!="mpeg" && $ext!="mp4" && $ext!="avi" && $ext!="mpeg-4"){
      $errorVideo="Solo se permiten videos en formato mpg, mov, mpeg, mp4, avi y mpeg-4.<br>";
  }else{$video="uploads/video.$ext";
    move_uploaded_file($_FILES["inputVideo"]["tmp_name"], $video);}

}
  if($_FILES["inputDoc"]["error"] != 0){
    "Error al cargar el documento";
  }else{
    $ext=pathinfo($_FILES["inputDoc"]["name"],PATHINFO_EXTENSION);
    if($ext!="doc" && $ext!="docx" && $ext!="pdf"){
      $errorDoc="Solo se permiten documentos en formato doc, docx y pdf.<br>";
  }else{
    $docs="uploads/docs.$ext";
    move_uploaded_file($_FILES["inputDoc"]["tmp_name"],$docs);
  }
}


}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Pagina Principal</title>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
      <script src="https://kit.fontawesome.com/dd0322cf66.js"></script>
      <link href="https://fonts.googleapis.com/css?family=Chilanka|Mansalva&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="css/pagina-principal.css">
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

<div class="container-fluid">


<div class="row">
        <div class="col-md-3 col-sm-12 col-lg-3 col-xl-3 seccionIzquierda">
          <!--mi perfil-->

          <div class="miPerfil">


          <img value="<?=$avatar?>" src=<?=$avatar?>  alt="">
          <h1><?=$nombre . " " .$apellido ?></h1>
          <div class="caja perfilPrincipal pt-3">
            <h4 class="text-primary"><b>Experiencia: </b></h4>
            <ul class="perfilContenido" type="none">
              <li class="text-left"><b>Directora</b></li>
              <li class="text-left">Fundacion para la niñez ABGS</li>
              <li class="text-left">Lima, Peru</li>
              <li class="text-left">Jun 2018-Abr 2019</li>
            </ul>

            <ul class="perfilContenido" type="none">
              <li class="text-left"><b>Coordinadora de Area de Voluntariado</b></li>
              <li class="text-left">Fundacion de niños GXTZ</li>
              <li class="text-left">Buenos Aires, Argentina</li>
              <li class="text-left">Feb 2011 - May 2018</li>
            </ul>


        </div>
          <h4 class="text-primary"><b>Ocupación Actual:</b></h4>
          <ul class="perfilContenido" type="none">
            <li class="text-left">Estudiante</li>
          </ul>

          <h4 class="text-primary"><b>Residencia Actual:</b></h4>
          <ul class="perfilContenido" type="none">
            <li class="text-left">Lima, Peru</li>
          </ul>
        </div><!--cierra el div de mi perfil-->
      </div> <!--cierra el div de la columna-->
        <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6  seccionCentral">
          <div class="novedades">
          <div class="posteos">

            <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
          Quieres postear algo?
          </button>

          <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
             <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Qué quieres compartir?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                  <div class="modal-body">


                    <form method='post' action="" enctype="multipart/form-data">


                      <div class="form-group">
                        <select class="custom-select" >
                          <option value="">Area de interés</option>
                          <option value="1">Salud</option>
                          <option value="2">Educación</option>
                          <option value="3">Deporte</option>
                          <option value="4">Medio Ambiente</option>
                        </select>
                      </div>     <!--cierra el div de las opciones de areas de interes-->
  <div class="form-group">
    <select class="custom-select" >
      <option value="">Tipo de posteo</option>
      <option value="1">Donación</option>
      <option value="2">Evento Proximo</option>
      <option value="3">Evento Pasado</option>
      <option value="4">Otros</option>
      </select>

    </div> <!--cierra el div de las opciones de tipo de posteo-->
  <div class="listaBotones">


    <ul class="list-group list-group-horizontal" type="none">


            <div class="form-group fotoUpload mr-3">
              <li>
              <label for="inputImagen"><i class="fas fa-camera align-middle"></i></label>
              <input name="inputImagen" type="file" id="inputImagen" ></li>


            </div> <!--cierra el div de subir foto-->





        <div class="form-group videoUpload mr-3">
<li>
              <label for="inputVideo"><i class="fas fa-video align-middle"></i></label>
              <input name="inputVideo" type="file" id="inputVideo"></li>

            </div><!--cierra el div de subir video-->


        <div class="form-group docUpload mr-3">
          <li>
              <label for="inputDoc"><i class="fas fa-paperclip align-middle"></i></label>
              <input name="inputDoc" type="file" id="inputDoc"></li>
            </div> <!--cierra el div de subir documento-->

    </ul>
  </div> <!--cierra el div de la lista de botones-->
  <span><?=$errorFoto ." "?> </span>
  <span><?=$errorVideo." "?></span>
  <span><?=$errorDoc . " "?></span>
</div> <!--cierra el div del body del modal-->



      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" value="Enviar">Guardar Cambios</button>
      </div> <!--cierra el footer del modal-->
        </form><!--cierra el form de agregar posteo-->

    </div><!--cierra el contenido del modal-->
  </div> <!--cierra el dialogo del modal-->
</div><!--cierra el modal-->
<div class="novedad"><!--comienza un posteo-->
  <div class=" perfilPost media">
  <img class="avatarPosteo" src="<?=$avatar?>" alt="">
  <div class="media-body nombrePosteo">
    <h5 ><?=$nombre . " " .$apellido ?></h5>
    </div>
  </div>


<div class="imgOvideo">
 <img src="<?=$imagen?>" class="imagenPosteo" alt="">
 <media src="<?=$video?>" class="videoPosteo" alt="">
   </div>
   <div class="mb-3 divPosteo">
     <textarea name="textoPosteo" class="form-control textoPost" rows="6" id="validationTextarea" placeholder="Escribe tu mensaje aquí" required></textarea>
     <div class="invalid-feedback">
       <!--Aca puede ir el mensaje de error si esta vacio-->
     </div>     <!--cierra el div del  mensaje de error del text area-->
   </div>     <!--cierra el div del textArea-->
<ul type="none" class="list-group list-group-horizontal acciones">
<li class="mr-3"><a class="textoAcciones" t href="#"><i class=" iconosAcciones fas fa-thumbs-up">      </i> Me gusta </a></li>
  <li class= "mr-3">  <a class="textoAcciones text-primary" href="#"><i class=" text-primary iconosAcciones fas fa-comment-alt">     </i> Comentar  </a></li>
  <li class ="mr-3">  <a class="textoAcciones"href="#"><i class=" iconosAcciones fas fa-share"> </i> Compartir   </a></li>
   </ul>
</div><!--cierra un posteo-->





        </div><!--cierra agregar posteo-->
          <!--noticias-->
          <h2>Ultimas novedades</h2>
          <div class="novedad"><!--comienza un posteo-->
            <div class="perfilPost media">
           <img src="img/woman-1-500px.jpg" class="avatarPosteo"alt="">

          <div class="media-body nombrePosteo">
           <h5>María García</h5>
           </div>
           </div>
           <div class="imgOvideo">
           <img src="img/actividadesVoluntarios1_1250x760.jpg" class="imagenPosteo" alt="">
           </div>
           <p>Explicación del proyecto</p>
           <h5>Cantidad de voluntarios: 12</h5>
           <h5>Lugar: Lima</h5>
           <h5>Detalles: se necesitan preferentemente maestras y psicologas</h5>
           <h5>Deja tu comentario<ion-icon name="chatbubbles"></ion-icon></h5>
          </div><!--cierra un posteo-->
          <div class="novedad"><!--comienza un posteo-->
            <div class="perfilPost media">
           <img src="img/woman-2-500px.jpg" class="avatarPosteo" alt="">
           <div class="media-body nombrePosteo">
           <h5>Isabel Gómez</h5>
           </div>
             </div>
           <div class="imgOvideo">
           <img src="img/actividadesVoluntarios2_1250x760.jpg" class="imagenPosteo" alt="">
           </div>
           <p>Explicación del proyecto</p>
           <h5>Cantidad de voluntarios: 12</h5>
           <h5>Lugar: Lima</h5>
           <h5>Detalles: se necesitan preferentemente maestras y psicologas</h5>
           <h5>Deja tu comentario<ion-icon name="chatbubbles"></ion-icon></h5>
          </div><!--cierra un posteo-->
          <div class="novedad"> <!--comienza un posteo-->
            <div class="perfilPost media">
           <img src="img/man-1-500px.jpg" class="avatarPosteo" alt="">
           <div class="media-body nombrePosteo">
           <h5>Pedro Pérez</h5>
           </div>
           </div>
           <div class="imgOvideo">
           <img src="img/actividadesVoluntarios3_1250x760.jpg" class="imagenPosteo" alt="">
           </div>
           <p>Explicación del proyecto</p>
           <h5>Cantidad de voluntarios: 12</h5>
           <h5>Lugar: Lima</h5>
           <h5>Detalles: se necesitan preferentemente maestras y psicologas</h5>
           <h5>Deja tu comentario<ion-icon name="chatbubbles"></ion-icon></h5>
          </div> <!--cierra un posteo-->
          <div class="novedad"> <!--comienza un posteo-->
            <div class="perfilPost media">
           <img src="img/man-2-500px.jpg" class="avatarPosteo" alt="">
          <div class="media-body nombrePosteo">
           <h5>Felipe Álvarez</h5>
           </div>
           </div>
           <div class="imgOvideo">
           <img src="img/actividadesVoluntarios2_1250x760.jpg" class="imagenPosteo" alt="">
          </div>
           <p>Explicación del proyecto</p>
           <h5>Cantidad de voluntarios: 12</h5>
           <h5>Lugar: Lima</h5>
           <h5>Detalles: se necesitan preferentemente maestras y psicologas</h5>
           <h5>Deja tu comentario<ion-icon name="chatbubbles"></ion-icon></h5>
          </div><!--cierra un posteo-->
          <div class="novedad"><!--comienza un posteo-->
          <div class="perfilPost media">
         <img src="img/voluntaria.jpg" class="avatarPosteo" alt="">
           <div class="media-body nombrePosteo">
           <h5>Mariana Diaz</h5>
           </div>
           </div>
           <div class="imgOvideo">
           <img src="img/posteo.jpg" class="imagenPosteo" alt="">
          </div>
           <p>Explicación del proyecto</p>
           <h5>Cantidad de voluntarios: 12</h5>
           <h5>Lugar: Lima</h5>
           <h5>Detalles: se necesitan preferentemente maestras y psicologas</h5>
           <h5>Deja tu comentario<ion-icon name="chatbubbles"></ion-icon></h5>
          </div><!--cierra un posteo-->
          <div class="novedad"><!--comienza un posteo-->
          <div class="perfilPost media">
           <img src="img/woman-4-500px.jpg" class="avatarPosteo" alt="">
           <div class="media-body nombrePosteo">
           <h5>Silvia Smith</h5>
           </div>
           </div>
           <div class="imgOvideo">
           <img src="img/actividadesVoluntarios3_1250x760.jpg" class="imagenPosteo" alt="">
           </div>
           <p>Explicación del proyecto</p>
           <h5>Cantidad de voluntarios: 12</h5>
           <h5>Lugar: Lima</h5>
           <h5>Detalles: se necesitan preferentemente maestras y psicologas</h5>
           <h5>Deja tu comentario<ion-icon name="chatbubbles"></ion-icon></h5>
         </div><!--cierra un posteo-->


         </div>
        </div> <!--cierra el div de la columna central-->
        <div class="col-md-3 col-sm-12 col-lg-3 col-xl-3 seccionDerecha">
          <div class="publicidad">


          <!--publicidad-->
          <div class="avisoPublicitario">
            <h4 class="text-primary"><b>Publicidad</b></h4>
            <a href="#"><img src="img/ad-1.jpg" class="img-fluid" alt=""></a>
          </div><!--cierra el div de aviso publicitario-->
          <div class="avisoPublicitario">
            <a href="#"><img src="img/ad-2.jpg" class="img-fluid" alt=""></a>
          </div><!--cierra el div de aviso publicitario-->
          <div class="avisoPublicitario">
            <a href="#"><img src="img/ad-3.jpg" class="img-fluid" alt=""></a>
          </div> <!--cierra el div de aviso publicitario-->
          <div class="avisoPublicitario">
            <a href="#"><img src="img/ad-4.jpg" class="img-fluid" alt=""></a>
          </div> <!--cierra el div de aviso publicitario-->

        </div> <!--cierra el div de publicidad-->
        </div><!--cierra el div de la columna derecha-->
      </div> <!--cierra el div de row-->


<footer>



</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </body>
</html>
