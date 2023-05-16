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
    
                <p>Entrada añadida</p>
    
    
            <?php
                } else {
            ?>
                    <br>
                      <p>Ha ocurrido un error</p>
            <?php		
                }
            ?>

        <p><a href="diarioalumno.php?id_alumno=<?php echo $id_alumno ?>">Ver diario</a></p>
    
</body>
</html>