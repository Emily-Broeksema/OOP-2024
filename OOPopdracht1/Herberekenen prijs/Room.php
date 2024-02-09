<?php

class Room 
{
    public $length;
    public $width;
    public $height;
    public $volume;

    function __construct($length, $width, $height)
    {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }

    function getLength()
    {
        return "Lengte: " . $this->length . "m";
    }

    function getWidth()
    {
        return "Breedte: " . $this->width . "m";
    }

    function getHeight()
    {
        return "Hoogte: " . $this->height . "m";
    }

    function getVolume()
    {
        return "Valume Totaal =" . $this->volume . "m3";
    } // loop maken zodat het bij elkaar op telt

} // ik begrijp het niet


?>