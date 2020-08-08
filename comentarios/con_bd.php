<?php
//Servidor, usuario de la base de datos, contraseña del usuario, nombre de la base de datos.

$conex = mysqli_connect("localhost", "root", "", "receutuario");
	if(mysqli_connect_errno()){
		echo "conexion fallida:" , mysqli_connect_error();
		exit();
	}

?>