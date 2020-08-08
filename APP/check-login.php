<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>iniciar seccion y crear cuenta</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	</head>
	<body style="background-color: #9C6565; font-size: 20px; color: black; font-family: Arial;">
		<div class="container">
		
			<?php
			// Información de conexión. expediente
			include 'conn.php';	
			
			// Variables de conexión
			$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

			// Verifica la conexión
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			
			// datos enviados desde el formulario login.html
			$email = $_POST['email']; 
			$password = $_POST['password'];
			
			// Consulta enviada a la base de datos
			$result = mysqli_query($conn, "SELECT email, password, nombre FROM usuarios WHERE Email = '$email'");
			
			// La variable $ row retiene el resultado de la consulta
			$row = mysqli_fetch_assoc($result);
			
			// La variable $ hash contiene el hash de contraseña en la base de datos
			$hash = $row['password'];
			
			/* 
			La función password_Verify () verifica si la contraseña ingresada por el usuario
			coincide con el hash de contraseña en la base de datos. Si todo está bien, la sesión
			se crea por un minuto. Cambie 1 en $ _SESSION [inicio] a 5 por una sesión de 5 minutos.
			*/
			if (password_verify($_POST['password'], $hash)) {	
				
				$_SESSION['loggedin'] = true;
				$_SESSION['nombre'] = $row['nombre'];
				$_SESSION['start'] = time();
				$_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ;						
				
				?>
				<br>
				<br>
				<br>
				<br>
				
				<br>
				<br style="box-shadow: ">
				
				<?php
				echo "<div style='background-color: #8E7B7B; padding:5px; box-shadow:5px 5px 8px; border-radius:10px;' class='text-center'  role='alert'><h2><strong> Bienvenid@  $row[nombre]</strong></h2>			
				<p> Gracias por ingresar a nuestra aplicacion web, Espero que aprendas mucho y disfruta de nuestras recetas
				<br>
				Ingresa y disfruta de las recetas que tenemos para ti</p>	
				<p><a href='../Index_usuario.php'><button style='font-size:30px;'>Iniciar</button></a></p></div>";
			
			} else {
				echo "<div class='alert alert-danger mt-4' role='alert'>Email o contraseña incorrectos!
				<p><a href='login.html'><strong>Porfavor ingrese de nuevo!</strong></a></p></div>";			
			}	
			?>
		</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	</body>
</html>