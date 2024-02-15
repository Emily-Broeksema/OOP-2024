<?php

    /**
     * @package 
     */

     abstract class Product
     {
        private string $name;
        private float $purchasePrice;
        private int $tax;
        private string $description;
        private float $profit;
        protected string $category;

        /**
         * @param $name
         * @param $price
         * @param $tax
         * @param $profit
         * @param $description
         */

         public function __construct($name, $price, $tax, $profit, $description)
         {
            $this->name = $name;
            $this->purchasePrice = $price;
            $this->tax = $tax;
            $this->profit = $profit;
            $this->description = $description;
         }

         /**
          * @return string
          */

          public function getName(): string
          {
            return $this->name;
          }


          /**
           * @return string
           */

           public function getCategory(): string
           {
            return $this->category;
           }


           /**
            * @return float
            */

            public function getSalesprice(): float
            {
                return round($this->purchasePrice + $this->profit + (($this->tax/100) * ($this->purchasePrice + $this->profit)), 2);
            }

            /**
             * @return string
             */

             public function printInfo(): string
             {
                $print = '<ul>';
                foreach($this->getInfo() as $item)
                {
                    if(is_array($item))
                    {
                        $print .= '<li>Extra info<ul>';
                        foreach($item as $subitem)
                        {
                            $print .= "<li>$subitem</li>";
                        }
                        $print .='</ul></li>';
                    }

                    else
                    {
                        $print .="<li>$item</li>";
                    }
                }
                $print .= '</ul>';
                return $print;
             }

             abstract public function getInfo();
             abstract public function setCategory();
     }




?>