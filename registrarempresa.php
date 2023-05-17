<?php

require 'conexion.php';

$dni=$_GET['dni'];

$sql = "SELECT id_alumno FROM alumnos WHERE dni='$dni'";

$id_alumno = $mysqli->query($sql);

$fila = $id_alumno->fetch_assoc();

// echo $fila ['id_alumno'];

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

        <h2>Datos de la empresa asignada</h2>

        </div>

            <form action="registrar4.php" id="registroemp" name="registroemp" method="post">

            <div class="form-group">

            <input type="hidden" name="id_alumno" value="<?php echo $fila['id_alumno']; ?>">

            <label for="nombreemp">Nombre: </label>
            <input type="text" class="form-control" name="nombreemp" id="nombreemp" placeholder="Introduce el nombre de la empresa" required>
    <br>
    <br>
    <br>

            <label for="localizacion">Localización: </label>
            <input type="text" class="form-control" name="localizacion" id="localizacion" placeholder="Introduce la dirección de la empresa" required>
    <br>
    <br>
    <br>

            <label for="cif">C.I.F: </label>
            <input type="text" class="form-control" name="cif" id="cif" placeholder="Introduce el CIF de la empresa" required>
    <br>
    <br>
    <br>


            <input type="submit" class="btn btn-outline-dark" value="Finalizar" name="finalizar">

            </div>

            </div>
    
</body>
</html>
