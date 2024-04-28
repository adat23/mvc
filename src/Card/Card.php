<?php

namespace App\Card;

class Card
{
    protected $value;
    protected $session;

    public function __construct()
    {
        $this->value = null;
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

        $this->value = $deck;
        return $this->value;
    }

    public function shuffle()
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
            $shuffled_array[  $deck_key  ] = $deck[  $deck_key  ];
        } 

        $this->value = $shuffled_array;
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