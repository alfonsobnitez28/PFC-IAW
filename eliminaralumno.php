<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">

	<script src="js/jquery-3.4.1.min.js" ></script>
	<script src="js/bootstrap.min.js" ></script>
	<script src="js/jquery.dataTables.min.js" ></script>

	<link rel="shortcut icon" href="descarga.png">
    <title>Gestión de alumnos IES La Campiña</title>
</head>
<body>

	<div class="container">

	<div class="sticky-top my-lg-5">

	<h2>Eliminar alumno</h2>

	</div>


    <?php
			$id_alumno = $_GET['id_alumno'];

			require 'conexion.php';

			
			$sql = "DELETE FROM entradas WHERE id_alumno='$id_alumno'";

			$resultado = $mysqli->query($sql);

			$sql3 = "DELETE FROM alumnos WHERE id_alumno='$id_alumno'";

			$resultado3 = $mysqli->query($sql3);


			if($resultado && $resultado3>0){
		?>
				<br>
				<p class="alert alert-danger" role="alert">El alumno y todos sus datos relacionados han sido eliminados con éxito.</p>
		<?php
			} else {
		?>
				<br>
				<p class="alert alert-danger" role="alert">Ha ocurrido un error</p>
		<?php
			}
		?>
			<br>
			<p><a href="index.php" class="btn btn-outline-dark">Regresar</a></p>

		</div>
    
</body>
</html>