<?php 
	include 'conn/conexion.php';


	function insertServicios($idServicio, $nombre, $descripcion, $precioHora){
		
		$conn = conectar();
		/* insertar*/
		$sql = "INSERT into servicioss (idServicio, nombre, descripcion, precioHora) VALUES (".$idServicio.",".$nombre.",".$servicio.",".$precioHora.")";
		
		if (mysqli_query($conn, $sql)){
			return true;
		}else {
			return false;
		}
		
		desconectar($conn);
	}

	function updateServicios($idServicio){
		$conn = conectar();
		/* actualizar */
		$sql = "UPDATE servicioss SET idServicio = '$idServicio', nombre = '$nombre', descripcion = '$servicio', precioHora = '$precioHora'";
		
		if (mysqli_query($conn, $sql)){
			return true;
		}else {
			return false;
		}
		
		desconectar($conn);
	
	}

	function deleteServicios($idServicio){
		$conn = conectar();
		/* borrar */
		$sql = "DELETE FROM servicios WHERE idServicio = $idServicio";
		
		if (mysqli_query($conn, $sql)){
			return true;
		}else {
			return false;
		}
		
		desconectar($conn);

	}

	function mostrarServicios($idServicio){
		$conn = conectar();
		/* select */
		$sql = "SELECT * FROM servicios ORDER BY idServicio ASC";
		
		if (mysqli_query($conn, $sql)){
			return true;
		}else {
			return false;
		}
		
		desconectar($conn);
		
	}

?>