<?php
    //Nueva conexión de la clase mysqli
    //Parámetros: ubicación del servidor, nombre de usuario, contraseña, base de datos
    $mysqli = new mysqli("localhost", "root", "", "modificacion_proyecto");
    if($mysqli->connect_errno){
        echo "Fallo al conectar a MySQL: (", $mysqli->connect_errno, ")", $mysqli->connect_error;
    }
?>