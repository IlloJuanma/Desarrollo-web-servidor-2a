<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    /*echo "<h1>Hola</h1>";
    $entero = 1;
    $decimal = 1.5;
    $exponente = 3e5; # esto es un numero float

    //echo $exponente;
    /*
    var_dump($exponente); # para saber el valor de la variable

    echo "<br><br>";

    $string1 = "Hola";
    $string2 = 'Hola';
    //la diferencia es cuando hagamos concatenaciones internas

    echo "Texto: $string1";
    echo "<br>";
    echo 'Texto: $string1';
    echo "<br>";
    echo $string1 . " " . $string2;
    echo "<br>";

    echo "<h1>$string1</h1>";
    echo "<h1>" . $string1 . "</h1>";
    */

    /*$array1 = [1,2,3];
    $array2 = ["aa","b","c"];
    var_dump($array1);
    echo "<br>";
    var_dump($array2);*/

    /*$b = true;
    $c = false;

    var_dump($b);
    */

    /*Constantes
    define("EDAD", 25);
    echo EDAD;
    */

    /*---------------------------------------
    $fechaOriginal = "2023-09-20";
    $nuevaFecha = date("d/m/Y", strtotime($fechaOriginal));

    echo ($nuevaFecha);

    //obtendrás en $newDate 08/03/2017
    //------------------------------------------*/

    /*$dia = date("d");

    if($dia <= 15){
        echo "Estamos a principios de mes";
    }else{
        echo "Estamos a finales de mes";
    }
    
    echo "<br>","<br>";

    $hora = date("H");
    if ($hora < "12"){
        echo "Buenos dias";
    }else if ($hora < "20"){
        echo "buenas tardes";
    }else{
        echo "Buenas noches";
    }
    echo "<br>","<br>";

    $numeroAle = rand(1,150);

    if($numeroAle <10){
        echo "El numero " . $numeroAle . " tiene 1 digito";
    }else if($numeroAle <100){
        echo "El numero " . $numeroAle . " tiene 2 digitos";
    }else{
        echo "El numero " . $numeroAle . " tiene 3 digitos";
    }

    echo "<br>","<br>";
    $n = rand(1,3);
    switch($n){
        case 1:
            echo "$n es igual a 1";
            break;
        case 2:
            echo "$n es igual a 2";
            break;
        default:
            echo "$n es igual a 3";
            break;
    }
    echo "<br>","<br>";
    $dia2 = date("l");
    if($dia2 == "Monday"){          
        $diaEsp = "Lunes";
    }elseif($dia2 == "Wednesday"){
        $diaEsp = "Miercoles";
    }elseif($dia2 == "Friday"){
        $diaEsp = "Viernes";
    }elseif($dia2 == "Tuesday"){
        $diaEsp = "Martes";
    }elseif($dia2 == "Thursday"){
        $diaEsp = "Jueves";
    }elseif($dia2 == "Sunday"){
        $diaEsp = "Sabado";
    }else{
        $diaEsp = "Domingo";
    }          
    switch($diaEsp){
        case "Lunes":
        case "Miercoles":
        case "Viernes":          
            echo "Hoy $diaEsp hay clase de Desarrollo Web Servidor";
            break;
        default:
            echo "Hoy $diaEsp hay clases de Desarrollo Web Servidor";
            break;
    }
    */

    //Genera un numero aleatorio del 1 al 10 y di si es par o no
    echo "<h2>Ejercicio1</h2>";

    $numAle = rand(1,10);
    if($numAle%2 == 0){
        echo "El numero $numAle es par";
    }else{
        echo "El numero $numAle es impar";
    }
    echo "<br>";
    
    //Genera un numero aletario del -10 al 10 y muestra si es positivo
    //negativo o cero
    echo "<h2>Ejercicio2</h2>";

    $numAle1 = rand(-10,10);
    if($numAle1 <0){
        echo "El numero $numAle1 es negativo";
    }elseif($numAle1 >0){
        echo "El numero $numAle1 es positivo";
    }else{
        echo "El numero $numAle1 es cero";
    }
    echo "<br>";

    //Muestra en español el dia y mes actual
    echo "<h2>Ejercicio3</h2>";

    $dia = date ("j");
    $mes = date ("F");
    $mesEspa ="";
    switch($mes){
        case "January":
            $mesEspa = "Enero";
            break;
        case "February":
            $mesEspa = "Febrero";
            break;
        case "March":
            $mesEspa = "Marzo";
            break;
        case "April":
            $mesEspa = "Abril";
            break;
        case "May":
            $mesEspa = "Mayo";
            break;
        case "June":
            $mesEspa = "Mayo";
            break;
        case "July":
            $mesEspa = "julio";
            break;
        case "August":
            $mesEspa = "Agosto";
            break;
        case "September":
            $mesEspa = "Septiembre";
            break;
        case "October":
            $mesEspa = "Octubre";
            break;
        case "November":
            $mesEspa = "Noviembre";
            break;
        case "December":
            $mesEspa = "Diciembre";
            break;
    }
    echo "$dia de $mesEspa"; 
    echo "<br>";

    //Muestra la zona horario en la que nos encontramos
    echo "<h2>Ejercicio4</h2>";

    $zonaH = date ("e");
    echo "$zonaH";
    echo "<br>";

    /*
    $d = date ("l");
    $de = match($d){
        "Monday" => "Lunes",
                Se separan con comas
        "Wednesday" => "Miercoles",
    };
    se cierra con punto y coma
    echo $de;
    */

    $dia3 = date ("N");
    $de = match ($dia3) {
        "1" =>"Lunes" ,
        "2" => "Martes",
        "3" => "Miercoles",
        "4" => "Jueves",
        "5" => "Viernes",
        "6" => "Sabado",
        "7" => "Domingo",
    };
    echo "<br>";
    echo "$de";
    echo "<br>";

    //Bucles
    /*$i = 1;
    while($i < 10){
        echo $i;
        $i++;
    }
    echo "$i";
    echo "<br>";

    /*$i = 1;
    do{
        echo $i."<br>";
        $i++;
    } while ($i <=10);
    echo "$i";
    echo "<br>";*/

    echo "<br>";
    for ($i =1; ; $i++){
        if($i > 10){
            break;
        }
        echo $i;
    }
    echo "<br>";
        for ($i = 1; $i <=50 ; $i++):
            if($i%6!=0){
                if($i %2 == 0 || $i %3 ==0){
                    echo $i."<br>";
        }
    }
    endfor;

    echo "<br>";
    //Ejercicio 3, numeros pares del 1 al 20 en una lista
    echo "<ul>";
    for ($i=1; $i <=20 ;$i++): 
      if ($i%2==0) {
        echo "<li>$i</li>";   
        }
    endfor;
     
    echo "</ul>";
    echo "<br>";
    $suma=0;
    echo "<ul>";
    for ($i=0; $i <=20 ; $i++) {
        if ($i%2==0) {
            $suma = $suma + $i;       
        }            
    }
    echo "<li>$suma</li>";
    echo "</ul>";
    echo"<br>";

    //Numeros primos
    echo "<ul>";
    for ($i=1; $i<=50; $i++):
        $salir=true;
        for ($j=2; $j <= $i-1 ; $j++) { 
            if ($i%$j==0) {
                $salir=false;                               
            }
        }
        if ($salir) {
            echo "<li>$i</li>";     
        }  
    endfor;
    echo "</ul>";
    echo "<h2>Array</h2>";
    echo "<br>";
    $array = array('perro', 'gato', 'avestruz');
    $array_num = count($array);
    for ($i = 0; $i < $array_num; ++$i){
        echo " ".$array[$i]. " ";
    }
    echo "<br>";
    $array1 = array(
        'key1' => 'value1',
        'key2' => 'value2',
        'key3' => 'value3'
    );
    print_r ($array1);
    echo "<br>";

    $array2 = array(
        '76883700' => 'Juanma',
        '76811111' => 'Paco',
        '76822222' => 'Silvia',
        '76833333' => 'Adrian',
        '76844444' => 'Nacho'
    );
    //------------------------------------
    //Esta es la mejor forma de recorrer un array
    ?>
    <table BORDER>
        <tr>
            <td>DNI</td>
            <td>NOMBRE</td>
        </tr>
        <?php  
            foreach ($array2 as $key => $value){
                echo "<tr>";
                echo "<td>$key</td>";
                echo "<td>$value</td>";
                echo "</tr>";
            }
        ?>
    </table>
    <?php
    
    foreach ($array2 as $key => $value) {
        //echo "<p>El dni " . $key . " corresponde a la persona " . $value. "</p>";
        
    }
    
    
    echo "<ul>";
    foreach ($array2 as $nombre) {
        echo "<li>$nombre</li>";
        
    }
    echo "</ul>";
    
    ?>
    <h1>Tabla con sort</h1>
    <table BORDER>
        <tr>
            <td>DNI</td>
            <td>NOMBRE</td>
        </tr>
        <?php
        $auxiliar = $array2;
        sort($auxiliar);      
            foreach ($auxiliar as $key => $value){
                echo "<tr>";
                echo "<td>$key</td>";
                echo "<td>$value</td>";
                echo "</tr>";
            }
        ?>
    </table>
    <br>
    <h1>Tabla con rsort</h1>
    <table BORDER>
        <tr>
            <td>DNI</td>
            <td>NOMBRE</td>
        </tr>
        <?php
        rsort($auxiliar);      
            foreach ($auxiliar as $key => $value){
                echo "<tr>";
                echo "<td>$key</td>";
                echo "<td>$value</td>";
                echo "</tr>";
            }
        ?>
    </table>
    <br>
    <h1>Tabla con Asort</h1>
    <table BORDER>
        <tr>
            <td>DNI</td>
            <td>NOMBRE</td>
        </tr>
        <?php
        asort($array2);      
            foreach ($array2 as $key => $value){
                echo "<tr>";
                echo "<td>$key</td>";
                echo "<td>$value</td>";
                echo "</tr>";
            }
        ?>
    </table>
    <br>
    <h1>Tabla con Arsort</h1>
    <table BORDER>
        <tr>
            <td>DNI</td>
            <td>NOMBRE</td>
        </tr>
        <br>
        <?php
        arsort($array2);      
            foreach ($array2 as $key => $value){
                echo "<tr>";
                echo "<td>$key</td>";
                echo "<td>$value</td>";
                echo "</tr>";
            }
        ?>
    </table>
    <br>
    <h1>Array Multidimensionales</h1>
    <table BORDER>
        <caption class ="titulo">Videojuegos</caption>
        <thead>
            <tr>
            <th>Nombre</th>
            <th>Consola</th>
            <th>Precio</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $juegos = [
            ["Pacman", "Atari", 60],
            ["Fortnite", "PS4", 0],
            ["Mario Kart", "Super Nintendo", 70],
            ["Street Fighter", "PS4", 50],
            ["Legend of Zelda", "Nintendo 64", 40],
            ["Castlevania", "Nintendo 64", 55],
        ];
        //print_r($juegos);
        $consola = array_column($juegos, 1);
        $nombre = array_column($juegos, 0);
        $precio = array_column($juegos, 2);
        array_multisort($consola, SORT_ASC, $nombre, SORT_ASC, $precio, SORT_ASC, $juegos);

        foreach ($juegos as $juego) {
            list($nombre, $consola, $precio) = $juego;
            echo "<tr>";
            echo "<td>$nombre</td>";
            echo "<td>$consola</td>";
            echo "<td>$precio</td>";
            echo "</tr>";
        };
    ?>    
        </tbody>
    </table>
    <br>
    <table BORDER>
        <caption class ="titulo">Videojuegos</caption>
        <thead>
            <tr>
            <th>Nombre</th>
            <th>Consola</th>
            <th>Precio</th>
            <th>Stock</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $juegos = [
            ["Pacman", "Atari", 60],
            ["Fortnite", "PS4", 0],
            ["Mario Kart", "Super Nintendo", 70],
            ["Street Fighter", "PS4", 50],
            ["Legend of Zelda", "Nintendo 64", 40],
            ["Castlevania", "Nintendo 64", 55],
        ];
        for ($i = 0; $i<count($juegos); $i++){
            $juegos[$i][3] = rand(1,10);
        }
        //print_r($juegos);
        foreach ($juegos as $juego) {
            list($nombre, $consola, $precio, $stock) = $juego;
            echo "<tr>";
            echo "<td>$nombre</td>";
            echo "<td>$consola</td>";
            echo "<td>$precio</td>";
            echo "<td>$stock</td>";
            echo "</tr>";
        };
    ?>    
        </tbody>
    </table>
    <?php
    $lista_pares=array();
    for ($i=0; $i <=50 ; $i++) { 
        if($i%2==0){
            array_push($lista_pares, $i);
        }
       
    }
    shuffle($lista_pares);
    print_r($lista_pares);

    ?>


    <!--
    //------------------------------------
    
    $array2['7558424'] = 'value';
    print_r($array2);

    //unset($array2['key2']); borra la clave
    
    //Los primeros 50 numeros primos
    echo "<ul>";
    $contador=0;
    while($contador < 50){     
            $primo=true;
            for ($j=2; $j <= $i-1 && $primo ; $j++) { 
                if ($i%$j==0) {
                    $primo=false;                               
                }
            }
            if ($primo) {
                echo "<li>$i</li>";
                $contador++;     
            }
            $i++;        
    }   
    echo "</ul>";
    echo "<br>";
-->



</body>

</html>