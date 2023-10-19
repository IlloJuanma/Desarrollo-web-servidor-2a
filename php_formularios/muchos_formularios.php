<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular IRPF</title>
    <?php require '../funciones/muchas_funciones.php';
    ?>
</head>

<body>
    <h1>Calcular tu IRPF</h1>
    <form action="" method="POST">
        <fieldset>
            <legend>Salario</legend>
            <input type="text" name="salario">
            <br><br>
            <input type="hidden" name="action" value="irpf">
            <input type="submit" value="Calcular">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["action"] == "irpf") {
                    $salario = (int) $_POST["salario"];
                    echo "<h3>Tu irpf es:" . calcularIRPF($salario) . "</h3>";
                }
            }
            ?>
        </fieldset>
    </form>
    <hr>


    <h2>Lista</h2>
    <form action="" method="POST">
        <fieldset>
            <legend>Insertar Producto</legend>
            <br>
            <label>Producto</label>
            <input type="text" name="producto">
            <br>
            <br>
            <label>Precio</label>
            <input type="text" name="precio">
            <br>
            <br>
            <label>Cantidad</label>
            <input type="text" name="cantidad">
            <br>
            <br>
            <input type="hidden" name="action" value="productos">
            <input type="submit" value="Insertar">
            <?php
            //Mi array de productos
            $lista = [
                ["PS5", 500, 0],
                ["Aceite", 10, 15],
                ["Cocacola", 2, 12],
            ];

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["action"] == "productos") {
                    $producto = (string) $_POST["producto"];
                    $precio = (float) $_POST["precio"];
                    $cantidad = (int) $_POST["cantidad"];

                    $nuevoProducto = [$producto, $precio, $cantidad];
                    $lista[] = $nuevoProducto;
                    //array.push($lista, [$producto...]);
                }
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
        </fieldset>
    </form>
    <br>
    <hr>

    <h1>El mayor o igual de 3 números</h1>
    <form action="" method="POST">
        <fieldset>
            <legend>Números</legend>
            <label>Primer numero</label>
            <br>
            <input type="number" name="n1">
            <br>
            <label>Número 2</label>
            <br>
            <input type="number" name="n2">
            <br>
            <label>Número 3</label>
            <br>
            <input type="number" name="n3">
            <br>
            <input type="hidden" name="action" value="mayor">
            <input type="submit" value="Calcular">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["action"] == "mayor") {
                    $n1 = (int) $_POST["n1"];
                    $n2 = (int) $_POST["n2"];
                    $n3 = (int) $_POST["n3"];
                    echo "<h3>Resultado: " . suma3($n1, $n2, $n3) . "</h3>";
                }
            }
            ?>
        </fieldset>
    </form>
    <hr>

    <h1>Formulario de Potencias</h1>
    <form action="" method="POST">
        <fieldset>
            <legend>Potencias</legend>
            <label>Base</label>
            <br>
            <input type="number" name="base">
            <br><br>
            <label>Exponente</label>
            <br>
            <input type="number" name="exponente">
            <br><br>
            <input type="hidden" name="action" value="potencia">
            <input type="submit" value="Calcular">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["action"] == "potencia") {
                    $base = (int) $_POST["base"];
                    $exponente = (int) $_POST["exponente"];
                    echo "<br>";
                    echo "<h3>El resultado es: " . potencia($base, $exponente) . "</h3>";
                }
            }
            ?>
        </fieldset>
    </form>

    <hr>

    <h1>Convertir</h1>
    <form action="" method="POST">
        <fieldset>
            <legend>Convertir Temperaturas</legend>
            <label>Temperatura</label>
            <input type="number" name="temp" step="any">
            <br>
            <label>De</label>
            <br>
            <select name="temp1">
                <option value="c">Celsius</option>
                <option value="f">Farenheit</option>
                <option value="k">Kelvin</option>
            </select>
            <br>
            <label>A</label>
            <br>
            <select name="temp2">
                <option value="c">Celsius</option>
                <option value="f">Farenheit</option>
                <option value="k">Kelvin</option>
            </select>
            <br>
            <input type="hidden" name="action" value="temp">
            <input type="submit" value="Calcular">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["action"] == "temp") {
                    $temp = (float) $_POST["temp"];
                    $temp1 = (string) $_POST["temp1"];
                    $temp2 = (string) $_POST["temp2"];

                    $resultado = conversor($temp, $temp1, $temp2);
                    if (is_numeric($resultado)) {
                        echo "Resultado: $resultado $temp2";
                    } else {
                        echo $resultado;
                    }
                }
            }
            ?>
        </fieldset>
    </form>

    <hr>
    <h2>Formulario Precio</h2>
    <form action="" method="post">
        <fieldset>
            <legend>Calcular IVA</legend>
            <label>Precio: </label>
            <input type="number" name="precio" step="0.1">
            <br><br>
            <select name="iva">
                <option value="GENERAL">General</option>
                <option value="REDUCIDO">Reducido</option>
                <option value="SUPERREDUCIDO">Superreducido</option>
                <option value="SIN IVA">sin IVA</option>
            </select>
            <br><br>
            <input type="hidden" name="action" value="iva">
            <input type="submit" value="Calcular">
            <br><br>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["action"] == "iva") {
                    $precio = (float) $_POST["precio"];
                    $iva = $_POST["iva"];
                    echo "<h3>El iva es: " . precioConIVA($precio, $iva) . "</h3>";
                }
            }
            ?>
        </fieldset>
    </form>
    <hr>
    <h2>Formulario esPrimo</h2>
    <form action="" method="POST">
        <fieldset>
            <legend>Es pollo-primo y que pollos primos?</legend>
            <!--lore de Breaking Bad, perdon -->
            <label>Número</label>
            <input type="number" name="esPrimo">
            <br><br>
            <input type="hidden" name="action" value="primo">
            <input type="submit" value="Calcular">
            <br>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if ($_POST["action"] == "primo") {
                    $primo = (int) $_POST["esPrimo"];
                    echo "<h3>Es primo? " . esPrimo($primo) . "</h3>";
                }
            }
            ?>
        </fieldset>
    </form>

</body>

</html>