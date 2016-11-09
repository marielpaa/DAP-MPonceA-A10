<?php  include ('validaSesion.php');?> 

	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>Inicio</title>
		<link rel="stylesheet" href="style2.css"> 

		<style>
		input[type=text], select {
		    width: 100%;
		    padding: 12px 20px;
		    margin: 8px 0;
		    display: inline-block;
		    border: 2px solid #ccc;
		    border-radius: 4px;
		    box-sizing: border-box;
		}

		input[type=submit] {
		    width: 100%;
		    background-color: #1abc9c;
		    color: #fff;
		    padding: 14px 20px;
		    margin: 8px 0;
		    border: none;
		    border-radius: 5px;
		    cursor: pointer;
		    font-size: 20px;
		    font-family: sans-serif;
		}

		input[type=submit]:hover {
		    background-color: #1bc6a4;
		}

		div {
		    border-radius: 70px;
		    background-color: #f2f2f2;
		    padding: 50px;
		}

		h1 {
		  font-family: sans-serif;
		  color: white;
		  text-align: center;
		}

		body {
		  background: #2c3e50;
		  font-family: sans-serif;
		  margin: 50px;
		}
		</style>
	</head>

	<body>
		
		<ul>
		  <li>Bienvenido</li>		  
		  <li style="float: right"><a class="btn btn-primary" href="cierraS.php">Cerrar sesión</a></li>
		  <li style="float: right"><a class="btn btn-primary" href="capturaU.php">Nuevo usuario</a></li>

		</ul>
		

		<?php echo "<label><h3>Usuario: </label>". $_SESSION['s_usuario'] ."</h3>";?>


		<h1>Registro de libros</h1>
		<br>

		<div class="container">
		  <form id="#form" action="enviaLibro.php" method="POST">

		    <label for="fname">Nombre: </label>
		    <input type="text" id="nombre" name="nombre" required="true">

		    <label for="lname">Autor: </label>
		    <input type="text" id="autor" name="autor" required="true">
		   
		    <label for="fname">Edición: </label>
		    <input type="text" id="edicion" name="edicion" required="true">
		    
		    <label for="lname">Año: </label>
		    <input type="text" id="ano" name="ano" required="true">
		    
		    <label for="fname">Editorial: </label>
		    <input type="text" id="editorial" name="editorial" required="true">
		    
		    <label for="lname">ISBN: </label>
		    <input type="text" id="isbn" name="isbn" required="true">
		    
		    <label for="fname">Idioma: </label>
		    <input type="text" id="idioma" name="idioma" required="true">
		    
		    <label for="lname">Páginas:</label>
		    <input type="text" id="pag" name="pag" required="true">

		    <label for="lname">Descripción:</label>
		    <input type="text" id="desc" name="desc" required="true">

		    <label for="lname">Código:</label>
		    <input type="text" id="codigo" name="codigo" required="true">

		    <label for="lname">ID:</label>
		    <input type="text" id="id" name="id" required="true">
		    
		  
		    <input type="submit" value="Registrar">

		  </form>	
		  <div id="status">
		</div>
		</div>
	
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript">
	      $('form').submit(function(event){
	        $.ajax({
	          type: 'post',
	          url: 'enviaLibro.php',
	          data: $('form').serialize(),
	          success: function(){
	            $('#status').html('Enviando...').hide()
	              .fadeIn(3000, function(){
	                $('#status').append('¡Enviado!');
	                window.location.replace('sitio.php');
	              })
	          },error: function(){
	            $('#status').html('Enviando...').fadeIn(3000, function(){
	                $('#status').append('Error :(');
	              })
	          }
	        });
	        event.preventDefault();
	      });
	    </script>

	</body>

	</html>
