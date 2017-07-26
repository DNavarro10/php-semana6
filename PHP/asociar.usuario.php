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


	$cedula = $_GET['cedula'];


	$result = mysqli_query($conn, "SELECT * FROM usuarios WHERE cedula=$cedula");

	while($mostrar = mysqli_fetch_array($result))
		{
			$cedula = $mostrar['cedula'];
			$nombre = $mostrar['rol'];
			$ape_1 = $mostrar['nombre'];
			$ape_2 = $mostrar['clave'];
			$edad = $mostrar['direccion'];
			$tel = $mostrar['telefono'];
		}
?>