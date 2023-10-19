<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Potencia</title>
    <?php require '../funciones/potencia.php';
    ?>
</head>
<body>
    <h1>Formulario de Potencias</h1>
    <form action="" method="POST">
        <label>Base</label>
        <br>
        <input type="number" name="base">
        <br><br>
        <label>Exponente</label>
        <br>
        <input type="number" name="exponente">
        <br><br>
        <input type="submit" value="Calcular">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $base = (int) $_POST["base"];
        $exponente = (int) $_POST["exponente"];
        echo "<br>";
        echo potencia($base, $exponente);
    }
    ?>
</body>
</html>