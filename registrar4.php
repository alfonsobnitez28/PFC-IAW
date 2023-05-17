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

    <h2>Datos del alumno para registrar</h2>

    </div>

    <?php
        require 'conexion.php';

        $id_alumno=$_POST['id_alumno'];
        $nombreemp=$_POST['nombreemp'];
        $localizacion=$_POST['localizacion'];
        $cif=$_POST['cif'];

        $sql = "INSERT INTO empresas (id_alumno,nombre,localizacion,cif) VALUES ('$id_alumno','$nombreemp','$localizacion','$cif')";

        $resultado = $mysqli->query($sql);

        if($resultado>0){
		

            ?>
    
                <p class="alert alert-success" role="alert">¡¡Proceso finalizado. El alumno y empresa han sido registrados correctamente!!</p>
                <br>
                <br>
    
                
            <?php
                } else {
            ?>
                    <p class="alert alert-danger" role="alert">Ha ocurrido un error.</p>
                    <br> 
                    <br>
            <?php		
                }
            ?>

        <p><a href="index.php" class="btn btn-outline-dark">Inicio</a></p>

        </div>
    
</body>
</html>