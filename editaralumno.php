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
    <link rel="shortcut icon" href="descarga.png">
    <title>Gestión de alumnos IES La Campiña</title>
</head>
<body>
    <h1>Editar datos del alumno</h1>
    
    <form action="editaralumno2.php" id="editaralumno" name="editaralumno" method="post">

        <input type="hidden" name="id_alumno" value="<?php echo $fila['id_alumno']; ?>">

        <label for="nombre">Nombre: </label>
		<input type="text" name="nombre" id="nombre" value="<?php echo $fila['nombre'];?>" required>
        <br>
        <br>
        <br>
    
        <label for="apellidos">Apellidos: </label>
		<input type="text" name="apellidos" id="apellidos" value="<?php echo $fila['apellidos'];?>" required>
        <br>
        <br>
        <br>

        <label for="dni">D.N.I: </label>
		<input type="text" name="dni" id="dni" value="<?php echo $fila['dni'];?>" required>
        <br>
        <br>
        <br>

        <label for="fecha_nac">Fecha de nacimiento: </label>
		<input type="text" name="fecha_nac" id="fecha_nac" value="<?php echo $fila['fecha_nac'];?>" required>
        <br>
        <br>
        <br>

        <input type="submit" value="Editar" name="editar">

        </form>
    
</body>
</html>