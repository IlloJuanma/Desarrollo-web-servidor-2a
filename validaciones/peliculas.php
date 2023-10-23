<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
    <?php require '../funciones/muchas_funciones.php' ?>
    <?php require '../funciones/base_datos_peliculas.php' ?>  
</head>
<body>
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $temp_id = depurar($_POST["id_pelicula"]);
        $temp_titulo = depurar($_POST["titulo"]);
        $temp_fecha = depurar($_POST["fecha_estreno"]);
        $temp_edad = depurar($_POST["edad"]);

        #Validar id
        if(!strlen($temp_id) > 0){
            $err_id = "El id es obligatorio";
        }else{
            if(filter_var($temp_id, FILTER_VALIDATE_INT) === FALSE){
                $err_id = "El id debe ser un número";
            }else{
                $idPeliculas=$temp_id;
        }
    }

        #Validacion titulo
        if(!strlen($temp_titulo) > 0){
            $err_titulo = "El titulo es obligatorio";
        }else{
            $titulo = $temp_titulo;
        }

        # Validacion fecha
        if(strlen($temp_fecha) == 0){
            $err_fecha = "La fecha de estreno es obligatoria";
        }else{
            list($anyo, $mes, $dia) = explode('-', $temp_fecha);
            if($anyo < 1895){
                $err_fecha = "El año debe ser mayor a 1895";
            }else{
                $fecha = $temp_fecha;
            }
        }

        echo $temp_edad;
        #Validar edad
        if(strlen($temp_edad) == 0){
            $err_edad = "La edad recomendada es obligatoria";
        }else{
            if($temp_edad != 0 && $temp_edad != 3 && $temp_edad != 7 
            && $temp_edad != 12 && $temp_edad != 16 && $temp_edad != 18){
                $err_edad = "La edad deber ser una opcion mostrada";
            }else{
                $edad = $temp_edad;
            }
        }
}

    ?>  
    <form action="" method="POST">
        <fieldset>
            <label>ID Pelicula</label>
            <input type="number" name="id_pelicula">
            <?php if(isset($err_id)) echo $err_id ?>
            <br><br>
            <label>Titulo</label>
            <input type="text" name="titulo">
            <?php if(isset($err_titulo)) echo $err_titulo ?>
            <br><br>
            <label>Fecha de estreno</label>
            <input type="date" name="fecha_estreno">
            <?php if(isset($err_fecha)) echo $err_fecha ?>
            <br><br>
            <label>Edad recomendada</label>
            <select name="edad">
                <option disable selected hidden>-- Edad Recomendada --</option>
                <option value="0">0</option>
                <option value="3">3</option>
                <option value="7">7</option>
                <option value="12">12</option>
                <option value="16">16</option>
                <option value="18">18</option>
            </select>
            <?php if(isset($err_edad)) echo $err_edad ?>
            <br><br>
            <input type="submit" value="Validar">
        </fieldset>
    </form>
    <?php
    if(isset($idPeliculas) && isset($titulo) && isset($fecha) && isset($edad)){
        
        echo "<h3>ID: $idPeliculas</h3>"; 
        echo "<h3>Titulo: $titulo</h3>"; 
        echo "<h3>Fecha: $fecha</h3>"; 
        echo "<h3>Edad Recomendada: $edad</h3>";

        $sql = "INSERT INTO peliculas (id_pelicula, titulo, fecha_estreno, 
                                    edad_recomendada)
            VALUES ('$idPeliculas', '$titulo','$fecha','$edad')";

        $conexion -> query($sql); //Ejecuta la sentencia y manda lo de arriba
    }

    ?>
    
</body>
</html>