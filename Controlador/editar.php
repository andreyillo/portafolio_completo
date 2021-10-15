<?php  
	
	if (!isset($_GET['num_matricula'])) {
		header('Location: index.php');
	}

	
		include '../modelo/conexion.php';
		$matricula = $_GET['num_matricula'];

		$sentencia = $bd->prepare("SELECT * FROM vehiculos WHERE num_matricula = ?;");
		$sentencia->execute([$matricula]);
		$vehiculo = $sentencia->fetch(PDO::FETCH_OBJ);
		//print_r($vehiculo);
	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar Vehiculo</title>
	<meta charset="utf-8">
</head>
<body>
	<center>
	<link rel="stylesheet" type="text/css" href="../vista/estilo/css.css">
<body>
<div class="container">
	<section id="content">
		<form method="POST" action="../modelo/editarProceso.php">
			<h1>Actualiza Tu Vehiculo</h1>
			<div>
			<input type="text" name="matricula" value="<?php echo $vehiculo->num_matricula; ?>">
			</div>
			<div>
			<input type="text" name="marca" value="<?php echo $vehiculo->marca; ?>">
			</div>
			<div>
			<input type="text" name="color" value="<?php echo $vehiculo->color; ?>">
			</div>
			<div>
			<input type="text" name="tipo" value="<?php echo $vehiculo->tipo; ?>">
			</div>
			<input type="hidden" name="oculto" value="1">
			<div>
				<input type="submit" value="EDITAR VEHICULO">
				<a href="../vista/index.php">Volver</a>
				<br>
				<br>
				
				<tr>
					<input type="hidden" name="oculto">
					<input type="hidden" name="num" value="<?php echo $vehiculo->num_matricula; ?>">
				</tr>
			</div>
		</form><!-- form -->

	</section><!-- content -->
</div><!-- container -->
</body>

	</center>
</body>
</html>