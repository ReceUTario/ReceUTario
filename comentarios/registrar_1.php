
<?php

	include("con_bd.php");

	if (isset($_POST['register'])){
		if (strlen($_POST ['nombre']) >=1){
			$nombre = trim($_POST['nombre']);
			$comentarios = trim($_POST['comentarios']);
			$fechareg = date("d/m/y h:i:s");
			$clave = trim("1");

			$consulta = "INSERT INTO comentarios (nombre, comentarios, fechareg,clave) values('$nombre', '$comentarios', '$fechareg','$clave')";

			$resultado = mysqli_query($conex, $consulta);

	if($resultado) { ?>
				<h3 class="bien">¡Hemos recibidos su comentarios¡</h3>				<?php } else { ?>
					<h3 class="bad">!Ha ocurrido un error¡</h3>
	<?php }
		}
}

?>