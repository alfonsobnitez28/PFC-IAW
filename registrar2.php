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
			
    $nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$dni = $_POST['dni'];
	$fecha_nac = $_POST['fecha_nac'];

    require 'conexion.php';

    $sql = "INSERT INTO alumnos (nombre,apellidos,dni,fecha_nac) VALUES ('$nombre','$apellidos','$dni','$fecha_nac')";

    $resultado = $mysqli->query($sql);

    if($resultado>0){
		
                $sql2 = "SELECT id_alumno FROM alumnos WHERE dni='$dni'";
                $resultado2 = $mysqli->query($sql2);

        ?>

                <p><a href="registrar3.php?resultado2">Registrar empresa</a></p>

                <!-- <p>Registrar empresa a la que va el alumno</p> -->
		<?php
			} else {
		?>
				<br>
  				<p>Ha ocurrido un error</p>
		<?php		
			}
		?>
    
</body>
</html>