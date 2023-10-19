<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 2</title>
</head>
<body>
    <?php
    $temperaturas = [
        ["Málaga", 20, 27],
        ["Sevilla", 17,36],
        ["Cádiz",19,31],
        ["Jaén",19,33],
        ["Granada",12,35],
        ["Almería",20,27],
        ["Huelva",16,33]
    ];
    ?>
    <table>
        <caption>Temperaturas Andalucía</caption>
        <thead>
            <tr>
                <th>Ciudades</th>
                <th>Mínima</th>
                <th>Máxima</th>
                <th>Media</th>
            </tr>
        </thead>
        <tbody>
            <?php
            /*for($i=0; $i<count($temperaturas); $i++){
                array.push($temperaturas) = $temperaturas[$i][1] + $temperaturas[$i][2]/2;
            }
            */
            $nombre = array_column($temperaturas,0);
            $minima = array_column($temperaturas,1);
            $maxima = array_column($temperaturas,2);
            array_multisort($minima, SORT_ASC, $nombre, SORT_ASC, $maxima, SORT_ASC, $temperaturas);
            foreach($temperaturas as $temperatura){
                list($nombre, $maxima, $minima) = $temperatura;
                $totalMax += $maxima;
                $totalMin += $minima;
                $media= ($maxima + $minima)/2;
                $mediaMaximaT = $totalMax/7;
                $mediaMinimaT = $totalMin/7;
                echo "<tr>";
                echo "<td>$nombre</td>";
                echo "<td>$maxima</td>";
                echo "<td>$minima</td>";  
                echo "<td>$media</td>";                         
                echo "</tr>";
            };                   
            ?>
        </tbody>
    </table>
    <?php
    echo "<h2>Temperatura Minima Media: $mediaMaximaT</h2>";
    echo "<h2>Temperatura Maxima Media: $mediaMinimaT</h2>";

    ?>
    
</body>
</html>