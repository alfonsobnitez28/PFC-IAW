<?php
	require 'conexion.php';
	
    $sql = "SELECT * FROM alumnos";

    $resultado = $mysqli->query($sql);
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

	<script>
			// DataTables
			$(document).ready( function () {
   			 $('#tabla').DataTable();
			} );
		</script>

</head>
<body>
		<div class="container-fluid px-4 py-4">
			<div class="sticky-top my-lg-5">
				<h1>ALUMNOS REGISTRADOS</h1>
			</div>

			<div class="col">
			<a href="registrar.php" class="btn btn-primary">Registrar</a>

			</div>
			<br>
			<br>

            <table id="tabla" class="table table-striped table-hover" style="width:100%">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Apellidos</th>
						<th>Fecha de nacimiento</th>
						<th>D.N.I</th>
						 <th></th> 
						 <th></th> 
						 <th></th> 
						 <th></th> 
					</tr>
					</thead>
					<tbody>
					<?php
						while($fila = $resultado->fetch_assoc()){
							echo "<tr>";
							echo "<td>$fila[nombre]</td>";
							echo "<td>$fila[apellidos]</td>";
							echo "<td>$fila[fecha_nac]</td>";
							echo "<td>$fila[dni]</td>";
					?>
							<td><a href="diarioalumno.php?id_alumno=<?php echo $fila['id_alumno']; ?>" class="btn btn-outline-info">Diario del alumno</a></td>
							<td><a href="indexempresa.php?id_alumno=<?php echo $fila['id_alumno']; ?>" class="btn btn-outline-dark">Ver empresa asociada</a></td>
							<td><a href="editaralumno.php?id_alumno=<?php echo $fila['id_alumno']; ?>" class="btn btn-outline-warning">Editar</a></td>
							<td><a href="eliminar.php?id_alumno=<?php echo $fila['id_alumno']; ?>" class="btn btn-outline-danger">Eliminar</a></td>
					<?php							
							echo "</tr>";
						}
					?>
					</tbody>
			</table>
    
</body>
</html>