<?php 
function LogIn($email,$password){

$usuarios=jsonToArray("usuarios.json");

foreach($usuarios as $usuarioGuardado){
  if($usuarioGuardado["email"]==$usuario["email"]||PASSWORD_VERIFY($password, $usuarioGuardado["password"])){
    header('location:pagina-principal.php');
  }
  $errorLogIn="email o contraseña inválida";
}
    return $errorLogIn;
}
?>