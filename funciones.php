<?php
$errorNombre="";
$errorApellido="";
$errorPassword="";
$errorConfirm="";
$errorEmail="";
$errorArchivo="";
$usuarios=[];
$usuario=[];
$ext='';
$jsonUsuarios=NULL;
$nombreArchivo="";
$nombre="";
$apellido="";
$email="";


  function jsonToArray($unArchivoJson){

    $archivo=file_get_contents($unArchivoJson);
    $array=json_decode($archivo, true);
    return $array;

  }
if($_POST){

  $nombre=$_POST["name"];
  $apellido=$_POST["lastName"];
  $email=$_POST["email"];
  $password=$_POST["inputPassword1"];
  $confirm=$_POST["confirmPassword1"];

  if(strlen($nombre)==0){
    $errorNombre="Ingrese su nombre";


  }
  if(strlen($apellido)==0){
    $errorNombre="Ingrese su apellido";

  }
  if(strlen($email)==0){
    $errorEmail="Ingrese su email";


  }else if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)==false){
    $errorEmail="Ingrese un email valido";

    $email="";
  }
  if(strlen($password)<8){
    $errorPassword="La contraseña debe tener por lo menos 8 caracteres";

  }
  if(strlen($confirm)<8){
    $errorConfirm="La contraseña debe tener por lo menos 8 caracteres";

  }
  if($password!=$confirm){
    $errorConfirm="Las contraseñas no coinciden";

  }
  else{
    
      if($_FILES){
        if($_FILES['avatar']['error']==0){

          $ext=pathinfo($_FILES['avatar']['name'],PATHINFO_EXTENSION);
          if($ext!='jpg'&&$ext!='jpeg'&&$ext!='png'){
            $errorArchivo="Formato invalido.Solo se permiten archivos jpg, jpeg o png";
          }else{

            $nombreArchivo=$email . ".".$ext;
            move_uploaded_file($_FILES['avatar']['tmp_name'],'img/'.$nombreArchivo);
            $usuario["avatar"]='img/'.$nombreArchivo;
          }

      }else{
    $errorArchivo="Error al cargar el archivo";
  }}


    $usuario["nombre"]=$nombre;
    $usuario["apellido"]=$apellido;
    $usuario["email"]=$email;
    $password=password_hash($_POST["inputPassword1"],PASSWORD_DEFAULT);
    $usuario["password"]=$password;


    /*if(isset($archivo)){

    }

  foreach ($usuarios as $usuario) {
    if

  }
  */
    if(file_exists("usuarios.json")){
      $usuarios=jsonToArray("usuarios.json");

      foreach($usuarios as $usuarioGuardado){
        if($usuarioGuardado["email"]==$usuario["email"]){
        $errorEmail="El email ya existe";
        }
      }

      if(empty($errorEmail)){
      $usuarios[]=$usuario;
      $jsonUsuarios=json_encode($usuarios);
      file_put_contents("usuarios.json",$jsonUsuarios);
      }else{
      $usuarios[]=$usuario;
      $jsonUsuarios=json_encode($usuarios);
        file_put_contents("usuarios.json",$jsonUsuarios);
      }

      //$archivo=file_get_contents('usuarios.json');
    }
  }
}
//aca termina if POST

 ?>
