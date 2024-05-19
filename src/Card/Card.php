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
    /** @return array<mixed> */
    public function deck(): array
    {
        $values = array('A','2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K');
        $suits  = array('♠', '♥', '♦', '♣');
        $deck = array();
        $deckArray = array();

        foreach ($suits as $suit) {
            foreach ($values as $value) {
                $deck[] = $value . $suit;
            }
        };

        $deckKeys = array_keys($deck);

        foreach ($deckKeys as $deckKey) {
            $deckArray[ $deckKey ] = $deck[ $deckKey ];
        }

        $this->carddeck = $deckArray;
        return $this->carddeck;
    }
    /** @return array<mixed> */
    public function shuffleCards(): array
    {
        $values = array('A','2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K');
        $suits  = array('♠', '♥', '♦', '♣');
        $deck = array();
        $shuffledArray = array();

        foreach ($suits as $suit) {
            foreach ($values as $value) {
                $deck[] = $value . $suit;
            }
        };

        $deckKeys = array_keys($deck);
        shuffle($deckKeys);
        foreach ($deckKeys as $deckKey) {
            $shuffledArray[ $deckKey ] = $deck[ $deckKey ];
        }

        $this->carddeck = $shuffledArray;
        return $this->carddeck;
    }
    /** @return array<mixed> */
    public function apiDeck(): array
    {
        $values = array('A','2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K');
        $suits  = array('S', 'H', 'D', 'C');
        $deck = array();
        $deckArray = array();

        foreach ($suits as $suit) {
            foreach ($values as $value) {
                $deck[] = $value . $suit;
            }
        };

        $deckKeys = array_keys($deck);

        foreach ($deckKeys as $deckKey) {
            $deckArray[ $deckKey ] = $deck[ $deckKey ];
        }

        $this->carddeck = $deckArray;
        return $this->carddeck;
    }
    /** @return array<mixed> */
    public function apiShuffleCards()
    {
        $values = array('A','2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', );
        $suits  = array('S', 'H', 'D', 'C');
        $deck = array();
        $shuffledArray = array();

        foreach ($suits as $suit) {
            foreach ($values as $value) {
                $deck[] = $value . $suit;
            }
        };

        $deckKeys = array_keys($deck);
        shuffle($deckKeys);
        foreach ($deckKeys as $deckKey) {
            $shuffledArray[ $deckKey ] = $deck[ $deckKey ];
        }

        $this->carddeck = $shuffledArray;
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
