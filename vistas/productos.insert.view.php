<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script src="https://use.fontawesome.com/323a076c8b.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<link rel="stylesheet" href="./../CSS/style.css">
	<title>Registro</title>
</head>
<body>
	<div class="contenedor">
		<h1 class="titulo">Productos</h1>
		<hr class="border">
			<div class="contenido">
				<form action="./../registrate.php" class="formulario" name="login" method="post">
					
					<div class="form-group">
						<i class="icono izquierda fa fa-database"></i><input type="text" name="producto" class="usuario" placeholder="Producto" required="">
					</div>
					
					<div class="form-group">
						<i class="icono izquierda fa fa-database"></i><input type="text" name="nombre" class="password" placeholder="Nombre" required="">
					</div>
					
					<div class="form-group">
						<i class="icono izquierda fa fa-database"></i><input type="text" name="descripcion" class="usuario" placeholder="Descripcion" required="">
					</div>
					
					<div class="form-group">
						<i class="icono izquierda fa fa-database"></i><input type="text" name="precio" class="usuario" placeholder="Precio Unt" required="">
					</div>
					
					
					<?php if(!empty($errores)): ?>
						<div class="error">
							<ul>
								<?php echo $errores; ?>	
							</ul>
						</div>
					<?php endif; ?>
					
					<div class="group-btn">
						<input type="submit" class="btn btn-primary" value="Crear" name="enviar">
						<a href="./../productos.php">volver</a>
					</div>
				</form>	
			</div>
		
	</div>
	
</body>
</html>