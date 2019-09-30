<?php

$usuarios=[];
$jsonUsuarios=NULL;
$id=0;


/*$errorLogIn="";
$avatar="";
$errorFoto="";
$errorVideo="";
$errorDoc="";
$imagen="";
$video="";
$docs="";
$textoPosteo="";
*/


function JsonToArray($unArchivoJson){

    $archivo=file_get_contents($unArchivoJson);
    $array=json_decode($archivo, true);
    return $array;
}//aca cierra la funcion jsonToArray

function RegistroUsuario($nombre,$apellido,$email,$pass,$confirm,$avatar){
  $imagen="img/avatar-man.png";
  $usuario=[];
  $ext='';
  $nombreArchivo="";
  $errorNombre="";
  $errorApellido="";
  $errorEmail="";
  $errorPassword="";
  $errorConfirm="";
  $id=0;

  //$errorArchivo="";

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

    if($avatar!=null){
      if($avatar['error']==0){

        $ext=pathinfo($avatar['name'],PATHINFO_EXTENSION);
        if($ext!='jpg'&&$ext!='jpeg'&&$ext!='png'){
          $errorArchivo="Formato invalido.Solo se permiten archivos jpg, jpeg o png";
        }else{
          $nombreArchivo=$email . ".".$ext;
          move_uploaded_file($avatar['tmp_name'],'img/'.$nombreArchivo);
          $imagen='img/'.$nombreArchivo;
        }

      }else{
        $errorArchivo="Error al cargar el archivo";
      }
    }

    $usuario['avatar']=$imagen;
    $usuario["nombre"]=$nombre;
    $usuario["apellido"]=$apellido;
    $usuario["email"]=$email;
    $usuario["password"]=password_hash($pass,PASSWORD_DEFAULT);

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
        $usuario['id']=$id;
        $usuarios[]=$usuario;
        $jsonUsuarios=json_encode($usuarios);
        file_put_contents("usuarios.json",$jsonUsuarios);

        //$archivo=file_get_contents('usuarios.json');
        header('location:login.php');
      }
  }



}//aca cierra la funcion registroUsuario



function CargarArchivoPosteo($errorImagen, $errorVideo, $errorDoc,$nombreImagen,$nombreVideo,$nombreDoc, $imagenTmpName,$videoTmpName,$docTmpName, $textoPosteo,$areaInteres,$tipoPosteo){

  $idPosteo=0;
  $destinoImagen="";
  $destinoVideo="";
  $destinoDoc="";


    if($errorImagen != 0){
      "Error al cargar la imagen";
    }else{
      $ext=pathinfo($nombreImagen,PATHINFO_EXTENSION);
      if($ext!="jpg" && $ext!="jpeg" && $ext!="png"){
      $errorFoto="Solo se permiten fotos en formato jpg, jpeg o png.<br>";
    }else{
      $destinoImagen="uploads/".md5($nombreImagen).".".$ext;
      move_uploaded_file($imagenTmpName,$destinoImagen);}
    }
  if($errorVideo != 0){
    "Error al cargar el Video";
    }else{
      $ext=pathinfo($nombreVideo,PATHINFO_EXTENSION);
      if($ext!="mpg" && $ext!="mov" && $ext!="mpeg" && $ext!="mp4" && $ext!="avi" && $ext!="mpeg-4"){
      $errorVideo="Solo se permiten videos en formato mpg, mov, mpeg, mp4, avi y mpeg-4.<br>";
  }else{$destinoVideo="uploads/".md5($nombreVideo).".".$ext;
    move_uploaded_file($videoTmpName, $destinoVideo);}

}
  if($errorDoc != 0){
    "Error al cargar el documento";
  }else{
    $ext=pathinfo($nombreDoc,PATHINFO_EXTENSION);
    if($ext!="doc" && $ext!="docx" && $ext!="pdf"){
      $errorDoc="Solo se permiten documentos en formato doc, docx y pdf.<br>";
  }else{
    $destinoDoc="uploads/".md5($nombreDoc).".".$ext;
    move_uploaded_file($docTmpName,$destinoDoc);
  }

}


if(file_exists("posteos.json")){

  $arrayPosteos=jsonToArray("posteos.json");
  if(!empty($arrayPosteos)){
  foreach($arrayPosteos as $arrayPosteo){

    if($arrayPosteo["idPosteo"]>$idPosteo){
      $idPosteo = $arrayPosteo["idPosteo"];
    }
  }
  $idPosteo++;
}else{$idPosteo=1;}
}

$arrayPosteo=[];
$arrayPosteo["email"]=$_SESSION["email"];
$arrayPosteo["idPosteo"]=$idPosteo;
$arrayPosteo["documento"]=$destinoDoc;
$arrayPosteo["imagen"]=$destinoImagen;
$arrayPosteo["video"]=$destinoVideo;
$arrayPosteo["textoPosteo"]=$textoPosteo;
$arrayPosteo["tipoPosteo"]=$tipoPosteo;
$arrayPosteo["areaInteres"]=$areaInteres;
$arrayPosteos[]=$arrayPosteo;
$jsonPosteos=json_encode($arrayPosteos);

file_put_contents("posteos.json",$jsonPosteos);

}//aca cierra la funcion CargarArchivoPosteo

function traerMisPosteos($email){
$jsonPosteos=file_get_contents("posteos.json");
$arrayPosteos=json_decode($jsonPosteos,true);

  foreach ($arrayPosteos as $arrayPosteo) {
    if($arrayPosteo["email"]==$email){
      $misPosteos[]=$arrayPosteo;
    }
  }
  return $misPosteos;
}




 ?>
