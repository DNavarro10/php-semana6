<?php
	/*conexion*/
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "computodo";

			
		$conn = mysqli_connect($host,$user,$pass,$db);

		if($conn->connect_error){
		echo "Hay error en la conexion";
		exit();
		}


	$id = $_GET['id'];


	$result = mysqli_query($conn, "SELECT * FROM usuarios WHERE cedula = $id");

	while($mostrar = mysqli_fetch_array($result))
		{
			$cedula = $mostrar['cedula'];
			$rol = $mostrar['rol'];
			$nombre = $mostrar['nombre'];
			$clave = $mostrar['clave'];
			$direccion = $mostrar['direccion'];
			$telefono = $mostrar['telefono'];
		}
?>