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
        <label>Nombre</label>
        <br>
        <input type="text" name="nombre">
        <br><br>
        <label>Apellidos</label>
        <br>
        <input type="text" name="apellidos">
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
    //casteo $n = (int) $GET...
    ?>
    <?php
    function potencia (int $base, int $exponente): int{
        $resultado=1;
        if ($exponente <= 0 || ($base == 0 && $exponente == 0)){
            return -1.5;
        }else{
            for($i=1; $i <= $exponente; $i++){
                $resultado *= $base;
            }
        }
        return $resultado;

    }
    ?>
    <h1>Exponente</h1>
    <form action="" method="POST">
        <label>Base</label>
        <br>
        <input type="text" name="base">
        <br><br>
        <label>Exponente</label>
        <br>
        <input type="text" name="exponente">
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $base = (int) $_POST["base"];
        $exponente =(int) $_POST["exponente"];
        echo "<br>";
        echo potencia($base, $exponente);
    }
    ?>

    <?php
    function cualEsMayor(int $n1, int $n2, int $n3): int{
        $auxiliar = $n1;
        if($n2 > $auxiliar){
            $auxiliar = $n2;
        }elseif($n3 > $auxiliar){
            $auxiliar = $n3;
        }else{
            echo "Todos son iguales";
        }
        return $auxiliar;     
    }
    ?>

    <?php
    function suma3(int $num1, int $num2, int $num3) : string{
        if($num1 == $num2 && $num2 == $num3){
            return "Los tres numeros son iguales";
        }else{
            $candidato = $num1;
            if($num2 > $num1){
                $candidato = $num2;
            }
            if($num3 > $candidato){
                $candidato = $num3;
            }
            return "El mayor es $candidato";
        }
    }
    ?>

    <h1> El mayor o igual de 3 numeros</h1>
    <form action="" method="POST">
        <label>Primer numero</label>
        <br>
        <input type="text" name="n1">
        <br>
        <label>Numero 2</label>
        <br>
        <input type="text" name="n2">
        <br>
        <label>Numero 3</label>
        <br>
        <input type="text" name="n3">
        <br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
        $n1=(int) $_POST["n1"];
        $n2=(int) $_POST["n2"];
        $n3=(int) $_POST["n3"];
        echo suma3($n1,$n2,$n3);
        }
        ?>
        <h1>IVA</h1>
        <form action="" method="POST">
        <label>Cantidad</label>
        <br>
        <input type="number" name="cantidad">
        <br>
        <label>Que iva tiene</label>
        <br>
        <select name="iva">
            <option value="GENERAL" selected>GENERAL</option>
            <option value="REDUCIDO">REDUCIDA</option>
            <option value="SUPERREDUCIDO">SUPERREDUCIDO</option>
            <option value="SIN IVA">SIN IVA</option>
        </select>
        <br>
        <input type="submit" value="Calcular">
        <br>

        <?php
        DEFINE ("GENERAL", 21);
        DEFINE ("REDUCIDO", 10);
        DEFINE ("SUPERREDUCIDO", 4);
        DEFINE ("SINIVA", 0);
    
        //Resta el iva al precio
        function precioSinIVA(float | int $precio, string $IVA): float{
            $precioSinIva = match($IVA){
                "GENERAL" => $precio - $precio * (GENERAL/100),
                "REDUCIDO" => $precio -$precio * (REDUCIDO/100),
                "SUPERREDUCIDO" => $precio - $precio * (SUPERREDUCIDO/100),
                "SIN IVA" => $precio
            };
            return $precioSinIva;  
        }
        ?>

        <?php   
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $cantidad= (float) $_POST["cantidad"];
            $iva= $_POST["iva"];
            echo precioSinIVA($cantidad, $iva);
            }
        ?>

</body>

</html>