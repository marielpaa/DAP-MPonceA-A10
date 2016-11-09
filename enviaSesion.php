<?php

  session_start();
  include('conexion.php');

  $usuario = $_POST['usuario'];
  $pass = $_POST['pass'];



//codifica usuario y contraseña
//$md5Usuario = md5($usuario);
//$md5Pass = md5($pass);

//Escribe la consulta a la base de datos
//mysqli_query($conexion, "INSERT INTO sesiones ('usuario', 'pass') VALUES ('$md5Usuario', '$md5Pass')");
//mysqli_close($conexion);

mysqli_query($conexion, "INSERT INTO sesiones(usuario, pass) VALUES ('$usuario', '$pass')");
  //'sesiones'(usuario, pass) VALUES ('$usuario', '$pass')");
//
mysqli_close($conexion);
$_SESSION['s_usuario'] = $usuario;

?>