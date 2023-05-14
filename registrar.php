<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de alumnos IES La Campiña</title>
</head>
<body>

    <h1>Registrar alumno en la base de datos del centro</h1>

    <h2>Datos del alumno</h2>

    <form action="registrar2.php" id="registro" name="registro" method="post">
        <label for="nombre">Nombre: </label>
		<input type="text" name="nombre" id="nombre" placeholder="Introduce el nombre" required>
        <br>
        <br>
        <br>
    
        <label for="apellidos">Apellidos: </label>
		<input type="text" name="apellidos" id="apellidos" placeholder="Introduce los apellidos" required>
        <br>
        <br>
        <br>

        <label for="dni">D.N.I: </label>
		<input type="text" name="dni" id="dni" placeholder="Introduce el DNI" required>
        <br>
        <br>
        <br>

        <label for="fecha_nac">Fecha de nacimiento (dd-mm-aaaa): </label>
		<input type="text" name="fecha_nac" id="fecha_nac" placeholder="Introduce la fecha de nacimiento" required>
        <br>
        <br>
        <br>

        <input type="submit" value="Siguiente" name="siguiente">
</body>
</html>