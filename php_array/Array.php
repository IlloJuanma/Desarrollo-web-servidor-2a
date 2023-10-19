<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/array.style.css">
    <title>Array</title>
</head>

<body>
    <h1>--- Array ---</h1>
    <?php
    $array_animales = array("perro", "gato", "avestruz");
    $array_animales_num = count($array_animales);
    for ($i = 0; $i < $array_animales_num; $i++) {
        echo " " . $array_animales[$i] . " ";
    }
    echo "<br>";
    ?>
    <h2>-- Array con clave / valor --</h2>
    <?php
    $array1 = array(
        "key1" => "value1",
        "key2" => "value2",
        "key3" => "value3"
    );
    print_r($array1);
    echo "<br>";

    $personas = array(
        "76883700J" => "Juanma",
        "46165422K" => "Paco",
        "86345220H" => "Nacho",
        "56083700L" => "Alberto",
        "16341737R" => "Adrian",
    );
    ?>
    <h2>La mejor forma de recorrer un array con un foreach</h2>
    <table class="personas">
        <caption class="personas_caption">Personas</caption>
        <thead>
            <tr>
                <th>DNI</th>
                <th>NOMBRE</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($personas as $dni => $nombre) {
                echo "<tr>";
                echo "<td>$dni</td>";
                echo "<td>$nombre</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <h1>--- Ordenar Arrays ---</h1>
    <h2>-- SORT --</h2>
    <table class="personas">
        <caption class="personas_caption">Personas</caption>
        <thead>
            <tr>
                <th>DNI</th>
                <th>NOMBRE</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $auxiliar = $personas;
            sort($auxiliar);
            foreach ($auxiliar as $dni => $nombre) {
                echo "<tr>";
                echo "<td>$dni</td>";
                echo "<td>$nombre</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <h2>-- RSORT --</h2>
    <table class="personas">
        <caption class="personas_caption">Personas</caption>
        <thead>
            <tr>
                <th>DNI</th>
                <th>NOMBRE</th>
            </tr>
        </thead>
        <tbody>
            <?php
            rsort($auxiliar);
            foreach ($auxiliar as $dni => $nombre) {
                echo "<tr>";
                echo "<td>$dni</td>";
                echo "<td>$nombre</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <h2>-- ASORT --</h2>
    <table class="personas">
        <caption class="personas_caption">Personas</caption>
        <thead>
            <tr>
                <th>DNI</th>
                <th>NOMBRE</th>
            </tr>
        </thead>
        <tbody>
            <?php
            asort($personas);
            foreach ($personas as $dni => $nombre) {
                echo "<tr>";
                echo "<td>$dni</td>";
                echo "<td>$nombre</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <h2>-- ARSORT --</h2>
    <table class="personas">
        <caption class="personas_caption">Personas</caption>
        <thead>
            <tr>
                <th>DNI</th>
                <th>NOMBRE</th>
            </tr>
        </thead>
        <tbody>
            <?php
            arsort($personas);
            foreach ($personas as $dni => $nombre) {
                echo "<tr>";
                echo "<td>$dni</td>";
                echo "<td>$nombre</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <h1>--- Array Multidimensionales ---</h1>
    <table class ="videojuegos">
        <caption class="videojuegos_caption">Videojuegos</caption>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Consola</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $juegos = [
                ["Pacman", "Atari", 60],
                ["Fortnite", "PS4", 0],
                ["Mario Kart", "Super Nintendo", 70],
                ["Street Fighter", "PS4", 50],
                ["Legend of Zelda", "Nintendo 64", 40],
                ["Castlevania", "Nintendo 64", 55],
            ];
            $consola = array_column($juegos, 1); // El segundo en el orden
            $nombre = array_column($juegos, 0); // El primero en el orden
            $precio = array_column($juegos, 2); // El tercero en el orden
            array_multisort($consola, SORT_ASC, $nombre, SORT_ASC, $precio, SORT_ASC, $juegos);

            foreach ($juegos as $juego) {
                list($nombre, $consola, $precio) = $juego;
                echo "<tr>";
                echo "<td>$nombre</td>";
                echo "<td>$consola</td>";
                echo "<td>$precio</td>";
                echo "</tr>";
            };
            ?>
        </tbody>
    </table>
    <hr>
    <h2>-- Añadiendo una columna --</h2>
    <table class="videojuegos">
        <caption class="videojuegos_caption">Videojuegos</caption>
        <thead>
            <tr>
            <th>Nombre</th>
            <th>Consola</th>
            <th>Precio</th>
            <th>Stock</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $juegos = [
            ["Pacman", "Atari", 60],
            ["Fortnite", "PS4", 0],
            ["Mario Kart", "Super Nintendo", 70],
            ["Street Fighter", "PS4", 50],
            ["Legend of Zelda", "Nintendo 64", 40],
            ["Castlevania", "Nintendo 64", 55],
        ];
        for ($i = 0; $i<count($juegos); $i++){
            $juegos[$i][3] = rand(1,10); // Añadimos en la 3 columna, stock aleatorio del 1 al 10
        }
        //print_r($juegos);
        foreach ($juegos as $juego) {
            list($nombre, $consola, $precio, $stock) = $juego;
            echo "<tr>";
            echo "<td>$nombre</td>";
            echo "<td>$consola</td>";
            echo "<td>$precio</td>";
            echo "<td>$stock</td>";
            echo "</tr>";
            // Tenemos que crear otra row para poner esos datos de la 3 columna
        };
    ?>    
        </tbody>
    </table>

</body>

</html>