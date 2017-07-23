<?php 
	include 'conn/conexion.php';


	function insertCompra($cedula, $idProducto, $idServicio, $cantidad, $precioTotal){
		
		$conn = conectar();
		/* insertar*/
		$sql = "INSERT into compras (cedula, idProducto, idServicio, cantidad) VALUES (".$cedula.",".$producto.",".$servicio.",".$cantidad.")";
		
		if (mysqli_query($conn, $sql)){
			return true;
		}else {
			return false;
		}
		
		desconectar($conn);
	}

	function updateCompra($cedula){
		$conn = conectar();
		/* actualizar */
		$sql = "UPDATE compras SET cedula = '$cedula', idProducto = '$producto', idServicio = '$servicio', cantidad = '$cantidad'";
		
		if (mysqli_query($conn, $sql)){
			return true;
		}else {
			return false;
		}
		
		desconectar($conn);
	
	}

	function deleteCompra($cedula){
		$conn = conectar();
		/* borrar */
		$sql = "DELETE FROM compras WHERE cedula = $cedula";
		
		if (mysqli_query($conn, $sql)){
			return true;
		}else {
			return false;
		}
		
		desconectar($conn);

	}

	function mostrarCompra($cedula){
		$conn = conectar();
		/* select */
		$sql = "SELECT * FROM compras ORDER BY cedula ASC";
		
		if (mysqli_query($conn, $sql)){
			return true;
		}else {
			return false;
		}
		
		desconectar($conn);
		
	}

?>