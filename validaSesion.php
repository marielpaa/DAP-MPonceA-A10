<?php

//inicia sesion
session_start();

//si la variable de sesion de usuario no esta definida te va a mandar al index
//si el usuario no esta en sesion y tratas de meter este url directo te va a
//redireccionar al index
if(!isset($_SESSION['s_usuario'])){
	header("Location: index.html");
}

?>