<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/hola_style.css">
    <title>Hola Mundo</title>
</head>
<body>
    <h1>--- Variables ---</h1>
    <?php
    echo "<h2>Hola</h2>";
    $entero = 1;
    $decimal = 1.5;
    $exponente = 3e5; // Esto es un numero float
    
    echo $exponente;
    echo "<br>";
    var_dump($exponente); // Para saber el valor de la variable
    echo "<br><br>";

    $string1 = "Hola";
    $string2 = 'Hola';
    // Diferencias entre comillas cuando hagamos concatenaciones internas

    echo "Texto: $string1";
    echo "<br>";
    echo 'Texto: $string1'; // Sale $string1 literal
    echo "<br>";
    echo $string1 . " " . $string2; // Para concatenar usamos " . "
    echo "<br>";

    echo "<h2>$string1</h2>"; // Podemos usar las etiquetas HTML dentro de un echo
    echo "<br>";
    echo "<h2>" . $string1 . "</h2>";
    echo "<br>";
    ?>
    <h1>--- Constantes ---</h1>
    <?php
    define ("EDAD", 25); // No hace falta el $
    echo EDAD;
    echo "<br>";
    echo "---- FECHAS -----";
    echo "<br>";
    $fecha_original = "2023-09-20";
    echo "fecha antes del cambio => " . $fecha_original;
    echo "<br>";
    $nueva_fecha = date("d/m/Y", strtotime($fecha_original)); // Una funcion

    echo "fecha despues del cambio =>" . ($nueva_fecha); // Entre parentesis porque es una funcion
    echo "<br>";
    echo "--------";
    echo "<br>";

    $dia = date("d"); // Hay muchas más funciones, mirar documentación
    if ($dia <= 15) {
        echo "EStamos a principios de mes";
    }else{
        echo "Estamos a finales de mes";
    }
    echo "<br>";

    $hora = date ("H");
    if ($hora < "12") {
        echo "Buenos dias";
    }else if($hora < "20"){
        echo "Buenas tardes";
    }else{
        echo "Buenas noches";
    }
    echo "<br>";   
    ?>
    <h1>--- Numero aleatorio ---</h1>
    <?php
    $num_ale = rand(1,150);

    if ($num_ale <10) {
        echo "El numero " . $num_ale . " tiene 1 digito";
    }else if($num_ale < 100){
        echo "El numero " . $num_ale . " tiene 2 digitos";
    }else{
        echo "El numero " . $num_ale . " tiene 3 digitos";
    }
    echo "<br>";
    ?>
    <h1>--- Switch ---</h1>
    <?php
    $numero = rand(1,3);
    switch ($numero) {
        case 1:
            echo "$numero es igual a 1";
            break;   
        case 2:
            echo "$numero es igual a 2";
            break;
        default:  
            echo "$numero es igual a 3";
            break;
    }
    echo "<br>";
    echo "<br>";
    $date2 = date ("l");
    if ($date2 == "Monday") {
        $dia_espa = "Lunes";
    }elseif($date2 == "Tuesday"){
        $diaEsp = "Martes";
    }elseif($date2 == "Wednesday"){
        $diaEsp = "Miercoles";
    }elseif($date2 == "Thursday"){
        $diaEsp = "Jueves";
    }elseif($date2 == "Friday"){
        $diaEsp = "Viernes";
    }elseif($date2 == "Saturday"){
        $diaEsp = "Sabado";
    }else{
        $diaEsp = "Domingo";
    }

    switch ($dia_espa) {
        case "Lunes":
        case "Miercoles":
        case "Viernes":
            echo "Hoy $dia_espa hay clase de Desarrollo Web Servidor";
            break;
        default:
            echo "Hoy $dia_espa no hay clase de Desarrollo Web Servidor";
            break;
    }
    ?>

    <h1>--- Algunos ejercicios ---</h1>
    <h3>Genera un numero aleatorio del 1 al 10 y di si es par o no</h3>
    <?php
    $numero_ale2 = rand(1,10);
    if ($numero_ale2%2 == 0) {
        echo "El numero $numero_ale2 es par";
    }else{
        echo "El numero $numero_ale2 es impar";
    }
    echo "<br>";
    ?>
    <h3>Genera un numero aleatorio del -10 al 10 y muestra si es positivo, negativo o cero</h3>
    <?php
    $numero_ale3 = rand(-10,10);
    if ($numero_ale3 < 0) {
        echo "El numero $numero_ale3 es negativo";
    }else if ($numero_ale3 >0){
        echo "El numero $numero_ale3 es positivo";
    }else{
        echo "El numero $numero_ale3 es cero";
    }
    echo "<br>";  
    ?>
    <h3>Muestra la zona horaria en la que nos encontramos</h3>
    <?php
    $zonaH = date ("e");
    echo $zonaH;
    echo "<br>";
    ?>
    <h3>--------------------</h3>
    <h2>Otra forma de transformar (cambiar idioma en este caso)</h2>
    <?php
    $dia3 = date ("N");
    $dia3_espa = match ($dia3) {
        "1" => "Lunes",
        "2" => "Martes",
        "3" => "Miercoles",
        "4" => "Jueves",
        "5" => "Viernes",
        "6" => "Sabado",
        "7" => "Domingo",
    };
    echo "<br>";
    echo $dia3_espa;
    echo "<br>";
    ?>
</body>
</html>