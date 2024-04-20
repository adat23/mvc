<?php

namespace App\Card;

class Card
{
    protected $value;

    public $deck = array('2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A'); 

    public function __construct()
    {
        $this->value = null;
    }

    public function deck(): array
    {
        
        // for ($i = 1; $i <= 52; $i++) {
        //     $session->set("deck", $i);
            
        // }

        $values = array('2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A');
        $suits  = array('S', 'H', 'D', 'C');
        
        $cards = array();
        foreach ($suits as $suit) {
            foreach ($values as $value) {
                $cards[] = $value . $suit;
            }
        }
        
        return $cards;
  

        // return $this->value;
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