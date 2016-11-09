<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>Nuevo registro</title>
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<style type="text/css">
		    p {
		      margin-top: 80px;
		      margin-bottom: 80px;
		      margin-right: 150px;
		      margin-left: 150px;
		      border-top-style: dotted;   
		      border-bottom-style: dotted;  
		      border-color: white;
		    }

		    div {
		      color: white;
		      float: center;
		      font-family: sans-serif;
		      font-size: 20px;
		    }

		    body {
		      margin: 0;
		      padding: 0;
		      font-family: Sans-serif;
		      background: #2c3e50;
		    }

		    h1 {
		      text-align: center;
		      margin-top: 5px;
		      font-family: sans-serif;
		    }
		</style>

	</head>

	<body>
		<p>
		<div class="container">
		  <h1>Nuevo registro</h1>
		  </br>
		  <form id='#form' action="enviaSesion.php" method="POST" class="form-horizontal">
		    <div class="form-group">
		      <label class="control-label col-sm-3" for="email">E-mail:</label>
		      <div class="col-sm-7">
		        <input type="email" class="form-control" id="usuario" name="usuario" placeholder="Ingrese email" required="true">
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="control-label col-sm-3" for="pass">Password:</label>
		      <div class="col-sm-7">
		        <input type="password" class="form-control" id="pass" name="pass" placeholder="Ingrese su contraseña" required="true">
		      </div>
		    </div>
		    <div class="form-group">
		      <label class="control-label col-sm-3" for="cpass">Confirme password:</label>
		      <div class="col-sm-7">
		        <input type="password" class="form-control" id="cpass" name="cpass" placeholder="Ingrese su contraseña" required="true">
		      </div>
		    </div>
		    <div class="form-group">
		      <div class="col-sm-offset-3 col-sm-7">
		        <button type="submit" class="btn btn-default">Registrar</button>
		      </div>
		      <div id="status"></div>
		    </div>
		  </form>

		</div>
		</p>


		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript">
	      $('form').submit(function(event){


	      	var p = $('#pass').val().trim();
			var cpass = $('#cpass').val().trim();
			var u = $('#usuario').val().trim();
			if (p != cpass) {
				alert('Las contraseñas no coinciden, vuelva a escribirlas');
				//Limpiamos los campos pass y cpass
				$('#pass').val('');
				$('#cpass').val('');
				
			} else {

	          $.ajax({
	          type: 'post',
	          url: 'enviaSesion.php',
	          data: $('form').serialize(),
	          success: function(){
	            $('#status').html('Enviando...').hide()
	              .fadeIn(3000, function(){
	                $('#status').append('¡Enviado!');
	                window.location.replace('sitio.php');
	              })
	          }
	        });
	        event.preventDefault();

	      });

	    </script>

	</body>
</html>