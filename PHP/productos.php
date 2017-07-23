<?php 
	include 'conn/conexion.php';


	function insertProductos($idProducto, $nombre, $descripcion, $precioUnit){
		
		$conn = conectar();
		/* insertar*/
		$sql = "INSERT into productos (idProducto, nombre, descripcion, precioUnitario) VALUES (".$idProducto.",".$nombre.",".$descripcion.",".$precioUnit.")";
		
		if (mysqli_query($conn, $sql)){
			return true;
		}else {
			return false;
		}
		
		desconectar($conn);
	}

	function updateProductos($idProducto){
		$conn = conectar();
		/* actualizar */
		$sql = "UPDATE productos SET idProducto = '$idProducto', nombre = '$nombre', descripcion = '$descripcion', precioUnitario = '$precioUnit'";
		
		if (mysqli_query($conn, $sql)){
			return true;
		}else {
			return false;
		}
		
		desconectar($conn);
	
	}

	function deleteProductos($idProducto){
		$conn = conectar();
		/* borrar */
		$sql = "DELETE FROM productos WHERE idProductos = $idProducto";
		
		if (mysqli_query($conn, $sql)){
			return true;
		}else {
			return false;
		}
		
		desconectar($conn);

	}

	function mostrarProductos($idProducto){
		$conn = conectar();
		/* select */
		$sql = "SELECT * FROM productos ORDER BY idProductos ASC";
		
		if (mysqli_query($conn, $sql)){
			return true;
		}else {
			return false;
		}
		
		desconectar($conn);
		
	}

?>