<?php
    session_start();
    //Inicia sesion o recupera la sesion que ya exista (ambas)
    session_destroy();
    header("location: iniciar_sesion.php");


?>