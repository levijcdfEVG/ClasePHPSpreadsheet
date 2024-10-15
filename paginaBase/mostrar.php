<?php 
require 'leerexcel.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="../css/mostrar.css" rel="stylesheet" />
    <title>Datos Excel</title>
</head>
    <body>
        <?php
            //Tabla con los valores
            echo "<table>";
            // Imprimir los estudiantes
            foreach ($estudiantes as $estudiante) {
                if($estudiante[0] != ''){
                    echo "<tr><td>Número: " . $estudiante[0] . "</td><td>Nombre: " . $estudiante[1] . PHP_EOL."</td></tr>"; // Enviar a la página
                }
            }
            echo "</table>";
        ?>
    </body>
</html>
