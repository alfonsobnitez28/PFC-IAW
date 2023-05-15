<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de alumnos IES La Campiña</title>
</head>
<body>

    <?php
    require 'conexion.php';
    
    $id_alumno=$_POST['id_alumno'];
    $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellidos'];
    $dni=$_POST['dni'];
    $fecha_nac=$_POST['fecha_nac'];

    $sql = "UPDATE alumnos SET nombre='$nombre', apellidos='$apellidos', dni='$dni', fecha_nac='$fecha_nac' WHERE id_alumno=$id_alumno";

    $resultado = $mysqli->query($sql);

			if($resultado>0){
		?>
				<br>
				<p>Los datos del alumno han sido modificados</p>
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