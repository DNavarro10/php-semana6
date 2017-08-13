<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script src="https://use.fontawesome.com/323a076c8b.js"></script>
	<link rel="stylesheet" href="CSS/style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<script type="text/javascript" charset="utf-8" src="js/jquery-
	3.2.1.min.js"></script>
	
	<title>Registro</title>
</head>
<body>
	<div class="contenedor">
		<h1 class="titulo">Login</h1>
		<hr class="border">
			<div class="contenido">
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="formulario" name="login" method="post">
					<div class="form-group">
						<i class="icono izquierda fa fa-id-card"></i><select name="rol" id="rol" class="picker">
						<option value="Administrador">Administrador</option>
						<option value="Comprador">Comprador</option>
						</select><p class="rol">Seleccionar Rol</p>
					</div>
					<div class="form-group">
						<i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Numero de Cedula" required="">
					</div>
					<div class="form-group">
						<i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password_btn" placeholder="Introducir Clave" required=""><i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
					</div>
					<?php if(!empty($errores)): ?>
						<div class="error">
							<ul>
								<?php echo $errores; ?>	
							</ul>
						</div>
					<?php endif; ?>
				</form>	
			</div>
		
	</div>
	
</body>
</html>