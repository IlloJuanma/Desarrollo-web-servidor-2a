<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/practica4.style.css">
    <title>Practica 4</title>
</head>

<body>
    <h1>--- Pratica 4 ---</h1>
    <?php
    $arrayBidi = array();

    $array1 = array();
    $array2 = array();

    for ($i = 0; $i < 10; $i++) {
        $array1[] = rand(1, 10);
    }
    for ($i = 0; $i < 10; $i++) {
        $array2[] = rand(10, 100);
    }
    array_push($arrayBidi, $array1);
    array_push($arrayBidi, $array2);
    //print_r($arrayBidi)
    ?>
    <table class="tabla_array">
        <caption class="tabla_array-caption">Tabla del Array Bidi</caption>
        <thead>
            <tr>
                <th>Array1</th>
                <th>Array2</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $numArrays = count($arrayBidi);
            $numElementos = count($arrayBidi[0]);
            for ($i = 0; $i < $numElementos; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $numArrays; $j++) {
                    echo "<td>" . $arrayBidi[$j][$i] . "</td>";
                }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <?php
    $maximo_array1 = $arrayBidi[0][0];
    $minimo_array1 = $arrayBidi[0][0];
    $suma_array1 = 0;
    foreach ($arrayBidi[0] as $valor) {
        if ($valor > $maximo_array1) {
            $maximo_array1 = $valor;
        }
        if ($valor < $minimo_array1) {
            $minimo_array1 = $valor;
        }
        $suma_array1 += $valor;
    }
    $media_array1 = $suma_array1 / count($arrayBidi);
    /*---------------------------------------------*/
    $maximo_array2 = $arrayBidi[1][0];
    $minimo_array2 = $arrayBidi[1][0];
    $suma_array2 = 0;
    foreach ($arrayBidi[1] as $valor2) {
        if ($valor2 > $maximo_array2) {
            $maximo_array2 = $valor2;
        }
        if ($valor2 < $minimo_array2) {
            $minimo_array2 = $valor2;
        }
        $suma_array2 += $valor2;
    }
    $media_array2 = $suma_array2 / count($arrayBidi);
    ?>
    <h2>Valor maxima, minimo y media del Array1</h2>
    <p>Valor maximo:
        <?php
        echo $maximo_array1;
        ?>
    </p>
    <p>Valor minimo:
        <?php
        echo $minimo_array1;
        ?>
    </p>
    <p>Valor medio:
        <?php
        echo $media_array1;
        ?>
    </p>
    <h2>Valor maxima, minimo y media del Array2</h2>
    <p>Valor maximo:
        <?php
        echo $maximo_array2;
        ?>
    </p>
    <p>Valor minimo:
        <?php
        echo $minimo_array2;
        ?>
    </p>
    <p>Valor medio:
        <?php
        echo $media_array2;
        ?>
    </p>
</body>
</html>