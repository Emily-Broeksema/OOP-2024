<?php

/**
 * @package Products
 */

 class PruductList
 {
    private array $items = [];

    /**
     * @param $product
     */

     public function addProduct($product)
     {
        $this->items[] = $product;
     }


     /**
      * @return array
      */

      public function getProducts(): array
      {
        return $this->items;
      }
 }





?>