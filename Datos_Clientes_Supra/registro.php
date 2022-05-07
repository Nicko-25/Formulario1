<?php

include "conectar.php";

diferencia($conectar);
function diferencia($conectar){
    if(isset($_POST['enviar'])){
        insertar($conectar);
    }
    if(isset($_POST['eliminar'])){
        eliminar($conectar);
    }
    if(isset($_POST['editar'])){
        editar($conectar);
    }
}

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
    header("location: index.php");

}
function eliminar($conectar){

    $numid= $_POST['cc'];
    $consulta = "DELETE FROM datos WHERE identificacion='$numid'";
    mysqli_query($conectar, $consulta);
    mysqli_close($conectar);
    header("location: consultar.php");

}

function editar($conectar){

    $nombre= $_POST['nombre'];
    $tipoid= $_POST['tipoid'];
    $numid= $_POST['numid'];
    $correo=$_POST['correo'];
    $fecha= $_POST['fecha'];
    $direccion= $_POST['direccion'];
    $edad= $_POST['edad'];
    $consulta = "UPDATE datos SET Nombre='$nombre', Correo='$correo', Fecha_Nacimiento='$fecha', Direccion='$direccion, Edad='$edad'";
    mysqli_query($conectar, $consulta);
    mysqli_close($conectar);
    header("location: index.php");

}

function cargarTabla($conectar){
    $consulta= "SELECT * FROM datos";
    $resultado= mysqli_query($conectar, $consulta);

    while($fila = mysqli_fetch_array($resultado)) { 
            echo "<tr>";
                 echo"<td>".$fila['Nombre']; 
                 echo"<td>".$fila['Tipo_identificacion'];
                 echo"<td>".$fila['Identificacion'];
                 echo"<td>".$fila['Correo'];
                echo"<td>".$fila['Fecha_Nacimiento'] ;
                echo"<td>".$fila['Direccion'];
                echo"<td>".$fila['Edad'] ;
            echo"</tr>";
    }
        mysqli_close($conectar);
}


?>
