<?php

include "conectar.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Consultar</title>
    
</head>

<body>
    <br>
    <table border="2">
        <tr>
            <td> <b>Nombre</b></td>
            <td> <b>Tipo de Identificación</b></td>
            <td> <b>Número de Identificación</b></td>
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
            </tr>
        <?php
        }
        ?>
    </table>
    <center><a href="index.html"> <button>Volver al inicio</button></a></center>

</body>

</html>