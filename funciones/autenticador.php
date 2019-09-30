<?php
/*aca van las funciones de login, logout y a validacion sobre si está logueado el usuario
funcion de login debe preguntar primero si hay cookies (debajo de la declaracion del session)
if(isset($_POST['mantenermeLogeado'])){
  setcookie('email', $email, time() + 60 * 60 * 24 * 30);
}

--> para mantenerme logeado, sino pregunta por session.
--> para deslogearme teniendo una cookie, la seteo con un valor negativo.
*/
session_start();

function elUsuarioEstaLogueado(){
  if(isset($_SESSION["email"])){
    return true;
  }
  return false;

}

function logIn($email,$password){
  $usuarios=jsonToArray("usuarios.json");
  foreach($usuarios as $usuarioGuardado){
    if($usuarioGuardado["email"]==$email&&password_verify($password, $usuarioGuardado["password"])){
      $_SESSION['email']= $usuarioGuardado["email"];
      $_SESSION['avatar']= $usuarioGuardado["avatar"];
      $_SESSION['nombre']= $usuarioGuardado["nombre"];
      $_SESSION['apellido']= $usuarioGuardado["apellido"];
      $_SESSION['id']= $usuarioGuardado["id"];

      if(isset($_POST["mantenermeLogueado"])){
        setcookie("email", $email, time() + 60);
      }
    header('location:pagina-principal.php');exit;
    }
  }
  return "Usuario y/o contraseña inválido";
}//aca cierra la funcion LogIn

function logOut(){
  session_destroy();
  if(isset($_COOKIE["email"])){
    setcookie("name", $email, time() - 1);
  }
  header('location:login.php');
}
 ?>
