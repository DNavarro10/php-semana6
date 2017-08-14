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


	$id = $_GET['precioUnitario'];


	$result = mysqli_query($conn, "SELECT * FROM productos WHERE idProductos = $id");

	while($mostrar = mysqli_fetch_array($result))
		{
			$cedula = $mostrar['idProductos'];
			$nombre = $mostrar['nombre'];
			$clave = $mostrar['descripcion'];
			$direccion = $mostrar['precioUnitario'];
		
		}
?>