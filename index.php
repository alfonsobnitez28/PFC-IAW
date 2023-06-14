<?php
	require 'conexion.php';
	
    $sql = "SELECT * FROM empresas";

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
				<h1 class="h1">Listado de empresas registradas</h1>
			</div>

			<div class="col">
			<a href="registrarempresa.php" class="btn btn-outline-success">Registrar empresa</a>

			</div>
			<br>
			<br>

            <table id="tabla" class="table table-striped table-hover" style="width:100%">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Localización</th>
						<th>C.I.F.</th>
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
							echo "<td>$fila[localizacion]</td>";
							echo "<td>$fila[cif]</td>";
					?>
							<td><a href="alumnos.php?id_empresa=<?php echo $fila['id_empresa']; ?>" class="btn btn-outline-dark">Ver alumnos de la empresa</a></td>
							<td><a href="editarempresa.php?id_empresa=<?php echo $fila['id_empresa']; ?>" class="btn btn-outline-warning">Editar</a></td>
							<td><a href="eliminar.php?id_empresa=<?php echo $fila['id_empresa']; ?>" class="btn btn-outline-danger">Eliminar</a></td>
					<?php							
							echo "</tr>";
						}
					?>
					</tbody>
			</table>
			</div>
</body>
</html>