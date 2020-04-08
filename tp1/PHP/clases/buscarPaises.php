<?php
interface buscarPaises{
    function buscarTodos($countries);
    function buscarPorNombre($countries,$datos);
    function buscarPorCodigos($countries,$datos);
    function buscarPorMoneda($countries,$datos);
    function buscarPorLenguaje($countries,$datos);
    function buscarPorCapital($countries,$datos);
    function buscarPorCodigoDeLlamada($countries,$datos);
    function buscarPorContinente($countries,$datos);
}