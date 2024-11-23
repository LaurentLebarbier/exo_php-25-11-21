<?php

class Ennemi
{
    public static $nombre = 0;

    public function __construct()
    {
        self::$nombre++;
    }
    public function generate()
    {
    }
}

$ennemi1 =  new Ennemi();
echo Ennemi::$nombre;

$ennemi2 =  new Ennemi();
echo Ennemi::$nombre;
