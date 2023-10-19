<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario: Cuál es mayor</title>
    <?php require '../funciones/suma3.php';
    ?>
</head>
<body>
    <h1>El mayor o igual de 3 números</h1>
    <form action="" method="POST">
        <label>Primer numero</label>
        <br>
        <input type="number" name="n1">
        <br>
        <label>Número 2</label>
        <br>
        <input type="number" name="n2">
        <br>
        <label>Número 3</label>
        <br>
        <input type="number" name="n3">
        <br>
        <input type="submit" value="Calcular">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
        $n1=(int) $_POST["n1"];
        $n2=(int) $_POST["n2"];
        $n3=(int) $_POST["n3"];
        echo suma3($n1,$n2,$n3);
        }
        ?>
    
</body>
</html>