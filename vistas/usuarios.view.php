<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="CSS/style.css">
	<title>Contenido</title>
</head>
<body>
	<div class="contenedor contenedor2">
	
		<header>
			<h3 class="titulo">Usuario</h3>

			<nav>
				<a href="login.php">Inicio</a>
				<a href="#">Usuarios</a>
				<a href="productos.php">Productos</a>
				<a href="#">Servicios</a>
				<a href="#">Compras</a>
			</nav>
		</header>
		
		
		<hr class="border">
				<div class="contenido contenido2">

					 <div class="main">
						<div class="formulario">
							<div class="warp">
							 <h2>Usuarios</h2>
								<table class="table table-sm table-hover table-striped">
									<tr>
										<td>Cedula</td>
										<td>Rol</td>
										<td>Nombre</td>
										<td>Clave</td>
										<td>Direccion</td>
										<td>Telefono</td>
										<td>Acciones</td>
									</tr>
									<?php include_once("PHP/mostrar.usuario.php")?>
									<?php 
									/* llenar los campos desde la base de datos*/
									while($mostrar = mysqli_fetch_array($resultado)) {         
										echo "<tr>";
										echo "<td>".$mostrar['cedula']."</td>";
										echo "<td>".$mostrar['rol']."</td>";
										echo "<td>".$mostrar['nombre']."</td>";
										echo "<td>".$mostrar['clave']."</td>";    
										echo "<td>".$mostrar['direccion']."</td>";
										echo "<td>".$mostrar['telefono']."</td>";    
										echo "<td><a href=\"vistas/registro.editar.view.php?cedula=$mostrar[cedula]\">Editar</a> | <a href=\"PHP/delete.usuario.php?cedula=$mostrar[cedula]\" onClick=\"return confirm('Desea eliminar?')\">Borrar</a></td>";        
									}
									?>

								</table>               
							</div>
							<a href='vistas/usuario.insert.view.php'><button class="btn btn-primary">Nuevo</button></a>
						</div>
					</div>
			</div>
	
		<footer>
			<div class="foot">
			
			<a href="cerrar.php" id="cerrar">Cerrar Session</a>
			</div>
			<div>
				<p>Diego Navarro - 2017</p>
			</div>
		</footer>
	</div>
	
</body>
</html>