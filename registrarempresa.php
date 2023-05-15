<?php

require 'conexion.php';

$dni=$_GET['dni'];

$sql = "SELECT id_alumno FROM alumnos WHERE dni='$dni'";

$id_alumno = $mysqli->query($sql);

$fila = $id_alumno->fetch_assoc();

echo $fila ['id_alumno'];

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

    <h1>Registrar alumno en la base de datos del centro</h1>

        <h2>Datos de la empresa asignada</h2>

            <form action="registrar4.php" id="registroemp" name="registroemp" method="post">

            <input type="hidden" name="id_alumno" value="<?php echo $$fila['id_alumno']; ?>">

            <label for="nombreemp">Nombre: </label>
            <input type="text" name="nombreemp" id="nombreemp" placeholder="Introduce el nombre de la empresa" required>
    <br>
    <br>
    <br>

            <label for="localizacion">Localización: </label>
            <input type="text" name="localizacion" id="localizacion" placeholder="Introduce la dirección de la empresa" required>
    <br>
    <br>
    <br>

            <label for="cif">C.I.F: </label>
            <input type="text" name="cif" id="cif" placeholder="Introduce el CIF de la empresa" required>
    <br>
    <br>
    <br>


            <input type="submit" value="Finalizar" name="Finalizar">


    
</body>
</html>
