<?php

namespace App\Card;

class Card
{
    protected $value;

    public function __construct()
    {
        $this->value = null;
    }

    public function card()
    {
        
        for ($i = 1; $i <= 52; $i++) {
            echo "The card is: $i <br>";
            
        }
        return $this->value;
        // $this->value = count(1-52);

        // $this->value = random_int(1, 52);

        // for($i = 1; $i <= 52; $i++) {
        //     $value = $i;
        // }
        // $i = range(1, 52);
        // $value = implode(", ", $i);
        
        
        
    }

    public function shuffle(): int
    {
        $this->value = random_int(1, 52);
        return $this->value;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function getAsString(): string
    {
        return "[{$this->value}]";
    }
}