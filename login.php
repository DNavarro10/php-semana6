<?php session_start();
/* comprobar seseion*/
if (isset($_SESSION['usuario'])){
	header('Location: index.php');
}

$errores = '';

/* comprobar si los datos an sido enviados*/
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
	$password = filter_var(strtolower($_POST['password']), FILTER_SANITIZE_STRING);;
	$rol = filter_var(strtolower($_POST['rol']), FILTER_SANITIZE_STRING);;
	
	try{
		$conexion = new PDO('mysql:host=localhost; dbname=computodo','root', '');
	} catch (PDOException $e){
		echo "error: " . $e->getMessage();;
	}
	
	/* Verificar si hay usuarios*/
	
	$estado = $conexion ->prepare('
	SELECT * FROM usuarios WHERE cedula = :cedula AND clave = :clave AND rol = :rol'
	);
	
	$estado->execute(array(
		':cedula' =>$usuario,
		':clave' =>$password,
		':rol'=>$rol
	));
	
	$resultado = $estado->fetch();
	if($resultado !== false){
		$_SESSION['usuario'] = $usuario;
		header('Location: index.php');
	} else {
		$errores .= '<li> Datos incorrectos</li>';
	}
}


require 'Vistas/login.view.php';
?>