<?php session_start();

require 'PHP/usuarios.php';

if (isset($_SESSION['usuario'])){
	header('Location: index.php');
}


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
	if (empty($usuario) or empty($password) or empty($password2)){
		$errores .= '<li>Por favor llenar los datos faltantes</li>';
	} else {
		try{
			insertUsuario($usuario,$rol,$nombre,$clave,$direccion,$telefono);
		} catch(PDOException $e){
			echo "Error: " . $e->getMessage();
		}
		/* verificar si existe usuario
		 	PREPARE para preparar la consulta , :USUARIO por placeholder
		*/
		
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
		$estado = $conexion->prepare('INSERT INTO usuarios (id, usuario, pass) 
		VALUES (null, :usuario, :pass)');
		
		$estado ->execute(array(
			':usuario'=> $usuario, 
			':pass' => $password
		));
		
		
	}

}

	/* Vista del formulario */
	require 'Vistas/registrate.view.php';
?>