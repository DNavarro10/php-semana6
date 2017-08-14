<?php include_once("../../PHP/productos/update.producto.php");?>
<?php include_once("../../PHP/productos/asociar.producto.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<script src="https://use.fontawesome.com/323a076c8b.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
	<script type="text/javascript" charset="utf-8" src="js/jquery-
	3.2.1.min.js"></script>
	<link rel="stylesheet" href="../../CSS/style.css">
	<title>Productos</title>
</head>
<body>
	<div class="contenedor">
		<h1 class="titulo">Editar Datos</h1>
		<hr class="border">
			<div class="contenido">
				<form action="../../productos.php" class="formulario" name="login" method="post">
					
					<div class="form-group">
						<i class="icono izquierda fa fa-circle-o" hidden="hidden"></i><input type="text" name="producto" class="password" value="<?php echo $cedula ?>" hidden="hidden">
					</div>
				
					<div class="form-group">
						<i class="icono izquierda fa fa-circle-o"></i><input type="text" name="nombre" class="password" placeholder="Nombre" value="<?php echo $nombre ?>" required="required">
					</div>
					
					<div class="form-group">
						<i class="icono izquierda fa fa-circle-o"></i><input type="text" name="descripcion" class="usuario" placeholder="Descripcion" value="<?php echo $clave ?>" required="required">
					</div>
					
					<div class="form-group">
						<i class="icono izquierda fa fa-circle-o"></i><input type="text" name="precio" class="usuario" placeholder="Precio" value="<?php echo $direccion ?>" required="required">
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
						<a href="../../productos.php">volver</a>
					</div>
				</form>	
			</div>
		
	</div>
	
</body>