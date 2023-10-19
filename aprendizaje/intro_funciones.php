<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intro Funciones</title>
</head>

<body>
    <?php
    function sumaDosV1($num1,$num2){

        //Instrucciones
        return $num1+$num2;
    }
    function sumaDosV2(int|float $num1, int|float  $num2){

        //Instrucciones
        return $num1+$num2;
    }
    //Esta funcion va a devolver un float siempre
    function sumaDosV4(int|float $num1, int|float  $num2) :int{

        //Instrucciones
        return $num1+$num2;
    }
    $resultado = sumaDosV2(1.5,3);

    echo "<h3>Resultado 1: $resultado</h3>";
    echo "<h3>Resultado 2: " . sumaDosV2(3,5) . "</h3>";
    echo "<h3>Resultado 2: " . sumaDosV4(3.6,5) . "</h3>";
    //echo "<h3>Resultado 3: " . sumaDos("a","b") . "</h3>";
    ?>
</body>

</html>