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