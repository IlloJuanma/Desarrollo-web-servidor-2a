<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Temperaturas</title>
    <?php require '../funciones/temperaturas.php';
    ?>
</head>
<body>
<h1>Convertir</h1>
    <form action="" method="POST">
        <label>Temperatura</label>
        <input type="number" name="temp" step="any">
        <br>
        <label>De</label>
        <br>
        <select name="temp1">
            <option value="celsius">Celsius</option>
            <option value="farenheit">Farenheit</option>
            <option value="kelvin">Kelvin</option>
        </select>
        <br>
        <label>A</label>
        <br>
        <select name="temp2">
            <option value="celsius">Celsius</option>
            <option value="farenheit" >Farenheit</option>
            <option value="kelvin" >Kelvin</option>
        </select>
        <br>
        <input type="submit" value="Calcular">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temp = (float) $_POST["temp"];
        $temp1 = (string) $_POST["temp1"];
        $temp2 = (string) $_POST["temp2"];
        echo conversor($temp, $temp1, $temp2);

        $resultado = conversor($temp, $temp1, $temp2);
        if (is_numeric($resultado)) {
            echo "Resultado: $resultado $temp2";
        } else {
            echo $resultado;
        }
    }
    ?>
    
</body>
</html>