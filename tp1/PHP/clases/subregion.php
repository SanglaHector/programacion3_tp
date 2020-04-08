<?php
class subregion extends region{
    public $nombre;

    public function __construct($nombre, $paises)
    {
        parent::__construct($nombre,$paises);
        $this->nombre = $nombre;
    }
}