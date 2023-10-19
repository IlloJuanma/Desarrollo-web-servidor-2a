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