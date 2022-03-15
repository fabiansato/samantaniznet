<?php

namespace Text;

class Format // el nombre de la clase debe ser el mismo que el archivo sin la extención php
{
    public static function upperText($value){
        return strtoupper($value);
    }

    public static function lowerText($value){
        return strtolower($value);
    }

    public static function mostarText(){
        $valor = "Texto";
        return $valor;
    }
}
