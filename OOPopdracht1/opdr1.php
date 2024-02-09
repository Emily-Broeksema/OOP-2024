<?php

    class House{
    public $floors;
    public $rooms;
    public $width;
    public $height;
    public $depth;
    public $volume; // Definieer de volume eigenschappublic $price;

    function __construct($floors, $rooms, $price)
    {
        $this->floors = $floors;
        $this->rooms = $rooms;
        $this->price = $price;
    }
    function setVolume($width, $height, $depth) 
    {
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
        $this->volume = $width * $height * $depth; // Correct berekenen van het volume    
    }

    function getHouse()
    {
        return "Dit huis heeft " . $this->floors . " verdiepingen, " . $this->rooms . " kamers en een volume van " . $this->volume . " m3.";
    }

    function getPrice()
    {
        return "De prijs van het huis is: " . $this->price;
    }

} // Voorbeeld van hoe je de objecten kunt gebruiken:$house1 = new House(2, 4, 150000);$house1->setVolume(10, 20, 30); // Stel de afmetingen en het volume inecho $house1->getHouse();

// Creëert voorbeeldobjecten van het type House
$house1 = new House(2, 4, 150000);
$house1->setVolume(2, 25, 2);
$house2 = new House(3, 6, 225000);
$house2->setVolume(25, 2, 3);
$house3 = new House(2, 3, 112500);
$house3->setVolume(18.75, 2, 2);
 
// Gebruik de methoden van het object om informatie te printen
echo $house1->getHouse(); 
echo "<br>";
echo $house1->getPrice(); 
echo "<br>";
echo $house2->getHouse();
echo "<br>";
echo $house2->getPrice();
echo "<br>";
echo $house3->getHouse(); 
echo "<br>";
echo $house3->getPrice();
echo "<br>";
?>

