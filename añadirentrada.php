<?php
	require 'conexion.php';
	
    $id_alumno=$_GET['id_alumno'];
    
    $sql = "SELECT nombre, apellidos FROM alumnos where id_alumno='$id_alumno'";

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

    <h2>Añadir entrada al diario de <?php echo $fila['nombre'] ?> <?php echo $fila['apellidos'] ?></h2>

    </div>

    <form action="añadirentrada2.php" id="entrada" name="entrada" method="post">
    <div class="form-group">

        <input type="hidden" name="id_alumno" value="<?php echo $id_alumno; ?>">

        <label for="fecha">Fecha: </label>
		<input type="text" class="form-control" name="fecha" id="fecha_nac" placeholder="Introduce la fecha" required>
        <br>
        <br>
        <br>

        <label for="entrada">Introduce la entrada: </label>
		<input type="textarea" class="form-control" name="entrada" id="entrada" placeholder="Introduce la entrada" required>
        <br>
        <br>
        <br>

        <a href="diarioalumno.php?id_alumno=<?php echo $id_alumno ?>" class="btn btn-outline-danger">Volver</a>

        <input type="submit" class="btn btn-outline-dark" value="Añadir" name="añadir">

    </div>

    </form>



    
</body>
</html>