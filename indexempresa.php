<?php
	require 'conexion.php';
	
    $id_alumno=$_GET['id_alumno'];
	
    $sql = "SELECT * FROM empresas where id_alumno='$id_alumno'";

    $resultado = $mysqli->query($sql);

    $sql2 = "SELECT nombre, apellidos FROM alumnos where id_alumno='$id_alumno'";

    $resultado2 = $mysqli->query($sql2);

    $fila2 = $resultado2->fetch_assoc();

    // echo $fila2['nombre'];
    // echo $fila2['apellidos'];

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de alumnos IES La Campiña</title>
</head>
<body>

    <h1>Empresa asociada al alumno <?php echo $fila2['nombre'] ?> <?php echo $fila2['apellidos'] ?></h1>

    

    
</body>
</html>