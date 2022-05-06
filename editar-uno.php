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
    <br>
        <?php
        $sql = "SELECT * from datos";
        $result = mysqli_query($conectar, $sql);
       

        while($mostrar = mysqli_fetch_array($result)) {

        ?>

            <form action="editar.php " method="POST">
                 <input type="text" value="<?php echo $mostrar['Nombre'] ?>" name="nombre"> </input>
                 <input type="text" value="<?php echo $mostrar['Tipo_identificacion'] ?>" name="tipoid">  </input>
                 <input type="number" value="<?php echo $mostrar['Identificacion'] ?>" name="numid"> </input>
                 <input type="email" value="<?php echo $mostrar['Correo'] ?> " name="email"> </input>
                 <input type="date" value="<?php echo $mostrar['Fecha_Nacimiento'] ?>" name="fecha">  </input>
                 <input type="text" value="<?php echo $mostrar['Direccion'] ?>" name="direccion"> </input>
                 <input type="number" value="<?php echo $mostrar['Edad'] ?>" name="edad">  </input>
                 <input type="submit" value="actualizar">
                 <a href="editar.php"><button>Cancelar</button> </input></a>

                
            </form>
        <?php
        }
        ?>
    
    

</body>

</html>