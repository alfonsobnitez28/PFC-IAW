<?php
	require 'conexion.php';
	
    $id_empresa=$_GET['id_empresa'];

    ?>
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

    <form action="registrar2.php" id="registro" name="registro" method="post">

    <div class="form-group">

        <input type="hidden" name="id_empresa" value="<?php echo $id_empresa; ?>">

        <label for="nombre">Nombre: </label>
		<input type="text" class="form-control" name="nombre" id="nombre" placeholder="Introduce el nombre" required>
        <br>
        <br>
        <br>
    
        <label for="apellidos">Apellidos: </label>
		<input type="text" class="form-control" name="apellidos" id="apellidos" placeholder="Introduce los apellidos" required>
        <br>
        <br>
        <br>

        <label for="dni">D.N.I: </label>
		<input type="text" class="form-control" name="dni" id="dni" placeholder="Introduce el DNI" required>
        <br>
        <br>
        <br>

        <label for="fecha_nac">Fecha de nacimiento (aaaa-mm-dd): </label>
		<input type="text" class="form-control" name="fecha_nac" id="fecha_nac" placeholder="Introduce la fecha de nacimiento" required>
        <br>
        <br>
        <br>

        <a href="index.php" class="btn btn-outline-danger">Volver</a> <input type="submit" class="btn btn-outline-dark" value="Siguiente" name="siguiente">

        </div>
</form>
</body>
</html>