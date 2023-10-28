<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>
    <h1>Formulario</h1>
    <form action="" method="POST">
        <label>URL</label>
        <br>
        <input type="text" name="nombre" pattern="(https|http):\/\/(www.)?[a-zA-Z]+\.(com|es|net)" 
        title="La URL está mal escrita">
        <br><br>
        <label>DNI</label>
        <br>
        <input type="text" name="apellidos" pattern="[0-9]{8}[a-zA-z]">
        <br><br>
        <!--o button con submit-->
        <input type="submit" value="Enviar">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "<h3>Formulario enviado!</h3>";
        //Mismo nombre que etiqueta "name"
        $nombre = $_POST["nombre"];
        $apellidos = $_POST["apellidos"];
        echo "<h4>$nombre $apellidos</h4>";   
    }
    ?>

</body>

</html>