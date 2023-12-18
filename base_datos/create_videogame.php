<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Videogame</title>
    <?php require 'database_conection.php' ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $titulo = $_POST["titulo"];
        $distribuidora = $_POST["distribuidora"];
        $precio = (float) $_POST["precio"];

        // Preparamos los statement de los values
        $sql = $conexion -> prepare("INSERT INTO videojuegos VALUES (?,?,?)");
        // Indicamos los tipos de values que van a estar (string, string, double)
        $sql -> bind_param("ssd", $titulo, $distribuidora, $precio);
        // Ejecutamos
        $sql -> execute();

        // Es recomendable, ir cerrando cuando realizamos acciones en la bbdd
        $conexion -> close();
    }

    ?>
    <div class="container">
        <h1>New Videogame</h1>
        <form action="" method="POST">
            <div class="mb-3">
                <label class="form-label">Titulo</label>
                <input type="text" class="form-control" name="titulo">
            </div>
            <div class="mb-3">
                <label class="form-label">Distribuidora</label>
                <input type="text" class="form-control" name="distribuidora">
            </div>
            <div class="mb-3">
                <label class="form-label">Precio</label>
                <input type="number" step="0.1" class="form-control" name="precio">
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" value="Crear">
            </div>
            <a href="table_videogames.php" class="btn btn-info">Back</a>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>