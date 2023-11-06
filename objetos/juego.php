<?php
class Juego
{
    public string $nombre;
    public string $plataforma;
    public string $genero;
    public int $mediacritic;

    function __construct($nombre, $plataforma, $genero, $mediacritic)
    {
        $this->nombre = $nombre;
        $this->plataforma = $plataforma;
        $this->genero = $genero;
        $this->mediacritic = $mediacritic;
    }
}
?>