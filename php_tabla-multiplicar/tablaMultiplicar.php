<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Multiplicar</title>
</head>

<body>

    <?php
    //Tablas de multiplicar
    echo "<h1>Tablas de Multiplicar</h1>";
    echo "<br>";

    $tablaIn = 1;
    $tablaFin=10;

    echo "<table text-align:center; border=5>";
    echo "<tr>";  
        for ($i=$tablaIn; $i<=$tablaFin ; $i++) {
            echo "<td>Tabla del " . $i . "</td>";              
        }
    echo "</tr>";
    echo "<tr>";
    for ($i=$tablaIn; $i <=$tablaFin ; $i++) { 
        for ($j=$tablaIn; $j <=$tablaFin ; $j++) { 
            echo "<td>$j x $i = ";
            echo ($j * $i);
            echo "</td>";         
        }
        echo "</tr>";       
    }
    echo "</table>";
    ?>
</body>

</html>