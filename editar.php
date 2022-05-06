<?php

include "conectar.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar</title>
</head>

<body>
    <form action="editar-uno.php">
    <table>
        <tr>
            <td><b>Nombre</b></td>
            <td><b>Tipo de Identificacion</b></td>
            <td><b>Identificacion</b></td>
            <td><b>Correo</b></td>
            <td><b>Fecha de Nacimiento</b></td>
            <td><b>Direccion</b></td>
            <td><b>Edad</b></td>
            <td><b>Operacion</b></td>
            <td><b>Operacion</b></td>
        </tr>
        <?php
        $sql = "SELECT * from datos";
        $result = mysqli_query($conectar, $sql);
       

        while($mostrar = mysqli_fetch_array($result)) {

        ?>

            <tr>
                <td><?php echo $mostrar['Nombre'] ?> </td>
                <td><?php echo $mostrar['Tipo_identificacion'] ?> </td>
                <td><?php echo $mostrar['Identificacion'] ?> </td>
                <td><?php echo $mostrar['Correo'] ?> </td>
                <td><?php echo $mostrar['Fecha_Nacimiento'] ?> </td>
                <td><?php echo $mostrar['Direccion'] ?> </td>
                <td><?php echo $mostrar['Edad'] ?> </td>
                <a href="editar-uno.php"><td><button>Editar</button></td></a>
                <td><button>Eliminar</button></td>

                
            </tr>
        <?php
        }
        ?>
    </table>
    </form>
    <center><a href="index.html"> <button>Volver al inicio</button></a></center>

</body>

</html>