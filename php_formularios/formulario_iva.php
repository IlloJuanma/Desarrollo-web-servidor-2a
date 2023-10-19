<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario IVA</title>
    <?php require '../funciones/IVA.php';
    ?>
    <?php require '../funciones/calcular_IRPF.php';
    ?>
</head>

<body>
    <h2>Formulario Precio</h2>
    <form action="" method="post">
        <label>Precio: </label>
        <input type="number" name="precio" step="0.1">
        <br><br>
        <select name="iva">
            <option value="GENERAL">General</option>
            <option value="REDUCIDO">Reducido</option>
            <option value="SUPERREDUCIDO">Superreducido</option>
            <option value="SIN IVA">sin IVA</option>
        </select>
        <br><br>
        <input type="hidden" name="action" value="iva">
        <input type="submit" value="Calcular">
    </form>
    <?php

    /*if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $precio = (float) $_POST["precio"];
    $iva = $_POST["iva"];
    echo precioConIVA($precio, $iva);
    }*/

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if($_POST["action"] == "iva"){
            $precio = (float) $_POST["precio"];
            $iva = $_POST["iva"];
            echo precioConIVA($precio, $iva);
    }
    ?>
    <h2>Formulario IVA</h2>

    <form action="" method="POST">
        <label>Salario: </label>
        <br>
        <input type="number" step="1000" name="salario"><br><br>
        <input type="hidden" name="action" value="irpf">
        <input type="submit" value="Calcular">
    </form>
    <?php
    
        if($_POST["action"] == "irpf"){
            $salario = (float) $_POST["salario"];
            echo calcularIRPF($salario);
        }
    }
    ?>

</body>

</html>