<?php
SESSION_START();
//obtiene el usuario y pass del formulario y crea variable de cada uno
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

//Ejecuta la conexión a la base de datos
include('conexion.php');

//codifica usuario y contraseña
//$md5Usuario = md5($usuario);
//$md5Pass = md5($pass);

//Escribe la consulta a la base de datos encriptado
//$qUsuario = $conexion->query("SELECT * FROM sesiones WHERE usuario ='$md5usuario' AND pass ='$md5pass'");

//Escribimos la consulta a la BD.
$qUsuario= $conexion->query("SELECT * FROM sesiones WHERE usuario='$usuario' AND pass='$pass'");

//Ejecuta la consulta
if ($resultado = mysqli_fetch_array($qUsuario)){
	//Si es verdadero, guarda en una variable de sesión el nombre de usuario
	$_SESSION['s_usuario'] = $usuario;
	//Y envia al usuario a la página sitio.html
	header('Location: sitio.php');
}else{
	//Si esta es falsa, mandamos a index.
	header ('Location: index.html');
}

?>

