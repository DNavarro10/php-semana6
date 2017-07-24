<?php 
	include 'conn/conexion.php';


	function insertUsuario($cedula, $rol, $nombre, $clave, $direccion, $telefono){
		
		$conn = conectar();
		/* insertar*/
		$sql = "INSERT into usuarios (cedula, rol, nombre, clave, direccion, telefono) VALUES (".$cedula.",".$rol.",".$nombre.",".$clave.",".$direccion.",".$telefono.")";
		
		if (mysqli_query($conn, $sql)){
			return true;
		}else {
			return false;
		}
		
		desconectar($conn);
	}

	function updateUsuario($cedula){
		$conn = conectar();
		/* actualizar */
		$sql = "UPDATE usuarios SET cedula = '$cedula', rol = '$rol', nombre = '$nombre', clave = '$clave', direccion = '$direccion', telefono = '$telefono'" ;
		
		if (mysqli_query($conn, $sql)){
			return true;
		}else {
			return false;
		}
		
		desconectar($conn);
	
	}

	function deleteUsuario($cedula){
		$conn = conectar();
		/* borrar */
		$sql = "DELETE FROM usuarios WHERE cedula = $cedula";
		
		if (mysqli_query($conn, $sql)){
			return true;
		}else {
			return false;
		}
		
		desconectar($conn);

	}

	function mostrarUsuario($cedula){
		$conn = conectar();
		/* select */
		$sql = "SELECT * FROM usuarios ORDER BY cedula ASC";
		
		if (mysqli_query($conn, $sql)){
			return true;
		}else {
			return false;
		}
		
		desconectar($conn);
		
	}

?>