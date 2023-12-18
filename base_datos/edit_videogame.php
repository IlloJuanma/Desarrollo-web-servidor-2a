<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit videogame</title>
    <?php require 'database_conection.php' ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <?php
    if(!isset($_GET["titulo"])) header ('location: table_videogames.php');
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $titulo = $_GET["titulo"];

        $sql = $conexion->prepare("SELECT * FROM videojuegos WHERE titulo = ?");
        $sql -> bind_param("s", $titulo);
        $sql->execute();
        $resultado = $sql->get_result();
        
        $fila =$resultado -> fetch_assoc();
        $conexion -> close(); 
        $distribuidora = $fila["distribuidora"];
        $precio = $fila["precio"];
       
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $titulo = $_GET["titulo"];
        $distribuidora = $_POST["distribuidora"];
        $precio = (float) $_POST["precio"];
        // $titulo_original = $_POST["titulo_original"];
        // Y lo cambiamos en el bind_param

        // Preparamos los statement de los values
        $sql = $conexion -> prepare("UPDATE videojuegos SET distribuidora = ? , precio = ? WHERE titulo = ?" );
        // Indicamos los tipos de values que van a estar (string, string, double)
        $sql -> bind_param("sds", $distribuidora, $precio, $titulo);
        // $sql -> bind_param("ssds", $distribuidora, $precio, $titulo_original);
        // Ejecutamos
        $sql -> execute();

        // Es recomendable, ir cerrando cuando realizamos acciones en la bbdd
        $conexion -> close();
    }
    ?>
    <div class="container">
        <h1>View Videogame</h1>
        <h3><?php echo $titulo ?></h3>
        <h3><?php echo $distribuidora ?></h3>
        <h3><?php echo $precio ?></h3>
    <hr> 
        <h1>Edit Videogame</h1>
        <form action="" method="POST">
            <div class="mb-3">
                <!-- Para camibar el titulo necesitamos el valor antiguo -->
                <input type="hidden" name="titulo_original" value="<?php echo $titulo ?>">
                <label class="form-label">Titulo</label>
                <input type="text" class="form-control" name="titulo" value="<?php echo $titulo?>" disabled=true>
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
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>