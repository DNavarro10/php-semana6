<?php 


class conexion{
		
	
	function conectar(){
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "computodo";

			
		$conn = mysqli_connect($host,$user,$pass,$db);

		if($conn->connect_error){
		echo "Hay error en la conexion";
		exit();
		}
	}

	function desconectar(){
		mysqli_close($conn);
	}

}
?>


