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
		$id_entrada = $_GET['id_entrada'];

			
		require 'conexion.php';

        $sql2 = "SELECT id_alumno FROM entradas where id_entrada='$id_entrada'";

        $resultado2 = $mysqli->query($sql2);

        $fila2 = $resultado2->fetch_assoc();
			
			
		$sql = "DELETE FROM entradas WHERE id_entrada='$id_entrada'";

        $resultado = $mysqli->query($sql);

        if($resultado>0){
    ?>
            <br>
            <p>Registro eliminado del diario</p>
    <?php
        } else {
    ?>
            <br>
            <p>Ha ocurrido un error</p>
    <?php
        }
    ?>
        <br>
        <p><a href="diarioalumno.php?id_alumno=<?php echo $fila2['id_alumno'] ?>">Ver diario</a></p>

    
</body>
</html>