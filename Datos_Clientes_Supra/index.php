<?php
include "registro.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Datos del Cliente</title>
</head>

<body>
    <form action="registro.php" method="post">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" placeholder="Escriba su nombre" required>
        <div class="dividir">
            <div class="alinear">
                <p>Tipo de identificacion</p>
                <select name="tipoid" required>
                    <option value="">-Seleccionar-</option>
                    <option value="cedula">Cedula</option>
                    <option value="NIT">NIT</option>
                    <option value="Cedula extranjera">cedula extranjera</option>
                    <option value="Pasaporte">Pasaporte</option>
                </select>
            </div>
            <div class="alinear">
                <label for="numid"> Numero Identificación: </label>
                <input type="number" name="numid" required>
            </div>
        </div>
        <label for="correo">Correo</label>
        <input type="email" name="correo" placeholder="ejemplo@correo.com" required>
        <label for="fecha">Fecha de nacimiento</label>
        <input type="date" name="fecha" max="2022-12-31" min="1900-01-01" required>
        <div>
            <label for="Direccion">Dirección</label>
            <input type="text" name="direccion">
            <label for="Edad">Edad</label>
            <input type="number" name="edad">
        </div>
        <input type="submit" name="enviar">
    </form>
    

    <center><a href="consultar.php"><button>Consultar Clientes</button></a></center>

    
    
</body>
</html>