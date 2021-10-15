<?php
include '../modelo/conexion.php';
$sentencia = $bd->query("SELECT * FROM vehiculos;");
$vehiculos = $sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($vehiculos);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Listado de vehiculos</title>
	<meta charset="utf-8">
	<link href="estilo/tabla.css" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Rock+Salt' rel='stylesheet' type='text/css'>
</head>
<body>
	<center>
		
		<h3>Listado De Vehiculos En El Parqueadero</h3>
		<table>
			<tr>
				<td>Numero De Matricula</td>
				<td>Marca Del Vehiculo</td>
				<td>Color Del Vehiculo</td>
				<td>Tipo De Vehiculo</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>

			<?php 
				foreach ($vehiculos as $dato) {
					?>
					<tr>
						<td><?php echo $dato->num_matricula; ?></td>
						<td><?php echo $dato->marca; ?></td>
						<td><?php echo $dato->color; ?></td>
						<td><?php echo $dato->tipo; ?></td>	
						<td><a class="boton_editar" href="../controlador/editar.php?num_matricula=<?php echo $dato->num_matricula; ?>">Editar</a></td>
						<td><a class="boton_eliminar" href="../controlador/eliminar.php?num_matricula=<?php echo $dato->num_matricula; ?>">Eliminar</a></td>
						
					</tr>
					
					
					<?php
				}
			?>
			
		</table>
		
	</center>
	<center>
		<br>
		<br>
	<a href="../vista/index1.php">Formulario</a>
	<a href="../portafolio/index.php">Portafolio</a>
			</center>
</body>
</html>