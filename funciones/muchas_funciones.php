<?php
function calcularIRPF(float|int $salario): float{
    $salario_final = 0;
    $tramo1 = (12450 * 0.19);
    $tramo2 = ((20200 - 12450) * 0.24);
    $tramo3 = ((35200 - 20200) * 0.30);
    $tramo4 = ((60000 - 35200) * 0.37);
    $tramo5 = ((300000 - 60000) * 0.45);

    if ($salario <= 12450) {
        $salario_final = $salario - ($salario * 0.19);
    } elseif ($salario > 12450 && $salario <= 20200) {
        $salario_final = $salario
            - $tramo1
            - (($salario - 12450) * 0.24);
    } elseif ($salario > 20200 && $salario <= 35200) {
        $salario_final = $salario
            - $tramo1
            - $tramo2
            - (($salario - 20200) * 0.30);
    } elseif ($salario > 35200 && $salario <= 60000) {
        $salario_final = $salario
            - $tramo1
            - $tramo2
            - $tramo3
            - (($salario - 35200) * 0.37);
    } elseif ($salario > 60000 && $salario <= 30000) {
        $salario_final = $salario
            - $tramo1
            - $tramo2
            - $tramo3
            - $tramo4
            - (($salario - 60000) * 0.45);
    } else {
        $salario_final = $salario
            - $tramo1
            - $tramo2
            - $tramo3
            - $tramo4
            - $tramo5
            - (($salario - 300000) * 0.47);
    }
    return $salario_final;
}

?>
<?php

DEFINE("GENERAL", 21);
DEFINE("REDUCIDO", 10);
DEFINE("SUPERREDUCIDO", 4);
DEFINE("SINIVA", 0);

//Resta el iva al precio
function precioSinIva(float|int $precio, string $IVA): float
{
    $precioSinIva = match ($IVA) {
        "GENERAL" => $precio - $precio * (GENERAL / 100),
        "REDUCIDO" => $precio - $precio * (REDUCIDO / 100),
        "SUPERREDUCIDO" => $precio - $precio * (SUPERREDUCIDO / 100),
        "SIN IVA" => $precio
    };
    return $precioSinIva;
}

//Suma el iva al precio
function precioConIva(float|int $precio, string $IVA): float
{
    $precioConIva = match ($IVA) {
        "GENERAL" => $precio + $precio * (GENERAL / 100),
        "REDUCIDO" => $precio + $precio * (REDUCIDO / 100),
        "SUPERREDUCIDO" => $precio + $precio * (SUPERREDUCIDO / 100),
        "SIN IVA" => $precio
    };
    return $precioConIva;
}

?>

<?php
function potencia (int $base, int $exponente): int{
    //Igual a 1 porque multiplicar por 0 es un problema
    $resultado = 1;
    if($exponente <= 0 || ($base == 0 && $exponente == 0)){     
        //Damos un valor que sabemos que nunca podra darse para decir "ERROR"
        return -1.5;

    }else{
        for($i = 1; $i <= $exponente; $i++){
            $resultado *= $base;
        }
    }
    return $resultado;
}
?>

<?php
function suma3(int $n1, int $n2, int $n3): string{
    if($n1 == $n2 && $n2 == $n3){
        return "Los tres números son iguales";
    }else{
        $candidato = $n1;
        if($n2 > $candidato){
            $candidato = $n2;
        }
        if($n3 > $candidato){
            $candidato = $n3;
        }
        return "El mayor es $candidato";
    }
}
?>

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
            return "Error";
        }
    }

    function esPrimo($num){ //Te dice si un numero es primo
        $cont = 0;
        for($i = 2; $i <= $num; $i++){
            if($num % $i == 0) $cont++;
            if($cont>1) return "No es primo";
        }
        return "Es primo";
    }
    
    function numerosPrimos(int $num) : array{ //Devuelve array de primos desde 0 a N
            $arrayPrimos = [];
            for ($i = 1; $i <= $num; $i++){
                if(esPrimo($i)) array_push($arrayPrimos, $i);
            }
            return $arrayPrimos;
    }
    function depurar($entrada){
        $salida = htmlspecialchars($entrada);
        $salida = trim($salida);
        return $salida;
    }
?>