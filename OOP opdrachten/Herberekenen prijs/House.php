<?php

    include 'Room.php';

    class House
    {
        public $floor;
        public $rooms;
        public Room $room;

        public function __construct($floor)
        {
            $this->floor = $floor;
            $this->rooms = $rooms;
            $this->room = $room;
        }

        public function addRoom(Room $rooms)
        {
            
        }

        public function getRoom()
        {
            return "Inhoud Kamers: " . $this->room;
        }

        public function getTotalVolume()
        { 
            return "Volume Totaal = " . $this->volume;
        }
    }



?>