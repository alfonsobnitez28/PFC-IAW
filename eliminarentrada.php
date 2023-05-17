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

    <h2>Eliminar entrada</h2>

    </div>


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
            <p class="alert alert-danger" role="alert">Se ha eliminado la entrada con éxito.</p>
    <?php
        } else {
    ?>
            <br>
            <p class="alert alert-danger" role="alert">Ha ocurrido un error.</p>
    <?php
        }
    ?>
        <br>
        <p><a href="diarioalumno.php?id_alumno=<?php echo $fila2['id_alumno'] ?>" class="btn btn-outline-dark">Ver diario</a></p>

    </div>

    
</body>
</html>