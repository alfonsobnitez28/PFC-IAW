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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de alumnos IES La Campiña</title>

</head>
<body>
            <h1>Listado de alumnos registrados</h1>

			<a href="registrar.php">Registrar</a>

            <table>
					<tr>
						<th>Nombre</th>
						<th>Apellidos</th>
						<th>Fecha de nacimiento</th>
						<th>D.N.I</th>
						 <th></th> 
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
							<td><a href="indexempresa.php?id_alumno=<?php echo $fila['id_alumno']; ?>">Ver empresa asociada</a></td>
							<td><a href="editaralumno.php?id_alumno=<?php echo $fila['id_alumno']; ?>">Editar</a></td>
							<td><a href="eliminar.php?id_alumno=<?php echo $fila['id_alumno']; ?>">Eliminar</a></td>
					<?php							
							echo "</tr>";
						}
					?>
			</table>
    
</body>
</html>