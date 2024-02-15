<?php

require_once "config.php";
require_once "House.php";
require_once "Room.php";
$house1 = new House();

$room1 = new Room(5, 5, 5);
$room2 = new Room(4, 4, 4);
$room3 = new Room(2, 2, 1);

$house1->addRoom($room1);
$house1->addRoom($room2);
$house2->addRoom($room3);
$house3->addRoom($room2);

?>

