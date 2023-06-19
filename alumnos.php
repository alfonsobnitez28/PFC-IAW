<?php
	require 'conexion.php';
	
    $id_empresa=$_GET['id_empresa'];
	
    $sql = "SELECT * FROM alumnos where id_empresa='$id_empresa'";

    $resultado = $mysqli->query($sql);

    $sql2 = "SELECT nombre FROM empresas where id_empresa='$id_empresa'";

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

        <h1>Alumnos de la empresa <?php echo $fila2['nombre'];?></h1>
	</div>

	<a href="registrar.php?id_empresa=<?php echo $id_empresa?>" class="btn btn-outline-success">Registrar</a>


        <table class="table table-striped table-borderless" style="width:100%">
            <thead>
					<tr>
						<th>Nombre</th>
						<th>Apellidos</th>
						<th>D.N.I</th>
						<th>Fecha de nacimiento</th>
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
							echo "<td>$fila[dni]</td>";	
							echo "<td>$fila[fecha_nac]</td>";	
							?>		
							<td><a href="diarioalumno.php?id_alumno=<?php echo $fila['id_alumno']; ?>" class="btn btn-outline-info">Diario del alumno</a></td>
							<td><a href="editaralumno.php?id_alumno=<?php echo $fila['id_alumno']; ?>" class="btn btn-outline-warning">Editar</a></td>
							<td><a href="eliminaralumno.php?id_alumno=<?php echo $fila['id_alumno']; ?>" class="btn btn-outline-danger">Eliminar</a></td>		
							<?php	
							echo "</tr>";
						
						};
						?>
                    </tbody>
			</table>
			
            <br>
            <p><a href="index.php" class="btn btn-outline-secondary">Volver</a></p>

		</div>
    
</body>
</html>