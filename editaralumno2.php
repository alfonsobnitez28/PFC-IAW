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

    <?php
    require 'conexion.php';
    
    $id_alumno=$_POST['id_alumno'];
    $nombre=$_POST['nombre'];
    $apellidos=$_POST['apellidos'];
    $dni=$_POST['dni'];
    $fecha_nac=$_POST['fecha_nac'];

	?>
	<body>

	<div class="container">

	<div class="sticky-top my-lg-5">

	<h2>Editar datos del alumno <?php echo $nombre;?> <?php echo $apellidos;?></h2>

	</div>

	<?php

    $sql = "UPDATE alumnos SET nombre='$nombre', apellidos='$apellidos', dni='$dni', fecha_nac='$fecha_nac' WHERE id_alumno=$id_alumno";

    $resultado = $mysqli->query($sql);

			if($resultado>0){
		?>
				<br>
				<p class="alert alert-success" role="alert">Los datos del alumno han sido modificados.</p>
		<?php
			} else {
		?>
				<br>
  				<p class="alert alert-danger" role="alert">Ha ocurrido un error.</p>
		<?php
			}
		?>
			<br>
			<p><a href="index.php" class="btn btn-outline-dark">Regresar</a></p>
</body>
</html>