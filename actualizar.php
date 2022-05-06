<?php

include "conectar.php";

insertar($conectar);

function insertar($conectar){

    $nombre= $_POST['nombre'];
    $tipoid= $_POST['tipoid'];
    $numid= $_POST['numid'];
    $correo=$_POST['correo'];
    $fecha= $_POST['fecha'];
    $direccion= $_POST['direccion'];
    $edad= $_POST['edad'];
    $actualizar = "UPDATE datos GET (Nombre, Tipo_identificacion, Identificacion, Correo, Fecha_Nacimiento, Direccion, Edad) 
    VALUES ('$nombre','$tipoid','$numid','$correo','$fecha','$direccion','$edad')";
    mysqli_query($conectar, $actualizar);
    mysqli_close($conectar);

}
echo"Datos enviados";

?>