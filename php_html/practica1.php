<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/practica1.style.css">
    <title>Tabla de Multiplicar</title>
</head>
<body>
    <h1>--- Practica 1 ---</h1>
    <table class="tabla_mult">
        <caption class="tabla_mult-caption">Tablas de Multiplicar</caption>
        <thead>
            <?php
            $tablaIn = 1;
            $tablaFin = 10;

            echo "<tr>";
            for ($i = $tablaIn; $i <= $tablaFin; $i++) {
                echo "<td>Tabla del " . $i . "</td>";
            }
            ?>
        </thead>
        <tbody>
            <?php
            echo "</tr>";
            echo "<tr>";
            for ($i = $tablaIn; $i <= $tablaFin; $i++) {
                for ($j = $tablaIn; $j <= $tablaFin; $j++) {
                    echo "<td>$j x $i = ";
                    echo ($j * $i);
                    echo "</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>

</html>