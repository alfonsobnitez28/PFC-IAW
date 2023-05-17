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

    <h2>Añadir entrada</h2>

    </div>

    <?php
        require 'conexion.php';

        $id_alumno=$_POST['id_alumno'];
        $fecha=$_POST['fecha'];
        $entrada=$_POST['entrada'];

        // echo $id_alumno;

        $sql = "INSERT INTO entradas (fecha,entrada,id_alumno) VALUES ('$fecha','$entrada','$id_alumno')";

        $resultado = $mysqli->query($sql);

        if($resultado>0){

            ?>
    
                <p class="alert alert-success" role="alert">Entrada añadida con éxito.</p>
                <br>
                <br>
                <br>
    
    
            <?php
                } else {
            ?>
                    <br>
                      <p class="alert alert-danger" role="alert">Ha ocurrido un error.</p>
            <?php		
                }
            ?>

        <p><a href="diarioalumno.php?id_alumno=<?php echo $id_alumno ?>" class="btn btn-outline-dark">Ver diario</a></p>
    
</body>
</html>