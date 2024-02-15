<?php

/**
 * @package Products
 */

 class Music extends Product
 {
    private string $arist;
    private array $numbers = [];


    /**
     * @param $name
     * @param $price
     * @param $tax
     * @param $profit
     * @param $description
     */

     public function __construct($name, $price, $tax, $profit, $description)
     {
        parent::__construct($name, $price, $tax, $profit, $description);
        $this->setCategory();
     }


     /**
      * @param $artist
      */

      public function setArtist($artist)
      {
        $this->artist = $artist;
      }


      /**
       * @param $number
       */

       public function addNumber($number)
       {
        $this->numbers[] = $number;
       }


       /**
        * @return array
        */

        public function getInfo(): array
        {
            return [$this->artist, $this->numbers];
        }

        public function setCategory()
        {
            $this->category = 'Music';
        }
 }









?>