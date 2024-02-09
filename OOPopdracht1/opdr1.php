 Emily Broeksema

<?php

class House
{

    public $floors;
    public $rooms;
    public $width;
    public $height;
    public $depth;
    public $setVolume;
    public $price;



    function __construct($floors, $rooms, $price)
    {
        $this->floors = $floors;
        $this->rooms = $rooms;
        $this->setVolume;
        $this->price = $price;
    }


    function setVolume( $width, $height, $depth) 
    {
        $this->volume = $this->width * $this->height * $this->depth;
    }


    function getHouse()
    {
        return "Dit huis heeft " . $this->floor . "verdiepingen, " . $this->rooms . " kamers en een volume van " . $this->volume . "m3.";
    }

    function getPrice()
    {
        echo "<br>";
        return "De prijs van het hijs is: " . $price;

    }


    


} 


$house1 = new House( 2, 4, 150000);
$house2 = new House( 3, 6, 225000);
$house3 = new House( 2, 3, 112500);







echo("</br>");
echo "Dit huis heeft" , "&nbsp" .  $floors . "," , "&nbsp" . $rooms . "&nbsp", "kamers en heeft een volume van" , "&nbsp" . $volume .  "&nbsp", "m3" , "&nbsp", "<br>" ,"De prijs van het huis is:" , "&nbsp" . $price . ".";

echo("</br>");
echo "Dit huis heeft" , "&nbsp" .  $floors . "," , "&nbsp" . $rooms . "&nbsp", "kamers en heeft een volume van" , "&nbsp" . $volume .  "&nbsp", "m3" , "&nbsp", "<br>" ,"De prijs van het huis is:" , "&nbsp" . $price . ".";


echo("</br>");
echo "Dit huis heeft" , "&nbsp" .  $floors . "," , "&nbsp" . $rooms . "&nbsp", "kamers en heeft een volume van" , "&nbsp" . $volume .  "&nbsp", "m3" , "&nbsp", "<br>" ,"De prijs van het huis is:" , "&nbsp" . $price . ".";



?>