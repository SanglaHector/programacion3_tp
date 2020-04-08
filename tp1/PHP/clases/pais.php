<?php
class pais{

    public $nombre;
    public $capital;
    public $region;
    public $subRegion;
    public $poblacion;
    public $denominacion;
    public $numeroDeLlamadas;
    public $limitrofes = array();
    public $nombreNativo;
    public $lenguajes = array();
    public $regionalBlocks = array();
    public $bandera;

    
    public function __construct($nombre, $capital, $region, $subRegion, $poblacion, $denominacion, $numeroDeLlamadas, $limitrofes, $nombreNativo, $lenguajes, $regionalBlocks,$bandera)
    {
        $this->nombre = $nombre;
        $this->capital = $capital;
        $this->region = $region;
        $this->subRegion = $subRegion;
        $this->poblacion = $poblacion;
        $this->numeroDeLlamadas = $numeroDeLlamadas;
        $this->denominacion = $denominacion;
    //    $this->limitrofes = $limitrofes;
        $this->nombreNativo = $nombreNativo;
    //    $this->lenguajes = $lenguajes;
    //    $this->regionalBlocks = $regionalBlocks;
    //    $this->bandera = $bandera;
    }
    public static function Mostrar($pais)
    {
        echo ("Nombre: ".$pais->nombre);
        echo "<br>";
        echo ("Capital: ".$pais->capital);
        echo "<br>";
        echo ("Region: ".$pais->region);
        echo "<br>";
        echo ("Subregion: ".$pais->subRegion);
        echo "<br>";
        echo ("Poblacion: ".$pais->poblacion);
        echo "<br>";
        echo ("Denominacion: ".$pais->denominacion);
        echo "<br>";
        echo ("Numero de llamadas: ".$pais->numeroDeLlamadas);
        echo "<br>";
      //  echo ("Limitrofes: ".$pais->limitrofes); //Hace algo para limitrofes
        echo ("Nombre nativo: ".$pais->nombreNativo);
        echo "<br>";
      //  echo ("Lenguajes: ".$pais->lenguajes);//hacer algo para lenguajes
      //  echo ("Regional blocks: ".$pais->regionalBlocks);// me tira erro
      //  echo ("Bandera: ".$pais->bandera);// Se podra?
      echo "<br>";
      echo("-------------------------------------------------------------------");
        echo "<br>";
    }
}