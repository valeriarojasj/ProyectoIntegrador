<?php
$nombre="";
$apellido="";
$email="";
$password="";
$confirm="";

$usuarios=[];
$usuario=[];
$ext='';
$jsonUsuarios=NULL;
$nombreArchivo="";
$id=0;
$errorLogIn="";
$avatar="";
$errorFoto="";
$errorVideo="";
$errorDoc="";
$imagen="";
$video="";
$docs="";
$textoPosteo="";



  function JsonToArray($unArchivoJson){

    $archivo=file_get_contents($unArchivoJson);
    $array=json_decode($archivo, true);
    return $array;
}//aca cierra la funcion jsonToArray

function RegistroUsuario($nombre,$apellido,$email,$pass,$confirm,$avatar="img/avatar-man.png"){
  $errorNombre="";
  $errorApellido="";
  $errorEmail="";
  $errorPassword="";
  $errorConfirm="";
  $errorArchivo="";

  if(strlen($nombre)==0){
    $errorNombre="Ingrese su nombre";


  }
  if(strlen($apellido)==0){
    $errorApellido="Ingrese su apellido";

  }
  if(strlen($email)==0){
    $errorEmail="Ingrese su email";


  }else if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)==false){
    $errorEmail="Ingrese un email valido";

    $email="";
  }
  if(strlen($pass)<8){
    $errorPassword="La contraseña debe tener por lo menos 8 caracteres";

  }

  if($pass!=$confirm){
    $errorConfirm="Las contraseñas no coinciden";

  }
  if($errorNombre=="" && $errorApellido==""&&$errorPassword==""&&$errorConfirm==""&&$errorEmail==""){

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
      }
    }
    $nombre=$usuario["nombre"];
    $apellido=$usuario["apellido"];
    $email=$usuario["email"];
    $pass=password_hash($_POST["inputPassword1"],PASSWORD_DEFAULT);
    $pass=$usuario["password"];
    if(file_exists("usuarios.json")){
      $usuarios=jsonToArray("usuarios.json");

      foreach($usuarios as $usuarioGuardado){
        if($usuarioGuardado["email"]==$usuario["email"]){
          $errorEmail="El email ya existe";
        }
        if($usuarioGuardado["id"]>$id) {
          $id = $usuarioGuardado["id"];
        }
      }
    }
      if(empty($errorEmail)){
        $id++;
        $id=$usuario['id'];
        $usuarios[]=$usuario;
        $jsonUsuarios=json_encode($usuarios);
        file_put_contents("usuarios.json",$jsonUsuarios);
        //$archivo=file_get_contents('usuarios.json');
        header('location:home.php');
      }
  }

}//aca cierra la funcion registroUsuario

function LogIn($email,$password){
$usuarios=jsonToArray("usuarios.json");
foreach($usuarios as $usuarioGuardado){
  if($usuarioGuardado["email"]==$email&&PASSWORD_VERIFY($password, $usuarioGuardado["password"])){

    header('location:pagina-principal.php');

  }

$errorLogIn="email o contraseña inválida";

}


    return $errorLogIn;

}//aca cierra la funcion LogIn

function CargarArchivoPosteo($errorFoto,$errorDoc,$errorVideo){
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


}}//aca cierra la funcion CargarArchivoPosteo

function Posteo(){
if($_POST){
$textoPosteo=$_POST['textoPosteo'];
return $textoPosteo;

}}

 ?>
