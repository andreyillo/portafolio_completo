<link rel="stylesheet" type="text/css" href="estilo/css.css">
<body>
<div class="container">
	<section id="content">
		<form method="POST" action=" ../controlador/insertar.php">
			<h1>Registra Tu Vehiculo</h1>
			<div>
				<input type="text" placeholder="digite su matricula" required="" name="matricula" />
			</div>
			<div>
				<input type="text" placeholder="digite su marca" required="" name="marca" />
			</div>
			<div>
				<input type="text" placeholder="didite un color" required="" name="color" />
			</div>
			<div>
				<input type="text" placeholder="digite el tipo de vehiculo" required="" name="tipo" />
			</div>
			<input type="hidden" name="oculto" value="1">
			<div>
				<input type="reset" name="">
				<input type="submit" value="REGISTRAR">
				<br>
				<br>
				<a href="../portafolio/index.php">volver al portafolio?</a>
				<a href="../vista/index.php">Ver el crud</a>
			</div>
		</form><!-- form -->

	</section><!-- content -->
</div><!-- container -->
</body>








