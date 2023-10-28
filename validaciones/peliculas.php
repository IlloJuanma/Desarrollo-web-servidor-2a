<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peliculas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php require '../funciones/muchas_funciones.php'?>
    <?php require '../funciones/base_datos_peliculas.php'?>
</head>

<body>
    <div class="container">

        <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $temp_id = depurar($_POST["id_pelicula"]);
        $temp_titulo = depurar($_POST["titulo"]);
        $temp_fecha = depurar($_POST["fecha_estreno"]);
        if(isset($_POST["edad"])){
            $temp_edad = depurar($_POST["edad"]);
        }else{
            $temp_edad = "";
        }

        # Validar id
        if(!strlen($temp_id) > 0){
            $err_id = "El id es obligatorio";
        }else{
            if(filter_var($temp_id, FILTER_VALIDATE_INT) === FALSE){
                //se pone === porque 0 es == a FALSE !ojo!
                $err_id = "El id debe ser un número";
            }else{
                if(strlen($temp_id) > 8){
                    $err_id = "El id no puede tener más de 8 dígitos";
                }else{
                    $temp_id =(int) $temp_id;
                    $idPeliculas=$temp_id;
                }
        }
    }

        # Validacion titulo
        if(!strlen($temp_titulo) > 0){
            $err_titulo = "El titulo es obligatorio";
        }else{
            if(strlen($temp_titulo) > 80){
                $err_titulo ="El título debe tener menos de 80 caracteres";
            }else{
                $titulo = $temp_titulo;
            }
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

        # Validar edad
        if(strlen($temp_edad) == 0){
            $err_edad = "La edad recomendada es obligatoria";
        }else{
            /* o hacer una array
            $edades = ["0", "3"...];
            if(!in_array($temp_edad, $edades)){
                $err_edad ="...";
            }else{
                ...
            }
            */
            if($temp_edad != 0 && $temp_edad != 3 && $temp_edad != 7 
            && $temp_edad != 12 && $temp_edad != 16 && $temp_edad != 18){
                $err_edad = "La edad deber ser una opcion mostrada";
            }else{
                $edad = $temp_edad;
            }
        }
}

    ?>
        <h1>Insertar película</h1>
        <div class="col-9">
            <form action="" method="POST">
                <div class="mb-3">
                    <label class="form-label">ID Pelicula</label>
                    <input class="form-control" type="number" name="id_pelicula">
                </div>
                <?php if(isset($err_id)) echo $err_id ?>

                <div class="mb-3">
                    <label class="form-label">Titulo</label>
                    <input class="form-control" type="text" name="titulo">
                </div>
                <?php if(isset($err_titulo)) echo $err_titulo ?>

                <div class="mb-3">
                    <label class="form-label">Fecha de estreno</label>
                    <input class="form-control" type="date" name="fecha_estreno">
                </div>
                <?php if(isset($err_fecha)) echo $err_fecha ?>
                <div class="mb-3">
                    <label class="form-label">Edad recomendada</label>
                    <select class="form-select" name="edad">
                        <option disable selected hidden>-- Edad Recomendada --</option>
                        <option value="0">Todos los públicos</option>
                        <option value="3">Mayores de 3 años</option>
                        <option value="7">Mayores de 7 años</option>
                        <option value="12">Mayores de 12 años</option>
                        <option value="16">Mayores de 16 años</option>
                        <option value="18">Mayores de 18 años</option>
                    </select>
                </div>
                <?php if(isset($err_edad)) echo $err_edad ?>

                <button class="btn btn-primary my-3" type="submit">Enviar
            </form>
        </div>
        <?php
    if(isset($idPeliculas) && isset($titulo) && isset($fecha) && isset($edad)){
        
        echo "<h3>ID: $idPeliculas</h3>"; 
        echo "<h3>Titulo: $titulo</h3>"; 
        echo "<h3>Fecha: $fecha</h3>"; 
        echo "<h3>Edad Recomendada: $edad</h3>";
        echo "<h2>Exito!</h2>";

        $sql = "INSERT INTO peliculas (id_pelicula, titulo, fecha_estreno, 
                                    edad_recomendada)
            VALUES ($idPeliculas, '$titulo','$fecha','$edad')";

        $conexion -> query($sql); //Ejecuta la sentencia y manda lo de arriba
    }

    ?>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>


</html>