<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Peliculas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php require '../funciones/muchas_funciones.php' ?>
    <?php require '../funciones/base_datos_peliculas.php' ?>
</head>

<body>
    <div class="container">
        <div class="col-6">
            <h1>Listado de peliculas</h1>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Titulo</th>
                        <th>Fecha Estreno</th>
                        <th>Edad Recomendada</th>
                        <th>Imagen</th>
                    </tr>
                </thead>
                <tbody>
                    <div>
                        <?php
                        $sql = "SELECT * FROM peliculas";
                        $resultado = $conexion->query($sql);

                        while ($fila = $resultado->fetch_assoc()) {
                            //mientras haya filas...
                            echo "<tr>";
                            echo "<td>" . $fila["titulo"] . "</td>";
                            echo "<td>" . $fila["fecha_estreno"] . "</td>";
                            echo "<td>" . $fila["edad_recomendada"] . "</td>";
                            echo "<td>";
                        ?>
                            <img width="50" height="100" src="<?php echo $fila["imagen"] ?>">
                        <?php
                            echo "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </div>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>