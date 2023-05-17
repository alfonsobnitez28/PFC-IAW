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

        <h1>Empresa asociada al alumno <?php echo $fila2['nombre'] ?> <?php echo $fila2['apellidos'] ?></h1>
	</div>


        <table class="table table-striped table-borderless" style="width:100%">
            <thead>
					<tr>
						<th>Nombre</th>
						<th>Localización</th>
						<th>C.I.F</th>
					</tr>
                    </thead>
                    <tbody>

					<?php
						while($fila = $resultado->fetch_assoc()){
							echo "<tr>";
							echo "<td>$fila[nombre]</td>";
							echo "<td>$fila[localizacion]</td>";
							echo "<td>$fila[cif]</td>";						
							echo "</tr>";
						}
					?>
                    </tbody>
			</table>

            <p><a href="editarempresa.php?id_empresa=<?php echo $fila['id_empresa'];?>" class="btn btn-outline-warning">Editar datos de la empresa</a></p>
            <br>
            <p><a href="index.php" class="btn btn-outline-secondary">Volver</a></p>
		</div>
    
</body>
</html>