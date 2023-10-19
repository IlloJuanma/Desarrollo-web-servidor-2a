<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular IRPF</title>
    <?php require '../funciones/calcular_IRPF.php'
    ?>
</head>
<body>
    <h1>Calcular tu IRPF</h1>
    <form action="" method="POST">
        <label>Salario</label>
        <input type="text" name="salario">
        <br><br>
        <input type="submit" value="Calcular">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $salario = (int) $_POST["salario"];
        echo calcularIRPF($salario);
    }
    ?>   
</body>
</html>