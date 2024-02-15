<?php


class Game extends Product
{
    /**
     * @var string
     */
   private string $genre;


   /**
    * @var array 
    */
    private array $requirements = [];


    /**
     * @param string 
     * @param float
     * @param float
     * @param float
     * @param float
     * @param string
     */

     public function __construct(string $name, float $price, float $tax, float $profit, string $description)
     {
        parent::__construct($name, $price, $tax, $profit, $description);
        $this->setCategory();
     }


     /**
      * @param string
      */

      public function setGenre(string $genre): void
      {
        $this->genre = $genre;
      }


      /**
       * @param string
       */
    
       public function getInfo(): array
       {
        return 
        [
            'genre' => $this->genre,
            'requirements' => $this->requirements
        ];
       }


    public function setCategory(): void
    {
        $this->category = 'Game';
    }
    
}








?>