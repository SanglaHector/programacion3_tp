<?php
require_once __DIR__. '\..\..\composerTest\vendor\autoload.php';
require_once __DIR__. '\buscarPaises.php';
require_once __DIR__. '\pais.php';
use NNV\RestCountries;
class Buscador implements buscarPaises
{
    public $restCountries;

    public function __construct()
    {
        $this->restCountries = new RestCountries();
    }

    public function buscarTodos($countries)
    {
        $stg = "";
        $paises = Buscador::armoPaises($countries->all());
        if(is_object($paises) || is_array($paises))
        {
            foreach($paises as $pais)
            {

                $stg. pais::Mostrar($pais);
            }
        }else{
            $stg= "No se encontraron resultados";
        }
        return $stg;
    }

    public function buscarPorNombre($countries,$nombres)
    {
        $stg = "";
        $paises = Buscador::armoPaises($countries->byName($nombres));
        if(is_object($paises) || is_array($paises))
        {
            foreach($paises as $pais)
            {

                $stg. pais::Mostrar($pais);
            }
        }else{
            $stg= "No se encontraron resultados";
        }
        return $stg;
    }



    public function buscarPorCodigos($countries,$codigos)
    {   $stg = "";
        $paises = Buscador::armoPaises($countries->byCodes($codigos));
        if(is_object($paises) || is_array($paises))
        {
            foreach($paises as $pais)
            {

                $stg. pais::Mostrar($pais);
            }
        }else{
            $stg= "No se encontraron resultados";
        }
        return $stg;
    }


    public function buscarPorMoneda($countries,$moneda)
    {
        $stg = "";
        $paises = Buscador::armoPaises($countries->byCurrency($moneda));
        if(is_object($paises) || is_array($paises))
        {
            foreach($paises as $pais)
            {

                $stg. pais::Mostrar($pais);
            }
        }else{
            $stg= "No se encontraron resultados";
        }
        return $stg;
    }
    public function buscarPorLenguaje($countries,$lenguaje)
    {
        $stg = "";
        $paises = Buscador::armoPaises($countries->byLanguage($lenguaje));
        if(is_object($paises) || is_array($paises))
        {
            foreach($paises as $pais)
            {

                $stg. pais::Mostrar($pais);
            }
        }else{
            $stg= "No se encontraron resultados";
        }
        return $stg;
    }
    public function buscarPorCapital($countries,$capital)
    {
        $stg = "";
        $paises = Buscador::armoPaises($countries->byCapitalCity($capital));
        if(is_object($paises) || is_array($paises))
        {
            foreach($paises as $pais)
            {

                $stg. pais::Mostrar($pais);
            }
        }else{
            $stg= "No se encontraron resultados";
        }
        return $stg;
    }
    public function buscarPorCodigoDeLlamada($countries,$codigos)
    {
        $stg = "";
        $paises = Buscador::armoPaises($countries->byCallingCode($codigos));
        if(is_object($paises) || is_array($paises))
        {
            foreach($paises as $pais)
            {

                $stg. pais::Mostrar($pais);
            }
        }else{
            $stg= "No se encontraron resultados";
        }
        return $stg;
    }
    public function buscarPorContinente($countries,$continentes)
    {
        $stg = "";
        $paises = Buscador::armoPaises($countries->byRegion($continentes));
        if(is_object($paises) || is_array($paises))
        {
            foreach($paises as $pais)
            {

                $stg. pais::Mostrar($pais);
            }
        }else{
            $stg= "No se encontraron resultados";
        }
        return $stg;
    }
    private static function armoPaises($arr)
    {   
        $paises = array();
        $objetos =json_encode($arr); // me imprime con enconde, con decode no me funciona.
        //$objetos = json_decode($arr);
        $objetos = json_decode($objetos);
        if(is_object($objetos) || is_array($objetos))
        {
            foreach($objetos as $info)
            {
                $pais = new Pais(
                    $info->name,
                    $info->capital,
                    $info->region,
                    $info->subregion,
                    $info->population,
                    $info->demonym,
                    $info->numericCode,
                    $info->borders,
                    $info->nativeName,
                    $info->languages,
                    $info->regionalBlocs,
                    $info->flag);
                array_push($paises,$pais);
            }
        }else
        {
            echo("no se cargo objetos");
            $paises = "No hay paises";
        }
        return $paises;
    }
}