<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios Grados</title>
</head>

<body>
    <?php
    function celsiusAFaren(int | float $grado): float|int{
        return ($grado * 1.8) + 32;

    }

    function farenACelsius(int | float $grado): float|int{
        return ($grado-32)/1.8;

    }


    function celsiusAKelvin(int | float $grado): float|int{
        return ($grado + 273.15);

    }


    function kelvinACelsius(int | float $grado): float|int{
        return ($grado - 273.15);

    }

    function kelvinAFaren(int | float $grado): float|int{
        return ($grado - 273.15) * 9/5 + 32;


    }

    function farenAKelvin(int | float $grado): float|int{
        return ($grado - 32) * 5/9 + 273.15;
        
    }

    $faren = celsiusAFaren(32);
    echo $faren;
    $celsius = farenACelsius(32);
    echo "<br>";
    echo $celsius;
    echo "<br>";
    echo celsiusAFaren(32);
    echo "<br>";

    function conversor(int|float $grado, string $u1, string $u2):int | float | string{
        $u1 = strtoupper($u1);
        $u2 = strtoupper($u2);
        if($u1 == "C" && $u2 == "F"){
            return celsiusAFaren($grado);
        }elseif($u1 == "F" && $u2 == "C"){
            return farenACelsius($grado);
        }elseif($u1 == "C" && $u2 == "K"){
            return celsiusAKelvin($grado);
        }elseif($u1 == "K" && $u2 == "C"){
            return kelvinACelsius($grado);
        }elseif($u1 == "K" && $u2 == "F"){
            return kelvinAFaren($grado);
        }elseif($u1 == "F" && $u2 == "K"){
            return farenAKelvin($grado);
        }else{
            return "Error payaso";
        }
    }
    echo "<br>";
    echo conversor(32, "c", "F");    

    //Funcion potencia que reciba 2 numeros y a prueba de fallos, q el expon
    //no sea menor q cero, y cero = cero tampoco, 1 elevo a 0 es 1

    function potencia (int $base, int $exponente): int{
        $resultado=1;
        if ($exponente <= 0 || ($base == 0 && $exponente == 0)){
            return -1.5;
        }else{
            for($i=1; $i <= $exponente; $i++){
                $resultado *= $base;
            }
        }
        return $resultado;

    }
    echo "<br>";
    echo potencia(2,5);
    ?>

</body>

</html>