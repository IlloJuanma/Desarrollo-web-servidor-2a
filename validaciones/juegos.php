<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juegos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php require '../funciones/muchas_funciones.php' ?>
    <?php require '../funciones/base_datos_juegos.php' ?>
</head>

<body>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $temp_nombre = depurar($_POST["nombre"]);
            /* Plataforma es un select */
            if (isset($_POST["plataforma"])) {
                $temp_plataforma = depurar($_POST["plataforma"]);
            } else {
                $temp_plataforma = "";
            }
            /* Genero es un select */
            if (isset($_POST["genero"])) {
                $temp_genero = depurar($_POST["genero"]);
            } else {
                $temp_genero = "";
            }
            /* Mediacritic es un select */
            if (isset($_POST["mediacritic"])) {
                $temp_mediacritic = depurar($_POST["mediacritic"]);
            } else {
                $temp_mediacritic = "";
            }


            /* Validar nombre */
            if (!strlen($temp_nombre) > 0) {
                $err_nombre = "El nombre es obligatorio";
            } else {
                $nombre = $temp_nombre;
            }
            echo $nombre;

            /**
             * Validar plataforma
             * Vamos a realizarlo con un array
             */
            $plataformas = ["ps", "xbox", "nintendo", "pc"];
            if (!in_array($temp_plataforma, $plataformas)) {
                $err_plataforma = "La plataforma debe ser una opcion mostrada";
            } else {
                $plataforma = $temp_plataforma;
            }
            echo $temp_plataforma;

            /**
             * Validar Genero
             * Vamos a realizarlo con un array
             */
            $generos = ["accion", "deporte", "rpg", "survival", "terror", "mmo"];
            if (!in_array($temp_genero, $generos)) {
                $err_genero = "El genero debe ser una opcion mostrada";
            } else {
                $genero = $temp_genero;
            }
            echo $temp_genero;

            /**
             * Validar mediacritic
             * Vamos a realizarlo con un array
             */
            $mediacritics = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10"];
            if (!in_array($temp_mediacritic, $mediacritics)) {
                $err_mediacritic = "El mediacritic debe ser una opcion mostrada";
            } else {
                $mediacritic = $temp_mediacritic;
            }
            echo $temp_mediacritic;

        }

        ?>
        <h2>Inserta Juego</h2>
        <div class="col-9">
            <form action="" method="POST">
                <div class="mb-3">
                    <label class="form-label">Nombre</label>
                    <input class="form-control" type="text" name="nombre">
                </div>
                <?php if (isset($err_nombre))
                    echo $err_nombre ?>
                    <div class="mb-3">
                        <label class="form-label">Plataforma</label>
                        <select name="plataforma" class="form-select">
                            <option disable selected hidden>-- Plataforma --</option>
                            <option value="ps">PlayStation</option>
                            <option value="xbox">Xbox</option>
                            <option value="nintendo">Nintendo</option>
                            <option value="pc">Pc</option>
                        </select>
                    </div>
                <?php if (isset($err_plataforma))
                    echo $err_plataforma ?>
                    <div class="mb-3">
                        <label class="form-label">Género</label>
                        <select name="genero" class="form-select">
                            <option disable selected hidden>-- Género --</option>
                            <option value="accion">Accion</option>
                            <option value="deporte">Deportes</option>
                            <option value="rpg">RPG</option>
                            <option value="survival">Survival</option>
                            <option value="terror">Terror</option>
                            <option value="mmo">MMO</option>
                        </select>
                    </div>
                <?php if (isset($err_genero))
                    echo $err_genero ?>
                    <div class="mb-3">
                        <label class="form-label">Mediacritic</label>
                        <select name="mediacritic" class="form-select">
                            <option disable selected hidden>-- MediaCritic --</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </div>
                <?php if (isset($err_mediacritic))
                    echo $err_mediacritic ?>
                    <button class="btn btn-primary my-3" type="submit">Enviar</button>
                </form>
            </div>
            <?php
                if (isset($nombre) && isset($plataforma) && isset($genero) && isset($mediacritic)) {

                    echo "<h3>Nombre: $nombre</h3>";
                    echo "<h3>Plataforma: $plataforma</h3>";
                    echo "<h3>Género: $genero</h3>";
                    echo "<h3>Mediacritic: $mediacritic</h3>";
                    echo "<h2>Exito!</h2>";

                    $sql = "INSERT INTO juegos (nombre, plataforma, genero, mediacritic)
                            VALUES ('$nombre', '$plataforma', '$genero', '$mediacritic')";

                    $conexion->query($sql); //Ejecuta la sentencia y manda lo de arriba
                }

                ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
            </script>
</body>

</html>