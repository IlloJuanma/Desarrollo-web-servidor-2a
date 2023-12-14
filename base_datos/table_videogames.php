<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Videogame</title>
    <?php require 'database_conection.php' ?>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Videogames</h1>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Distribuidora</th>
                    <th>Precio</th>
                </tr>
            </thead>
            <tbody>
                <div>
                    <?php
                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                        $titulo = $_POST["titulo"];
                    }
                    $sql = $conexion->prepare("SELECT * FROM videojuegos");
                    $sql->execute();
                    $resultado = $sql->get_result();
                    $conexion -> close();

                    while ($fila = $resultado->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $fila["titulo"] . "</td>";
                        echo "<td>" . $fila["distribuidora"] . "</td>";
                        echo "<td>" . $fila["precio"] . "</td>";
                        echo "<td>";
                    }
                    ?>
                </div>
            </tbody>
        </table>
        <form action="buscar.php" method="POST">
            <label>Buscar Juego</label><br>
        <input type="text" name="titulo">
        <input type="submit" name="buscar" value="Buscar">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>
</html>