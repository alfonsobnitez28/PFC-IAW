<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="descarga.png">
    <title>Gestión de alumnos IES La Campiña</title>
</head>
<body>
    <?php
			$id_alumno = $_GET['id_alumno'];

			
			require 'conexion.php';
			
			
			$sql = "DELETE FROM empresas WHERE id_alumno='$id_alumno'";

			$resultado = $mysqli->query($sql);

			$sql2 = "DELETE FROM alumnos WHERE id_alumno='$id_alumno'";

			$resultado2 = $mysqli->query($sql2);


			if($resultado && $resultado2>0){
		?>
				<br>
				<p>Alumno eliminado de la base de datos</p>
		<?php
			} else {
		?>
				<br>
				<p>Ha ocurrido un error</p>
		<?php
			}
		?>
			<br>
			<p><a href="index.php">Regresar</a></p>
    
</body>
</html>