<?php session_start();



//revibir datos

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	/* 
		funciones usadas
			filter_var() para limpar valores
			strtolower() transformar a minusculas
			como parametros de filter_var
				FILTER_SANITIZE_STRING
				para evitar injecciones de codigo
	*/
	
	$usuario = filter_var(strtolower($_POST['cedula']), FILTER_SANITIZE_STRING);
	$rol = filter_var(strtolower($_POST['rol']), FILTER_SANITIZE_STRING);
	$nombre = filter_var(strtolower($_POST['nombre']), FILTER_SANITIZE_STRING);
	$clave = filter_var(strtolower($_POST['clave']), FILTER_SANITIZE_STRING);
	$direccion = filter_var(strtolower($_POST['direccion']), FILTER_SANITIZE_STRING);
	$telefono = filter_var(strtolower($_POST['telefono']), FILTER_SANITIZE_STRING);
	
	/* comprobar errores*/
	$errores = '';
	
	/* comprobar conexion*/
	if (empty($usuario) or empty($rol) or empty($nombre) or empty($clave) or empty($direccion) or empty($telefono)){
		$errores .= '<li>Por favor llenar los datos faltantes</li>';
	} else {
		try{
			$conexion = new PDO('mysql:host=localhost; dbname=computodo','root', '');
		} catch(PDOException $e){
			echo "Error: " . $e->getMessage();
		}
		
		$estado = $conexion->prepare('SELECT * FROM usuarios WHERE usuarios = :usuario LIMIT 1');
		$estado->execute(array(':usuario' => $usuario));
		$resultado = $estado->fetch();
		/* $resultado guarda  O registro de usuario O false*/
		
		if ($resultado != false){
			$errores .= '<li>El usuario ya existe</li>';
		}
		
	
	}
	/* si error = '' , no hay errores*/
	if($errores == ''){
		$estado = $conexion->prepare('INSERT INTO usuarios (cedula, rol, nombre, clave, direccion, telefono) VALUES  (:usuario, :rol, :nombre, :clave, :direccion, :telefono)');
		
		$estado ->execute(array(
			':usuario'=> $usuario, 
			':rol' => $rol,
			':nombre'=> $nombre,
			':clave'=> $clave,
			':direccion'=>$direccion,
			':telefono'=>$telefono
		));
		
		
		header('Location: registrate.php');
	}

}

	/* Vista del formulario */
	require 'vistas/usuarios.view.php';
?>