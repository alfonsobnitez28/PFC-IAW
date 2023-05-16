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
    <link rel="shortcut icon" href="descarga.png">
    <title>Gestión de alumnos IES La Campiña</title>
</head>
<body>
    <h1>Añadir entrada al diario de <?php echo $fila['nombre'] ?> <?php echo $fila['apellidos'] ?></h1>

    <form action="añadirentrada2.php" id="entrada" name="entrada" method="post">

        <input type="hidden" name="id_alumno" value="<?php echo $id_alumno; ?>">

        <label for="fecha">Fecha: </label>
		<input type="text" name="fecha" id="fecha_nac" placeholder="Introduce la fecha" required>

        <label for="entrada">Introduce la entrada: </label>
		<input type="textarea" name="entrada" id="entrada" placeholder="Introduce la entrada" required>

        <input type="submit" value="Añadir" name="añadir">



    </form>



    
</body>
</html>