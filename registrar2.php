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

<h2>Datos del alumno para registrar</h2>

</div>
	

<?php
			
    $nombre = $_POST['nombre'];
	$apellidos = $_POST['apellidos'];
	$dni = $_POST['dni'];
	$fecha_nac = $_POST['fecha_nac'];
    $id_empresa=$_POST['id_empresa'];

    require 'conexion.php';

    $sql = "INSERT INTO alumnos (nombre,apellidos,dni,fecha_nac,id_empresa) VALUES ('$nombre','$apellidos','$dni','$fecha_nac','$id_empresa')";

    $resultado = $mysqli->query($sql);

    if($resultado>0){
		

        ?>

            <p class="alert alert-success" role="alert">¡¡Alumno registrado correctamente!!</p>
            <br> 
            <br>

                

                <!-- <p>Registrar empresa a la que va el alumno</p> -->
		<?php
		} else {
		?>
			<br>
  			<p class="alert alert-danger" role="alert">Ha ocurrido un error.</p>
            <br> 
            <br>

		<?php		
			}
		?>
        <p><a href="index.php" class="btn btn-outline-dark">Inicio</a></p>

</div>
</body>
</html>