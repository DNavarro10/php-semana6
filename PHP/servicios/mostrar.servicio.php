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
/* buscar datos */
$resultado = mysqli_query($conn, "SELECT * FROM usuarios ORDER BY cedula ASC"); 
?>