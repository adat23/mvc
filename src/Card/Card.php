<?php

namespace App\Card;

class Card
{
    protected $value;

    public function __construct()
    {
        $this->value = null;
    }

    public function card(): string
    {
        // while ($value >= 52){ 
        //     for ($value = 1; $value <= 52; $value++) {
        //         echo "The card is: $value <br>";
        //     }
        // }
        
        // $this->value = count(1-52);

        $this->value = random_int(1, 52);

        return $this->value;


        // Card ska ju vara random... deck ska presentera alla möjligheter från card i ordning!
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