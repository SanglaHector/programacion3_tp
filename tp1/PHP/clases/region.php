<?php
class region 
{
    public $nombre;
    public $paises = array();

    public function __construct($nombre, $paises)
    {
        $this->nombre = $nombre;
        $this->paises = $paises;
    }
}