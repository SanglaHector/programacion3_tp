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
        try{
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

        }catch(Exception $e)
        {
            echo("ocurrio una exepcion");
            return "ocurrio una exepcion";
        }
    }

    public function buscarPorNombre($countries,$nombres)
    {
        try{
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
        }catch(Exception $e)
        {
            echo("ocurrio una exepcion");
            return "ocurrio una exepcion";
        }
    }



    public function buscarPorCodigos($countries,$codigos)
    {   
        try{
            $stg = "";
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
        }catch(Exception $e)
        {
            echo("ocurrio una exepcion");
            return "ocurrio una exepcion";
        }
    }


    public function buscarPorMoneda($countries,$moneda)
    {
        try{   
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
        }catch(Exception $e)
        {
            echo("ocurrio una exepcion");
            return "ocurrio una exepcion";
        }
    }
    public function buscarPorLenguaje($countries,$lenguaje)
    {
        try{
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
        }catch(Exception $e)
        {
            echo("ocurrio una exepcion");
            return "ocurrio una exepcion";
        }
    }
    public function buscarPorCapital($countries,$capital)
    {
        try{
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
        }catch(Exception $e)
        {
            echo("ocurrio una exepcion");
            return "ocurrio una exepcion";
        }
    }
    public function buscarPorCodigoDeLlamada($countries,$codigos)
    {
        try{
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
        }catch(Exception $e)
        {
            echo("ocurrio una exepcion");
            return "ocurrio una exepcion";
        }
    }
    public function buscarPorContinente($countries,$continentes)
    {
        try{
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
        }catch(Exception $e)
        {
            echo("ocurrio una exepcion");
            return "ocurrio una exepcion";
        }
    }
    private static function armoPaises($arr)
    {   
        $paises = array();
        $objetos =json_encode($arr); 
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
            $paises = "No hay paises";
        }
        return $paises;
    }
}