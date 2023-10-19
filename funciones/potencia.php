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