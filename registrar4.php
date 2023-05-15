<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="descarga.png">
    <title>Document</title>
</head>
<body>

    <?php
        require 'conexion.php';

        $id_alumno=$_POST['id_alumno'];
        $nombreemp=$_POST['nombreemp'];
        $localizacion=$_POST['localizacion'];
        $cif=$_POST['cif'];

        $sql = "INSERT INTO empresas (id_alumno,nombre,localizacion,cif) VALUES ('$id_alumno','$nombreemp','$localizacion','$cif')";

        $resultado = $mysqli->query($sql);

        if($resultado>0){
		

            ?>
    
                <p>Alumno registrado correctamente</p>
    
                
            <?php
                } else {
            ?>
                    <br>
                      <p>Ha ocurrido un error</p>
            <?php		
                }
            ?>

        <p><a href="index.php">Inicio</a></p>
    
</body>
</html>