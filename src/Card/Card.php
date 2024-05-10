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
        $values = array('A','2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K');
        $suits  = array('♠', '♥', '♦', '♣');
        $deck = array();
        $deck_array = array();

        foreach ($suits as $suit) {
            foreach ($values as $value) {
                $deck[] = $value . $suit;
            }
        };

        $deck_keys = array_keys($deck);
        
        foreach ( $deck_keys AS $deck_key ) {
            $deck_array[ $deck_key ] = $deck[ $deck_key ];
        }

        $this->carddeck = $deck_array;
        return $this->carddeck;
    }

    public function shuffle_cards()
    {
        $values = array('A','2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', );
        $suits  = array('♠', '♥', '♦', '♣',);    
        $deck = array();
        $shuffled_array = array();

        foreach ($suits as $suit) {
            foreach ($values as $value) {
                $deck[] = $value . $suit;
            }
        };

        $deck_keys = array_keys($deck);
        shuffle($deck_keys);
        foreach ( $deck_keys AS $deck_key ) {
            $shuffled_array[ $deck_key ] = $deck[ $deck_key ];
        }

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