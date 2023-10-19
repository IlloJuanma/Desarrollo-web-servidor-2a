<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio en Clase</title>
</head>

<body>
    <h2>Lista</h2>
    <form action="" method="POST">
        <fieldset >
        <legend>Insertar Producto</legend>
        <br>
        <label>Producto</label>
        <input type="text" name="producto">
        <br>
        <label>Precio</label>
        <input type="text" name="precio">
        <br>
        <label>Cantidad</label>
        <input type="text" name="cantidad">
        <br>
        <input type="submit" value="Insertar">
        </fieldset>
    </form>

    <?php
    //Mi array de productos
    $lista = [
        ["PS5", 500, 0],
        ["Aceite", 10, 15],
        ["Cocacola", 2, 12],
    ];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $producto = (string) $_POST["producto"];
        $precio = (float) $_POST["precio"];
        $cantidad = (int) $_POST["cantidad"];

        $nuevoProducto = [$producto, $precio, $cantidad];
        $lista[] = $nuevoProducto;
        //array.push($lista, [$producto...]);
    }
    ?>

    <table border>
        <caption>Lista</caption>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($lista as $productos) {
                list($producto, $precio, $cantidad) = $productos;
                echo "<tr>";
                echo "<td>$producto</td>";
                echo "<td>$precio</td>";
                echo "<td>$cantidad</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>

</html>