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


	$id = $_GET['idServicios'];


	$result = mysqli_query($conn, "SELECT * FROM Servicios WHERE idServicio = $id");

	while($mostrar = mysqli_fetch_array($result))
		{
			$cedula = $mostrar['idServicio'];
			$nombre = $mostrar['nombre'];
			$clave = $mostrar['descripcion'];
			$direccion = $mostrar['precioHora'];
		
		}
?>