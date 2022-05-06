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
    $consulta = "INSERT INTO datos(Nombre, Tipo_identificacion, Identificacion, Correo, Fecha_Nacimiento, Direccion, Edad) 
    VALUES ('$nombre','$tipoid','$numid','$correo','$fecha','$direccion','$edad')";
    mysqli_query($conectar, $consulta);
    mysqli_close($conectar);

}
echo"Datos enviados";

?>