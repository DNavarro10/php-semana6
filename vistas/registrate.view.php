<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script src="https://use.fontawesome.com/323a076c8b.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="CSS/style.css">
	<title>Registro</title>
</head>
<body>
	<div class="contenedor">
		<h1 class="titulo">Usuario</h1>
		<hr class="border">
			<div class="contenido">
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="formulario" name="login" method="post">
					
					<div class="form-group">
						<i class="icono izquierda fa fa-id-card-o"></i><input type="text" name="cedula" class="usuario" placeholder="Cedula" required="">
					</div>
					
					<div class="form-group">
						<i class="icono izquierda fa fa-id-card"></i><select name="rol" id="rol" class="picker picker2">
						<option value="Administrador">Administrador</option>
						<option value="Comprador">Comprador</option></select>
					</div>
					
					<div class="form-group">
						<i class="icono izquierda fa fa-user-circle"></i><input type="text" name="nombre" class="password" placeholder="Nombre" required="">
					</div>
					
					<div class="form-group">
						<i class="icono izquierda fa fa-lock"></i><input type="text" name="clave" class="usuario" placeholder="Contraseña" required="">
					</div>
					
					<div class="form-group">
						<i class="icono izquierda fa fa-home"></i><input type="text" name="direccion" class="usuario" placeholder="Dirección" required="">
					</div>
					
					<div class="form-group">
						<i class="icono izquierda fa fa-phone"></i><input type="text" name="telefono" class="usuario" placeholder="Telefono" required="">
					</div>
					<div class="form-group">
						
					</div>
					
					<?php if(!empty($errores)): ?>
						<div class="error">
							<ul>
								<?php echo $errores; ?>	
							</ul>
						</div>
					<?php endif; ?>
					
					<div class="group-btn">
						<input type="submit" class="btn-primary" value="Enviar" name="enviar">
					</div>
				</form>	
			</div>
		
	</div>
	
</body>
</html>