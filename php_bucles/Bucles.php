<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bucles_style.css">
    <title>Bucles</title>
</head>

<body>
    <h1>--- While ---</h1>
    <?php
    $i = 1;
    while ($i < 10) {
        echo $i;
        $i++;
    }
    echo $i; // Sacamos el 10, o ponemos <= en el bucle
    echo "<br>";
    ?>
    <h1>--- Do-While ---</h1>
    <?php
    $j = 1;
    do {
        echo $j . "<br>";
        $j++;
    } while ($j <= 10);
    echo $j; // Sacamos el ultimo valor posible, es decir, el 11
    echo "<br>";
    ?>
    <h1>--- For ---</h1>
    <?php
    for ($i = 0; ; $i++) { // No le ponemos condicion, pero tenemos el break en el if
        if ($i > 10) {
            break;
        }
        echo $i;
    }
    echo "<br>";
    ?>
    <h1>Ejercicio For ---</h1>
    <h3>Numeros pares del 1 al 20 en una lista</h3>
    <?php
    for ($i = 1; $i <= 20; $i++) {
        if ($i % 2 == 0) {
            echo "<li>$i</li>";
        }
    }
    ?>
    <h3>La suma de los numeros pares</h3>
    <?php
    $suma = 0;
    for ($i = 0; $i <= 20; $i++) {
        if ($i % 2 == 0) {
            $suma = $suma + $i;
        }
    }
    echo "<li>$suma</li>";
    echo "<br>";
    ?>
    <h1>Numeros primos del 1 al 50</h1>
    <?php
    /*
    function numerosPrimos()
    for ($i = 1; $i <= 50; $i++) {
        $salir = true; // Un booleano para controlar cuando salimos
        for ($j = 2; $j <= $i - 1; $j++) {
            if ($i % $j == 0) {
                $salir = false;
            }
        }
        if ($salir) {
            echo "<li>$i</li>";
        }
    }
    */
    ?>
    <h1>Numeros primos del 1 al N</h1>
    <?php
    function numerosPrimos(int $n): array {
        $array = [];
    for ($i = 1; $i <= $n; $i++) {
        if(esPrimo($i)) array_push($array, $i);
        }
    return $array;
    }

    $primos = numerosPrimos(75);
    foreach($primos as $primo){
        echo "$primo ";
    }
    
    echo "<h1>Es primo o no</h1>";

    function esPrimo(int $n) : bool{
        $primo = true;
        for ($j = 2; $j <= $n - 1 && $primo; $j++) {
            if ($n % $j == 0) {
                $primo = false;
            }
        }
        return $primo;      
}

$primo = esPrimo(7);
if ($primo) echo "<h3>7 es primo</h3>";
else echo "<h3>No es primo</h3>";
    ?>
</body>

</html>