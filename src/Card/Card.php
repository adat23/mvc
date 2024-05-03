<?php

namespace App\Card;

class Card
{
    // protected $value;
    public $carddeck = [];

    public function __construct()
    {
        $this->carddeck = null;
    }

    public function deck(): array
    {    
        $values = array('2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A');
        $suits  = array('♠', '♥', '♦', '♣');
    
        $deck = array();
        foreach ($suits as $suit) {
            foreach ($values as $value) {
                $deck[] = $value . $suit;
            }
        };

        serialize($deck);
        $this->carddeck = $deck;
        return $this->carddeck;
    }

    public function shuffle_cards()
    {
        $values = array('2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A');
        $suits  = array('♠', '♥', '♦', '♣',);    

        $deck = array();
        foreach ($suits as $suit) {
            foreach ($values as $value) {
                $deck[] = $value . $suit;
            }
        };
        
        $shuffled_array = array();

        $deck_keys = array_keys($deck);
        shuffle($deck_keys);

        foreach ( $deck_keys AS $deck_key ) {
            $shuffled_array[ $deck_key ] = $deck[ $deck_key ];
        }
        serialize($shuffled_array);


        $this->carddeck = $shuffled_array;
        return $this->carddeck;
    }

    public function getValue(): int
    {
        return $this->carddeck;
    }

    public function getAsString(): string
    {

        return "[{$this->carddeck}]";
    }
}