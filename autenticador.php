aca van las funciones de login, logout y a validacion sobre si está logueado el usuario
funcion de login debe preguntar primero si hay cookies (debajo de la declaracion del session)
if(isset($_POST['mantenermeLogeado'])){
  setcookie('email', $email, time() + 60 * 60 * 24 * 30);
}

--> para mantenerme logeado, sino pregunta por session.
--> para deslogearme teniendo una cookie, la seteo con un valor negativo.
