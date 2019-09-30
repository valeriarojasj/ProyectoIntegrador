<?php
require_once("funciones.php");
session_start();
session_destroy();
if(isset($_COOKIE["email"])){
  setcooke("name", $email, time() - 1);
}
header('location:login.php');
 ?>
