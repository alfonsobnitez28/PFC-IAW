<?php
	//Establezco conexión
	require 'conexion.php';
	
	//Preparo la sentencia SQL
    $sql = "SELECT * FROM alumnos";

	//Ejecuto la sentencia y guardo el resultado
    $resultado = $mysqli->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de alumnos IES La Campiña</title>

    <script>
			$(document).ready( function () {
				$('#tabla').DataTable();
			} );
		</script>
</head>
<body>

            <h1>Listado de alumnos registrados</h1>

            <table id="tabla" class="display" style="width:100%">
					<tr>
						<th>Nombre</th>
						<th>Telefono</th>
						<th>Fecha de nacimiento</th>
						<th>Categoría</th>
						<th></th>
						<th></th>
					</tr>
					<?php
						while($fila = $resultado->fetch_assoc()){
							echo "<tr>";
							echo "<td>$fila[nombre]</td>";
							echo "<td>$fila[apellidos]</td>";
							echo "<td>$fila[fecha_nac]</td>";
							echo "<td>$fila[dni]</td>";
					?>
							<td><a href="editar.php?id=<?php echo $fila['id_alumno']; ?>">Editar</a></td>
							<td><a href="eliminar.php?id=<?php echo $fila['id_alumno']; ?>">Eliminar</a></td>
					<?php							
							echo "</tr>";
						}
					?>
                    
			</table>
    
</body>
</html>