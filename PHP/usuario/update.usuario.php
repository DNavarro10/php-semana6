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

		if(isset($_POST['actu'])){    	{
				$id = $_POST['id']; /* campo hidden*/	


				$usuario = filter_var(strtolower($_POST['cedula']), FILTER_SANITIZE_STRING);
				$rol = filter_var(strtolower($_POST['rol']), FILTER_SANITIZE_STRING);
				$nombre = filter_var(strtolower($_POST['nombre']), FILTER_SANITIZE_STRING);
				$clave = filter_var(strtolower($_POST['clave']), FILTER_SANITIZE_STRING);
				$direccion = filter_var(strtolower($_POST['direccion']), FILTER_SANITIZE_STRING);
				$telefono = filter_var(strtolower($_POST['telefono']), FILTER_SANITIZE_STRING);
				/* Query de actualzar*/
				$resultado = mysqli_query($conn, "UPDATE usuarios SET cedula = $usuario ,rol='$rol', nombre='$nombre',clave= $clave ,direccion='$direccion',telefono=$telefono WHERE cedula='$id'");
			}
				/*Redoreccionar a index*/
				header("Location: ../../registrate.php");
				mysqli_close($conn);
			}

?>