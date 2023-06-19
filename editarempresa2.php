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
    
    $id_empresa=$_POST['id_empresa'];
    $nombreemp=$_POST['nombreemp'];
    $cif=$_POST['cif'];
    $localizacion=$_POST['localizacion'];

	?>
	<body>

	<div class="container">

	<div class="sticky-top my-lg-5">

	<h2>Editar datos de la empresa</h2>

	</div>

	<?php

	$sql1 = "SELECT * FROM empresas WHERE cif = '$cif'";
	$resultado1 = $mysqli->query($sql1);
	if (mysqli_num_rows($resultado1) > 0) {

	echo '<p class="alert alert-danger" role="alert">La empresa ya esta registrada.</p>';

	} else {

    $sql = "UPDATE empresas SET nombre='$nombreemp', localizacion='$localizacion', cif='$cif' WHERE id_empresa=$id_empresa";

    $resultado = $mysqli->query($sql);

			if($resultado>0){
		?>
				<br>
				<p class="alert alert-success" role="alert">Los datos de la empresa han sido modificados.</p>
		<?php
			} else {
		?>
				<br>
  				<p class="alert alert-danger" role="alert">Ha ocurrido un error.</p>
		<?php
			}
		}
		?>
			<br>
			<p><a href="index.php" class="btn btn-outline-dark">Regresar</a></p>
</body>
</html>