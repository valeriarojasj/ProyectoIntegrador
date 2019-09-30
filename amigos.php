<?php
require_once('funciones/autoload.php');
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Amigos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/dd0322cf66.js"></script>
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Chilanka|Mansalva&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/amigosStyle.css">
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
              <li class="nav-item dropdown nav-item active">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="amigos.php" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-friends icono"><span class=textoIcono><br>Mis amigos</span></i></a>
                <div class="dropdown-menu dropdown-menu-xl-right dropdown-menu-lg-right dropdown-menu-md-right">
                  <a class="dropdown-item" href="amigos.php">Ver Mis amigos</a>
                  <a class="dropdown-item" href="#">Buscar Contactos</a>
                </div>
              </li>
              <li class="nav-item dropdown nav-item">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-hand-holding-heart icono"><span class=textoIcono><br>Quiero ayudar</span></i></a>
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


    <div class="contenedorTodo container-fluid">
      <div class="paddingArea">
        <div class="row rowTitulo">
          <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 mt-3 TusContactos px-md-2 px-sm-2 px-lg-2 px-xl-2">
            <div class="seccionSaludo media text-center ">
              <div class="cajaSaludo ">
                <div class="divAvatar">
                  <img class="fotoPerfil align-self-center" src="img/voluntaria.jpg" alt="">
                  <h1 class="saludo align-middle text-wrap text-white text-center d-lg-inline d-xl-inline d-md-inline d-sm-inline ">Mis Contactos</h1>
                </div>
                <div class="media-body areaTitulo ">

                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-9 col-sm-9 col-lg-9 col-xl-9 col-12 fondoRojo">
            <div class="paddingCentroA px-md-1 px-sm-1 px-lg-1 px-xl-1">
              <div class="areaContactosTitulo">
                <div class="contactosTitulo">
                  <h6 class="tituloSeccion">Mis Amigos (8)</h6>
                </div>
              </div>

              <div class="row ">

                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 col-12 fondoAmarillo  hombre">
                  <div class="row">
                    <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4 col-12 fondoGris px-2 px-md-0 px-sm-0 px-lg-0 px-xl-0  px-2 px-md-0 px-sm-0 px-lg-0 px-xl-0 media">
                      <img src="img/man-1-500px.jpg" alt="foto Perfil" class="align-self-center card-img img-fluid max-width:100% height:auto ">
                    </div>
                    <div class="col-md-8 col-sm-8 col-lg-8 col-xl-8 col-12 fondoBlanco px-md-2 px-sm-2 px-lg-2 px-xl-2 border border-light   media-body">
                      <a href="mailto:joe@example.com?"><i class="fas fa-comment-dots"></i></a>
                      <h4>Pedro Pérez</h4>
                      <p>Aca va el texto del contacto izq</p>
                    </div>
                  </div>
                </div>

                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 fondoAmarillo">
                  <div class="row">
                    <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4 fondoGris px-2 px-md-0 px-sm-0 px-lg-0 px-xl-0  px-2 px-md-0 px-sm-0 px-lg-0 px-xl-0  media">
                      <img src="img/woman-1-500px.jpg" alt="foto Perfil" class="align-self-center card-img img-fluid max-width:100% height:auto ">
                    </div>
                    <div class="col-md-8  col-sm-8 col-lg-8 col-xl-8 fondoBlanco px-md-2 px-sm-2 px-lg-2 px-xl-2 border border-light media-body">
                      <a href="mailto:joe@example.com?"><i class="fas fa-comment-dots"></i></a>
                      <h4>María García</h4>
                      <p>Aca va el texto del contacto der</p>
                    </div>
                  </div>
                </div>
              </div><!-- aca termina un par de contactos-->


              <!-- aca empieza un par de contactos-->
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 fondoAmarillo  hombre ">
                    <div class="row">
                      <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4 fondoGris px-2 px-md-0 px-sm-0 px-lg-0 px-xl-0    media">
                        <img src="img/man-2-500px.jpg" alt="foto Perfil" class="align-self-center  card-img img-fluid max-width:100% height:auto">
                      </div>
                      <div class="col-md-8 col-sm-8 col-lg-8 col-xl-8 fondoBlanco px-md-2 px-sm-2 px-lg-2 px-xl-2 border border-light   media-body">
                        <a href="mailto:joe@example.com?"><i class="fas fa-comment-dots"></i></a>
                        <h4>Felipe Álvarez</h4>
                        <p>aca va el texto del contacto izq</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 fondoAmarillo">
                    <div class="row">
                      <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4 fondoGris px-2 px-md-0 px-sm-0 px-lg-0 px-xl-0    media">
                        <img src="img/woman-2-500px.jpg" alt="foto Perfil" class="align-self-center  card-img img-fluid max-width:100% height:auto">
                      </div>
                      <div class="col-md-8 col-sm-8 col-lg-8 col-xl-8 fondoBlanco px-md-2 px-sm-2 px-lg-2 px-xl-2 border border-light   media-body">
                        <a href="mailto:joe@example.com?"><i class="fas fa-comment-dots"></i></a>
                        <h4>Isabel Gómez</h4>
                        <p>aca va el texto del contacto der</p>
                      </div>
                    </div>
                  </div>
                </div><!-- aca termina un par de contactos-->



                <!-- aca empieza un par de contactos-->
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 fondoAmarillo   hombre">
                    <div class="row">
                      <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4 fondoGris px-2 px-md-0 px-sm-0 px-lg-0 px-xl-0    media">
                        <img src="img/man-3-500px.jpg" alt="foto Perfil" class="align-self-center  card-img img-fluid max-width:100% height:auto">
                      </div>
                      <div class="col-md-8 col-sm-8 col-lg-8 col-xl-8 fondoBlanco px-md-2 px-sm-2 px-lg-2 px-xl-2 border border-light   media-body">
                        <a href="mailto:joe@example.com?"><i class="fas fa-comment-dots"></i></a>
                        <h4>Andrés Estrada</h4>
                        <p>aca va el texto del contacto izq</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 fondoAmarillo">
                    <div class="row">
                      <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4 fondoGris px-2 px-md-0 px-sm-0 px-lg-0 px-xl-0    media">
                        <img src="img/woman-3-500px.jpg" alt="foto Perfil" class="align-self-center  card-img img-fluid max-width:100% height:auto">
                      </div>
                      <div class="col-md-8 col-sm-8 col-lg-8 col-xl-8 fondoBlanco px-md-2 px-sm-2 px-lg-2 px-xl-2 border border-light   media-body">
                        <a href="mailto:joe@example.com?"><i class="fas fa-comment-dots"></i></a>
                        <h4>Susana Flórez</h4>
                        <p>aca va el texto del contacto der</p>
                      </div>
                    </div>
                  </div>
                </div><!-- aca termina un par de contactos-->




                  <!-- aca empieza un par de contactos-->
                  <div class="row ">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 fondoAmarillo  hombre ">
                      <div class="row">
                        <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4 fondoGris px-2 px-md-0 px-sm-0 px-lg-0 px-xl-0    media">
                          <img src="img/man-4-500px.jpg" alt="foto Perfil" class="align-self-center  card-img img-fluid max-width:100% height:auto">
                        </div>
                        <div class="col-md-8 col-sm-8 col-lg-8 col-xl-8 fondoBlanco px-md-2 px-sm-2 px-lg-2 px-xl-2 border border-light   media-body">
                          <a href="mailto:joe@example.com?"><i class="fas fa-comment-dots"></i></a>
                          <h4>Camilo Muñóz</h4>
                          <p>aca va el texto del contacto izq</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6 fondoAmarillo   ">
                      <div class="row ">
                        <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4 fondoGris px-2 px-md-0 px-sm-0 px-lg-0 px-xl-0    media">
                          <img src="img/woman-4-500px.jpg" alt="foto Perfil" class="align-self-center  card-img img-fluid max-width:100% height:auto">
                        </div>
                        <div class="col-md-8 col-sm-8 col-lg-8 col-xl-8 fondoBlanco px-md-2 px-sm-2 px-lg-2 px-xl-2 border border-light   media-body">
                          <a href="mailto:joe@example.com?"><i class="fas fa-comment-dots"></i></a>
                          <h4>Silvia Smith</h4>
                          <p>aca va el texto del contacto der</p>
                        </div>
                      </div>
                    </div>
                  </div><!-- aca termina un par de contactos-->
                </div> <!-- aca termina la seccion de contactos-->
              </div>

            <!-- aca comienza la seccion de invitaciones-->



            <div class="col-md-3 col-sm-3 col-lg-3 col-xl-3 fondoVerde">
              <div class="paddingCentroB px-md-1 px-sm-1 px-lg-1 px-xl-1">
              <div class="invitacionesTitulo mt-2 mt-md-0 px-sm-0 px-lg-0 px-xl-0">
                <h6 class="tituloSeccion" id="titulo2">Mis Invitaciones (3)</h6>
              </div>

                <!-- aca comienza una invitacion-->
              <div class="row">
                <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 fondoAmarillo  hombre ">

                <div class="row">

                  <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4 fondoGris px-2 px-md-0 px-sm-0 px-lg-0 px-xl-0    media">
                      <img src="img/avatar-man.png" alt="foto Perfil" class="align-self-center fotoInv  card-img img-fluid max-width:100% height:auto">
                  </div>

                  <div class="col-md-8 col-sm-8 col-lg-8 col-xl-8 fondoBlanco px-md-2 px-sm-2 px-lg-2 px-xl-2 border border-light   media-body">
                  <a href="#"><i class="fas fa-user-check"></i></a>
                  <a href="#"><i class="fas fa-user-times"></i></a>
                    <h4>Juan Álvarez</h4>
                      <p>aca va el texto del contacto izq</p>
                  </div>

                </div>

              </div>

            </div>   <!-- aca termina una invitacion-->

            <!-- aca comienza una invitacion-->
          <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 fondoAmarillo  hombre ">

            <div class="row">

              <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4 fondoGris px-2 px-md-0 px-sm-0 px-lg-0 px-xl-0    media">
                  <img src="img/avatar-man.png" alt="foto Perfil" class="align-self-center fotoInv card-img img-fluid max-width:100% height:auto">
              </div>

              <div class="col-md-8 col-sm-8 col-lg-8 col-xl-8 fondoBlanco px-md-2 px-sm-2 px-lg-2 px-xl-2 border border-light  media-body">
                <a href="#"><i class="fas fa-user-check"></i></a>
                <a href="#"><i class="fas fa-user-times"></i></a>

                <h4>Juan David Perez</h4>
                  <p>aca va el texto del contacto izq</p>
              </div>

            </div>

          </div>

        </div>   <!-- aca termina una invitacion-->
        <!-- aca comienza una invitacion-->
      <div class="row">

        <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12 fondoAmarillo  hombre ">

        <div class="row">

          <div class="col-md-4 col-sm-4 col-lg-4 col-xl-4 fondoGris px-2 px-md-0 px-sm-0 px-lg-0 px-xl-0    media">
              <img src="img/avatar-man.png" alt="foto Perfil" class="align-self-center  fotoInv  card-img img-fluid max-width:100% height:auto">
          </div>

          <div class="col-md-8 col-sm-8 col-lg-8 col-xl-8 fondoBlanco px-md-2 px-sm-2 px-lg-2 px-xl-2 border border-light   media-body">
            <a href="#"><i class="fas fa-user-check"></i></a>
            <a href="#"><i class="fas fa-user-times"></i></a>

            <h4>Laura Sierra</h4>
              <p>aca va el texto del contacto izq</p>
          </div>





    </div>   <!-- aca termina una invitacion-->



    </div><!-- cierra columna de invitaciones-->
</div>
</div>
  </div> <!-- cierra fila de contactos e invitaciones-->
</div>
<footer>
</footer>
</div>
  </div>
   <!-- cierra filaTodo-->
<!-- cierra container-->


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </body>
</html>
