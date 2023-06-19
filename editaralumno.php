<?php
    require 'conexion.php';

    $id_alumno=$_GET['id_alumno'];

    $sql = "SELECT * FROM alumnos WHERE id_alumno='$id_alumno'";

    $resultado = $mysqli->query($sql);

    $fila = $resultado->fetch_assoc();
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

    <h2>Editar datos del alumno <?php echo $fila['nombre'];?> <?php echo $fila['apellidos'];?> </h2>

    </div>
    
    <form action="editaralumno2.php" id="editaralumno" name="editaralumno" method="post">
    <div class="form-group">

        <input type="hidden" name="id_alumno" value="<?php echo $fila['id_alumno']; ?>">
        <input type="hidden" name="id_empresa" value="<?php echo $fila['id_empresa']; ?>">

        <label for="nombre">Nombre: </label>
		<input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $fila['nombre'];?>" required>
        <br>
        <br>
        <br>
    
        <label for="apellidos">Apellidos: </label>
		<input type="text" name="apellidos" class="form-control" id="apellidos" value="<?php echo $fila['apellidos'];?>" required>
        <br>
        <br>
        <br>

        <label for="dni">D.N.I: </label>
		<input type="text" name="dni" class="form-control" id="dni" value="<?php echo $fila['dni'];?>" required>
        <br>
        <br>
        <br>

        <label for="fecha_nac">Fecha de nacimiento: </label>
		<input type="text" name="fecha_nac" class="form-control" id="fecha_nac" value="<?php echo $fila['fecha_nac'];?>" required>
        <br>
        <br>
        <br>

        <a href="index.php" class="btn btn-outline-danger">Volver</a>
        <input type="submit" class="btn btn-outline-dark" value="Editar" name="editar">

        </form>
    </div>
</body>
</html>