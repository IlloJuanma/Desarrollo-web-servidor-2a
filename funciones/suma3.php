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