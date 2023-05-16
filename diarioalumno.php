<?php
	require 'conexion.php';
	
    $id_alumno=$_GET['id_alumno'];
	
    $sql = "SELECT * FROM entradas where id_alumno='$id_alumno'";

    $resultado = $mysqli->query($sql);

    $sql2 = "SELECT nombre, apellidos FROM alumnos where id_alumno='$id_alumno'";

    $resultado2 = $mysqli->query($sql2);

    $fila2 = $resultado2->fetch_assoc();


    
?>
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
    <h1>Diario del alumno <?php echo $fila2['nombre'] ?> <?php echo $fila2['apellidos'] ?></h1>

    <a href="añadirentrada.php?id_alumno=<?php echo $id_alumno ?>">Añadir entrada</a>

    <br>

    <table>
					<tr>
						<th>Fecha</th>
						<th>Contenido</th>
						<th></th>
					</tr>

					<?php
						while($fila = $resultado->fetch_assoc()){
							echo "<tr>";
							echo "<td>$fila[fecha]</td>";
							echo "<td>$fila[entrada]</td>";
                    ?>
                            <td><a href="eliminar.php?id_entrada=<?php echo $fila['id_entrada']; ?>">Eliminar entrada</a></td>
                    <?php
							echo "</tr>";
						}
					?>
                    
			</table>
            <br>
            <p><a href="index.php">Volver</a></p>
    
</body>
</html>