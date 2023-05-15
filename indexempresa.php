<?php
	require 'conexion.php';
	
    $id_alumno=$_GET['id_alumno'];
	
    $sql = "SELECT * FROM empresas where id_alumno='$id_alumno'";

    $resultado = $mysqli->query($sql);

    $sql2 = "SELECT nombre, apellidos FROM alumnos where id_alumno='$id_alumno'";

    $resultado2 = $mysqli->query($sql2);

    $fila2 = $resultado2->fetch_assoc();

    // echo $fila2['nombre'];
    // echo $fila2['apellidos'];

    
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

    <h1>Empresa asociada al alumno <?php echo $fila2['nombre'] ?> <?php echo $fila2['apellidos'] ?></h1>


    <table>
					<tr>
						<th>Nombre</th>
						<th>Localización</th>
						<th>C.I.F</th>
					</tr>

					<?php
						while($fila = $resultado->fetch_assoc()){
							echo "<tr>";
							echo "<td>$fila[nombre]</td>";
							echo "<td>$fila[localizacion]</td>";
							echo "<td>$fila[cif]</td>";						
							echo "</tr>";
						}
					?>
                    
			</table>

            <p><a href="editarempresa.php?id_empresa=<?php echo $fila['id_empresa']; ?>">Editar datos de la empresa</a></p>
            <br>
            <p><a href="index.php">Volver</a></p>
    
</body>
</html>