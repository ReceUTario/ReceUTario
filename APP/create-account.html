<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Crear cuenta en basedatos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
  </head>
<body style="background-color: #9C6565; font-size: 30px; padding: 50px 20px;">



	<?php

	include 'conn.php';

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	//Verifica la conexión
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	// Consulta para verificar si el correo electrónico ya existe
	$checkEmail = "SELECT * FROM usuarios WHERE Email = '$_POST[email]' ";

	// El resultado $ variable contiene los datos de conexión y la consulta
	$result = $conn-> query($checkEmail);

	// $ Count variable contiene el resultado de la consulta
	$count = mysqli_num_rows($result);

	// Si count == 1 eso significa que el correo electrónico ya está en la base de datos
	if ($count == 1) {

	echo "<br><div class='container'><div style='background-color: #EA3B3B; color:black; box-shadow:5px 5px 8px; border-radius:10px;' class='alert alert-warning mt-4 text-center' role='alert'>
					<h1>Este correo no esta disponible.</h1>
					<p><a href='register.php'>Por favor intentelo de nuevo</a></p>
				</div> </div>";
	} else {	
	
	/*
	Si el correo electrónico no existe, los datos del formulario se envían a base de datos y se crea la cuenta
	*/
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$pass = $_POST['password'];

	
	// La función password_hash () convierte la contraseña en un hash antes de enviarla a la base de datos
	$passHash = password_hash($pass, PASSWORD_DEFAULT);
	
	// Consulta para enviar hash de nombre, correo electrónico y contraseña a la base de datos
	$query = "INSERT INTO usuarios (Nombre, Email, Password) VALUES ('$nombre', '$email', '$passHash')";

	if (mysqli_query($conn, $query)) {
		echo "<br><div class='container'><div style='background-color: #0DE10D; color:black; box-shadow:5px 5px 8px; border-radius:10px;' class='alert alert-success mt-4 text-center' role='alert'><h1>Tu cuenta ha sido creada exitosamente.</h1><br>
		<a class='btn btn-outline-primary' href='../Index_usuario.php' role='button' style='background-color: #0522FB;'><h3>Iniciar Sesión</h3></a></div></div>";		
		} else {
			echo "Error: " . $query . "<br>" . mysqli_error($conn);
		}	
	}	
	mysqli_close($conn);
	?>

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>