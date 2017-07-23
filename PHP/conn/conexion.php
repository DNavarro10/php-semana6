<?php 


class conexion{
		
	public $host = "localhost";
	public $user = "root";
	public $pass = "";
	public $db = "computodo";

			
	function conectar(){
			
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