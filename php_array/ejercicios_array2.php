<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ejercicios.array2.style.css">
    <title>Ejercicios Array 2</title>
</head>

<body>
    <h1>--- Ejercicio 1 ---</h1>
    <h2>Array que almacenes productos y precios en tabla. Suma de precios y productos
        y ordenados
        por nombre.
    </h2>
    <?php
    $sumaProductos = 0;
    $totalPrecios = 0;
    $productos = [
        ["Mandarina", 15],
        ["Azucar", 10],
        ["Tomate", 2],
        ["Aceite", 9],
        ["Refresco", 12],
    ];
    ?>
    <table class="productos">
        <caption class="productos_caption">Productos</caption>
        <thead>
            <th>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                </tr>
            </th>
        </thead>
        <tbody>
            <?php
            $nombre = array_column($productos, 0);
            $precio = array_column($productos, 1);
            array_multisort($nombre, SORT_ASC, $precio, SORT_ASC, $productos);
            foreach ($productos as $producto) {
                list($nombre, $precio) = $producto;
                echo "<tr>";
                echo "<td>$nombre</td>";
                echo "<td>$precio</td>";
                echo "</tr>";
                $sumaProductos++;
                $totalPrecios += $precio;
            }
            ?>
        </tbody>
        <tfoot>
            <tr>
                <?php
                echo "<th>Productos $sumaProductos</th>";
                echo "<th>Total $totalPrecios</th>";
                ?>
            </tr>
        </tfoot>
    </table>
    <hr>
    <h1>--- Ejercicio 2 ---</h1>
    <h2></h2>
    <hr>
    <h1>--- Ejercicio 3 ---</h1>
    <h2>Array numeros del 1 al 50. Elimina mediante un bucle y funcion unset los
        numeros que sea divisibles entre 3
    </h2>
    <?php
    $arrayNum = array();
    for ($i = 1; $i <= 50; $i++) {
        array_push($arrayNum, $i);
    }
    foreach ($arrayNum as $indice => $numero) {
        if ($numero % 3 === 0) {
            unset($arrayNum[$indice]);
        }
        echo "<ul>";
        echo "<li>$numero</li>";
        echo "</ul>";
    }
    ?>
    <h1>--- Ejercicio 3 ---</h1>
    <h2>Array dos dimensiones nombre, apellido, edad( numero ale 0 y 100). Mostrar en tabla
        con una columna que indique si es mayor de edad o jubilidad(+65 años).Usar match.
    </h2>
    <?php
    $lista_personas = [
        ["Juanma", "Rodriguez", rand(0, 100)],
        ["IlloJuan", "LMDSHOW", rand(0, 100)],
        ["Masi", "Rodriguez", rand(0, 100)],
        ["Pepe", "Colubi", rand(0, 100)],
        ["Andreu", "Buenafuente", rand(0, 100)],
    ]
        ?>
    <table class="personas">
        <caption class="personas_caption">Personas</caption>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Hay pelitos</th>
            </tr>
        </thead>
        <tbody>
            <?php
            /*foreach ($lista_personas as $persona) {
                list($nombre, $apellido, $edad) = $persona;
                echo "<tr>";
                echo "<td>$nombre</td>";
                echo "<td>$apellido</td>";
                echo "<td>$edad</td>";
                if ($edad < 18) {
                    echo "<td>Menor de edad</td>";
                } elseif ($edad >= 18 && $edad < 65) {
                    echo "<td>Mayor de edad</td>";
                } else {
                    echo "<td>Jubilada</td>";
                }
            }*/
            foreach ($lista_personas as $persona) {
                $edad = $persona[2];
                $hay_pelitos = match (true) {
                    $edad < 18 => "menor de edad",
                    $edad >= 18 && $edad <= 65 => "mayor de edad",
                    $edad > 65 => "jubilado",
                };
                echo "<tr>
                <td>{$persona[0]}</td>
                <td>{$persona[1]}</td>
                <td>{$edad}</td>
                <td>{$hay_pelitos}</td>
              </tr>";
            }
            ?>
        </tbody>
    </table>
    <h1>--- Ejercicio 5 ---</h1>
    <h2>Array con DNI y nombre. Mostrar en tabla, donde indique si el DNI es correcto.
        Un dni sera correcto cuando tenga exactamente 9 caracteres.
    </h2>
    <?php
    $listaPersonas = [
        ["Juanma", "76883700J"],
        ["Alejandro", "7688"],
        ["Marina", "45237136P"],
        ["Jaime", "003"],
    ]
        ?>
    <table class="info-personas">
        <caption class="info-personas_caption">Informacion Personas</caption>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>DNI</th>
                <th>Comprobacion</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($listaPersonas as $persona) {
                list($nombre, $dni) = $persona;
                echo "<tr>";
                echo "<td>$nombre</td>";
                echo "<td>$dni</td>";
                if (strlen($dni) == 9) {
                    echo "<td>Dni correcto";
                } else {
                    echo "<td>Dni incorrecto";
                }
                echo "</tr>";
            }
            ?>

        </tbody>
    </table>
</body>

</html>