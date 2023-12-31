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
        <a href="create_videogame.php" class="btn btn-info">Create videogames</a>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Distribuidora</th>
                    <th>Precio</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <div>
                    <?php

                    if($_SERVER["REQUEST_METHOD"] == "GET"){
                        $sql = $conexion->prepare("SELECT * FROM videojuegos");
                        $sql->execute();
                        $resultado = $sql->get_result();
                        $conexion -> close();  
                    }

                    if($_SERVER["REQUEST_METHOD"] == "POST"){
                        $titulo = $_POST["titulo"];
                        $filtro1 = $_POST["filtrar1"];
                        $filtro2 = $_POST["filtrar2"];
                        $filtro_distribuidora = $_POST["filtro_distribuidora"];
                        $precioMin = $_POST["precioMin"];
                        $precioMax = $_POST["precioMax"];
                        
                        if(isset($precioMin) && isset($precioMax)){
                        $sql = $conexion->prepare("SELECT * FROM videojuegos
                        WHERE precio BETWEEN ? AND ? ORDER BY $filtro1 $filtro2");
                        // Si quiero comprobar sin precio comprobar con isset si esta precio, si esta realizo esta consulta sino realizo otra consulta sin el precio
                        $sql -> bind_param("dd", $precioMin, $precioMax);
                        $sql -> execute();
                        $resultado = $sql -> get_result();
                        }
                        if($precioMin === "" && $precioMax=== ""){
                        $sql = $conexion->prepare("SELECT * FROM videojuegos
                        WHERE titulo LIKE CONCAT ('%', ?, '%') AND distribuidora LIKE CONCAT ('%', ?, '%') ORDER BY $filtro1 $filtro2");
                        // Si quiero comprobar sin precio comprobar con isset si esta precio, si esta realizo esta consulta sino realizo otra consulta sin el precio
                        $sql -> bind_param("ss", $titulo, $filtro_distribuidora);
                        $sql -> execute();
                        $resultado = $sql -> get_result();
                        }

                        
                    }
                
                    while ($fila = $resultado -> fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>" . $fila["titulo"] . "</td>";
                            echo "<td>" . $fila["distribuidora"] . "</td>";
                            echo "<td>" . $fila["precio"] . "</td>";
                            echo "<td>";
                            ?>
                            <td>
                                <form action="view_videogame.php" method="get">
                                    <input type="hidden" name="titulo" value="<?php echo $fila["titulo"]?>">
                                    <input type="submit" class="btn btn-secondary" value="Details">
                                </form>
                            </td>
                            <td>
                                <form action="edit_videogame.php" method="get">
                                    <input type="hidden" name="titulo" value="<?php echo $fila["titulo"] ?>">
                                    <input type="submit" class="btn btn-info" value="Edit">
                                </form>
                            </td>
                            <td>
                                <form action="delete_videogame.php" method="POST">
                                    <input type="hidden" name="titulo" value="<?php echo $fila["titulo"] ?>">
                                    <input type="submit" class="btn btn-danger" value="Delete">
                                </form>
                            </td>
                    <?php
                    }
                    ?>
                </div>
            </tbody>
        </table>
        <form action="" method="POST">
            <label>Buscar Juego</label><br>
            <input type="text" name="titulo">
            <input type="submit" name="buscar" value="Buscar"><br>
            <label>Filtrar</label><br>
            <select name="filtrar1">
                <option value="titulo" selected>Titulo</option>
                <option value="titulo">Distribuidora</option>
                <option value="titulo">Precio</option>
            </select>
            <select name="filtrar2">
                <option value="asc" name="asc" selected>ASCE</option>
                <option value="desc" name="des">DESC</option>
            </select>
            <select name="filtro_distribuidora">
                <option value="">Seleccionar Distribuidora</option>
                <option value="Rockstar Games">Rockstar Games</option>
                <option value="Insomniac">Insomniac</option>
                <option value="Ubisoft">Ubisoft</option>
                <option value="PS Studios">PS Studios</option>
                <option value="Naughty Dog">Naughty Dog</option>
                <option value="Santa Monica">Santa Monica</option>
                <option value="Bancarrota SL">Bancarrota SL</option>
            </select>
            <br><br>
            <label>Filtrar por Precios</label>
            <input type="number" name="precioMin" placeholder="Precio minimo">
            <input type="number" name="precioMax" placeholder="Precio maximo">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>
</html>