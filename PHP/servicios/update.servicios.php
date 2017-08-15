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
	
			
		$usuario = filter_var(strtolower($_POST['idServicio']), FILTER_SANITIZE_STRING);
		$nombre = filter_var(strtolower($_POST['nombre']), FILTER_SANITIZE_STRING);
		$clave = filter_var(strtolower($_POST['descripcion']), FILTER_SANITIZE_STRING);
		$direccion = filter_var(strtolower($_POST['precioHora']), FILTER_SANITIZE_STRING);
		
        /* Query de actualzar*/
        $resultado = mysqli_query($conn, "UPDATE servicios SET idServicio='$usuario', nombre='$nombre',descripcion='$clave',precioHora='$direccion' WHERE idServicio='$id'");
	}
        /*Redoreccionar a index*/
        header("Location: ../../servicios.php");
 		mysqli_close($conn);
    }

?>