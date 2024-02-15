<?php

/**
 * @package
 */

 class Movie extends Product
 {
    /**
     * @param $name
     * @param @price
     * @param $tax
     * @param @profit
     * @param $description
     */

     public function __construct($name, $price, $tax, $profit, $description)
     {
        parent::__construct($name, $price, $tax, $profit, $description);
        $this->setCategory();
     }


    /**
     * @param $quality
     */

     public function setQuality($quality)
     {
        $this->quality = $quality;
     }


     /**
      * @return string[]
      */

      public function getInfo(): array
      {
        return [$this->quality];
      }

      public function setCategory()
      {
        $this->category = 'Movie';
      }
 }

?>