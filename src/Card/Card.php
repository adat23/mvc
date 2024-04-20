<?php

namespace App\Card;

class Card
{
    protected $value;

    public function __construct()
    {
        $this->value = null;
    }

    public function deck(): string
    {    
        // $values = array('2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A');
        // $suits  = array('S', 'H', 'D', 'C');
        
        // $deckArray = array();
        // foreach ($suits as $suit) {
        //     foreach ($values as $value) {
        //         $deckArray[] = $suit . $value;
        //     }
        // }

        // $deck = join(", ", $deckArray);

        // foreach ($deckArray as $element) {
        //     $deck .= $element . ", ";
        // }
        // $deck = rtrim($deck, ", ");

        // $session->set("deck", $deck);

        // return $deck;

        return $this->value;
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