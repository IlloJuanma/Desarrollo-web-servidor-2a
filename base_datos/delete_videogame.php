<?php
require 'database_conection.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $titulo = $_POST["titulo"];

    $sql = $conexion->prepare("DELETE FROM videojuegos WHERE titulo = ?");
    $sql -> bind_param("s", $titulo);
    $sql->execute();
    $sql -> close();

    header ('location: table_videogames.php');
}

?>