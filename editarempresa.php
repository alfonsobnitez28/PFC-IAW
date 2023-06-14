<?php
    require 'conexion.php';

    $id_empresa=$_GET['id_empresa'];

    $sql = "SELECT * FROM empresas WHERE id_empresa='$id_empresa'";

    $resultado = $mysqli->query($sql);

    $fila = $resultado->fetch_assoc();
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

    <h2>Editar datos de la empresa</h2>

    </div>

    <form action="editarempresa2.php" id="editarempresa" name="editarempresa" method="post">
    <div class="form-group">

        <input type="hidden" name="id_empresa" value="<?php echo $fila['id_empresa']; ?>">

        <label for="nombreemp">Nombre: </label>
		<input type="text" class="form-control" name="nombreemp" id="nombreemp" value="<?php echo $fila['nombre'];?>" required>
        <br>
        <br>
        <br>
    
        <label for="localizacion">Localización: </label>
		<input type="text" name="localizacion" class="form-control" id="localizacion" value="<?php echo $fila['localizacion'];?>" required>
        <br>
        <br>
        <br>

        <label for="cif">C.I.F: </label>
		<input type="text" name="cif" class="form-control" id="cif" value="<?php echo $fila['cif'];?>" required>
        <br>
        <br>
        <br>


        <a href="index.php" class="btn btn-outline-danger">Volver</a>
        <input type="submit" class="btn btn-outline-dark" value="Editar" name="editar">


    </div>
</body>
</html>