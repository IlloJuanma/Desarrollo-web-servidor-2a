<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ejercicios_array_style.css">
    <title>Ejercicios-Array</title>
</head>

<body>
    <!--Crea un array que contenga los números pares del 1 al 50 y
    muéstralos.
    Investiga si hay algún método en PHP para “barajar” los
    elementos de un array.
    Una vez barajado, muestra los números en orden descendente.
    -->
    <h1>--- Ejercicio 1 ---</h1>
    <h2>Array numeros pares del 1 al 50, baraja y muestra en ord desc</h2>
    <?php
    $lista_pares = array();
    for($i = 1; $i <= 50; $i++){
        if($i % 2 == 0){
            array_push($lista_pares, $i);
        }
    }
    shuffle($lista_pares);
    arsort($lista_pares);
    echo "<hr>";
    echo "<ul>";
    foreach ($lista_pares as $pares) {
        echo "<li>$pares</li>";   
    }
    echo "</ul>";
    echo "<hr>";
    ?>
    <h2>--- Ejercicio 2 ---</h2>
    <h2>Genera 10 numeros ale entre 0 y 100. Array y mostrar de mayor a menor y al revé</h2>
    <?php
    $lista_numeros = array();
    for($i = 0; $i<=10;$i++){
        array_push($lista_numeros,rand(0,100));
    }
    asort($lista_numeros);
    echo "<ul>";
    foreach ($lista_numeros as $numero) {
        echo "<li>$numero</li>";   
    }
    echo "</ul>";
    arsort($lista_numeros);
    echo "<ul>";
    foreach ($lista_numeros as $numero) {
        echo "<li>$numero</li>";   
    }
    echo "</ul>";
    echo "<hr>";
    ?>
    <h1>--- Ejercicio 3 ---</h1>
    <h2>Ordenar por nombre de los paises del array que te doy hermano</h2>
    <?php
    $paises = array( "Italy"=>"Rome", "Luxembourg" =>"Luxembourg" , "Belgium"=>
    "Brussels" , "Denmark"=>"Copenhagen" , "Finland"=>"Helsinki" , "France" =>
    "Paris", "Slovakia" =>"Bratislava" , "Slovenia" =>"Ljubljana" , "Germany" =>
    "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
    "Netherlands" =>"Amsterdam" , "Portugal" =>"Lisbon", "Spain"=>"Madrid",
    "Sweden"=>"Stockholm" , "United Kingdom" =>"London", "Cyprus"=>"Nicosia",
    "Lithuania" =>"Vilnius", "Czech Republic" =>"Prague", "Estonia"=>"Tallin",
    "Hungary"=>"Budapest" , "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" =>
    "Vienna", "Poland"=>"Warsaw") ;

    asort($paises);
    echo "<ul>";
    foreach ($paises as $pais) {
        echo "<li>$pais</li>";   
    }
    echo "</ul>";
    echo "<hr>";
    ?>
    <h1>--- Ejercicio 4 ---</h1>
    <h2>Crear array multi de series: titulo, plataforma y temp.
        Mostrar en tablas, y tabla ordenada por temp (menor a mayor) y otra
        por plataforma</h2>
    <?php
    $series = [
        ["Cyberpunk: Edgrunner", "Netflix", 1],
        ["Juegos de Tronos", "HBO", 8],
        ["From","HBO", 2],
        ["The Office", "Amazon Prime", 9],
        ["Archer","Netflix",14],
    ];
    ?>
    <table class="tabla_series">
        <caption class="tabla_series-caption">Series</caption>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Plataforma</th>
                <th>Temporadas</th>
            </tr>
        </thead>
        <tbody class="tabla_series-body">
            <?php
            foreach($series as $serie){
                list($nombre, $plataforma, $tempo ) = $serie;
                echo "<tr>";
                echo "<td>$nombre</td>";
                echo "<td>$plataforma</td>";
                echo "<td>$tempo</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <hr>
    <table class="tabla_series2">
        <caption class="tabla_series-caption2">Series por Temp</caption>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Plataforma</th>
                <th>Temporadas</th>
            </tr>
        </thead>
        <tbody class="tabla_series-body2">
            <?php
            $nombre = array_column($series, 1);
            $plataforma = array_column($series, 0);
            $temp = array_column($series, 2); 
            array_multisort($temp, SORT_ASC, $plataforma, SORT_ASC, $nombre, SORT_ASC, $series);
            foreach($series as $serie){
                list($nombre, $plataforma, $tempo ) = $serie;
                echo "<tr>";
                echo "<td>$nombre</td>";
                echo "<td>$plataforma</td>";
                echo "<td>$tempo</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <hr>
    <table class="tabla_series3">
        <caption class="tabla_series-caption3">Series por Temp</caption>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Plataforma</th>
                <th>Temporadas</th>
            </tr>
        </thead>
        <tbody class="tabla_series-body3">
            <?php
            $nombre = array_column($series, 2);
            $plataforma = array_column($series, 1);
            $temp = array_column($series, 0); 
            array_multisort($temp, SORT_ASC, $plataforma, SORT_ASC, $nombre, SORT_ASC, $series);
            foreach($series as $serie){
                list($nombre, $plataforma, $tempo ) = $serie;
                echo "<tr>";
                echo "<td>$nombre</td>";
                echo "<td>$plataforma</td>";
                echo "<td>$tempo</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <h1>--- Ejercicio 5 ---</h1>
    <h2>Crear array estudiantes y aleatoriamente asignar notas.
        Mostrar en tabla con suspenso, aprobado, notable o sobre.
        Ordenar por orde alfa (macho alfa)
    </h2>
    <table class="tabla_estudiantes">
        <caption class="tabla_estudiantes-caption">Estudiantes</caption>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Nota</th>
                <th>Calificación</th>
            </tr>
        </thead>
        <tbody class="tabla_estudiantes-body">
            <?php
            /**
             * Funcion que devuelve la nota
             * @params {$pnota}
             */
            function calificacion(int | float $pnota): string{
                $calificacion = match (true) {
                    $pnota >= 0 && $pnota < 5 => "Suspenso",
                    $pnota >= 5 && $pnota < 7 => "Aprobado",
                    $pnota >= 7 && $pnota < 9 => "Notable",
                    $pnota >= 9 && $pnota <= 10 => "Sobresaliente",
                    default => "Error"                   
                };
                return $calificacion;
            }
        $estudiantes = [
            ["Juanma"],
            ["Adrian"],
            ["Nacho"],
            ["Albert"],
            ["Inma"],
            ["Victor"],
        ];
        for ($i = 0; $i<count($estudiantes); $i++){
            $estudiantes[$i][1] = rand(1,10);
        }
        foreach ($estudiantes as $estudiante) {
            list($nombre, $nota) = $estudiante;
            echo "<tr>";
            echo "<td>$nombre</td>";
            echo "<td>$nota</td>";
            /*if($nota <5){
                echo "<td>Suspenso</td>";
            }elseif($nota >=5 && $nota <7){
                echo "<td>Aprobado</td>";
            }elseif($nota >=7 && $nota <10){
                echo "<td>Notable</td>";
            }else{
                echo "<td>Sobresaliente</td>";
            }*/ 
            echo "<td>" . calificacion($nota) . "</td>";    
            echo "</tr>";
        };
    ?>
        </tbody>
    </table>
</body>

</html>