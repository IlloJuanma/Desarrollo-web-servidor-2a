<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba Peliculas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php require 'pelicula.php' ?>
</head>

<body>
    <table class="table table-striped table-hover table-dark caption-top">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Fecha</th>
                <th>Edad</th>
            </tr>
        </thead>
        <tbody>
            <?php
    $pelicula1 = new Pelicula(1, "Spiderman", "2020-01-01", "7");
    $pelicula2 = new Pelicula(2, "Die Hard", "2020-01-01", "16");
    $pelicula3 = new Pelicula(3, "BraveHeart", "2020-01-01", "16");
    //Creamos las peliculas
    
    //Creamos array y recorremos con un for
    $peliculasArray=[$pelicula1, $pelicula2, $pelicula3];
    foreach($peliculasArray as $pelicula){
        echo "<tr>";
        //Accedemos como en java "pelicula.titulo
        echo "<td>" . $pelicula -> id_pelicula . "</td>";
        echo "<td>" . $pelicula -> titulo . "</td>";
        echo "<td>" . $pelicula -> fecha_estreno . "</td>";
        echo "<td>" . $pelicula -> edad_recomendada . "</td>";
        echo "</tr>";
      };
      ?>
        </tbody>
    </table>



</body>

</html>