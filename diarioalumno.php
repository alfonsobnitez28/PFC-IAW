<?php
	require 'conexion.php';
	
    $id_alumno=$_GET['id_alumno'];
	
    $sql = "SELECT * FROM entradas where id_alumno='$id_alumno'";

    $resultado = $mysqli->query($sql);

    $sql2 = "SELECT * FROM alumnos where id_alumno='$id_alumno'";

    $resultado2 = $mysqli->query($sql2);

    $fila2 = $resultado2->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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

    <h1>Diario del alumno <?php echo $fila2['nombre'] ?> <?php echo $fila2['apellidos'] ?></h1>
	</div>

	<div class="col">
    <a href="añadirentrada.php?id_alumno=<?php echo $id_alumno ?>" class="btn btn-outline-info">Añadir entrada</a>
	</div>

    <br>

    <table class="table table-striped table-borderless" style="width:100%">
					<tr>
						<th>Fecha</th>
						<th>Contenido</th>
						<th></th>
						<th></th>
					</tr>

					<?php
						while($fila = $resultado->fetch_assoc()){
							echo "<tr>";
							echo "<td>$fila[fecha]</td>";
							echo "<td>$fila[entrada]</td>";
                    ?>
							<td><a href="editarentrada.php?id_entrada=<?php echo $fila['id_entrada']; ?>" class="btn btn-outline-warning">Editar entrada</a></td>
                            <td><a href="eliminarentrada.php?id_entrada=<?php echo $fila['id_entrada']; ?>" class="btn btn-outline-danger">Eliminar entrada</a></td>
                    <?php
							echo "</tr>";
						}
					?>
                    
			</table>
            <br>
            <p><a href="alumnos.php?id_empresa=<?php echo $fila2['id_empresa']; ?>" class="btn btn-outline-secondary">Volver</a></p>
    
</body>
</html>