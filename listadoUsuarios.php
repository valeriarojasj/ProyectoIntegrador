<?php
session_start();
require_once("funciones.php");
$usuarios=JsonToArray("usuarios.json");
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <ul>


<?php foreach ($usuarios as $usuarioGuardado) {
  $email=$usuarioGuardado["email"];
  $ruta="perfil.php?email=$email";
?>
<li><a href=<?=$ruta?>><?=$email?></a></li>

<?php }  ?>

  </ul>
  </body>
</html>
