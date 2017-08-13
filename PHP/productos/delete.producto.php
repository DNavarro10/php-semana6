<?php 

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
 
//deleting the row from table
$result = mysqli_query($conn, "DELETE FROM productos WHERE idProductos = $cedula");

header('location: ../../productos.php')

 ?>