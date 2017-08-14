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
	
	$producto = filter_var(strtolower($_POST['producto']), FILTER_SANITIZE_STRING);
	$nombre = filter_var(strtolower($_POST['nombre']), FILTER_SANITIZE_STRING);
	$descripcion = filter_var(strtolower($_POST['descripcion']), FILTER_SANITIZE_STRING);
	$precioUnitario = filter_var(strtolower($_POST['precio']), FILTER_SANITIZE_STRING);
	
	/* comprobar errores*/
	$errores = '';
	
	/* comprobar conexion*/
	if (empty($nombre) or empty($descripcion) or empty($precioUnitario)){
		$errores .= '<li>Por favor llenar los datos faltantes</li>';
	} else {
		try{
			$conexion = new PDO('mysql:host=localhost; dbname=computodo','root', '');
		} catch(PDOException $e){
			echo "Error: " . $e->getMessage();
		}
		
		$estado = $conexion->prepare('SELECT * FROM productos WHERE idProductos = :producto LIMIT 1');
		$estado->execute(array(':producto' => $producto));
		$resultado = $estado->fetch();
		/* $resultado guarda  O registro de producto O false*/
		
		if ($resultado != false){
			$errores .= '<li>El producto ya existe</li>';
		}
		
	
	}
	/* si error = '' , no hay errores*/
	if($errores == ''){
		$estado = $conexion->prepare('INSERT INTO productos (idProductos, nombre, descripcion, precioUnitario) VALUES  (:producto, :nombre, :descripcion, :precioUnitario)');
		
		$estado ->execute(array(
			':producto'=> $producto, 
			':nombre' => $nombre,
			':descripcion'=> $descripcion,
			':precioUnitario'=> $precioUnitario,
			
		));
		
		
		header('Location: productos.php');
	}

}

	/* Vista del formulario */
	require 'vistas/productos/productos.view.php';
?>