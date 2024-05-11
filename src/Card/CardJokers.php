<?php

namespace App\Card;

class CardJokers extends Card
{
    public $cardjokers = [
        'Jo♠',
        'Jo♥',
        'Jo♦',
        'Jo♣',
    ];

    public function __construct()
    {
        parent::__construct();
    }

    public function jokers()
    {
        // array_push($deck, 'Jo♠', 'Jo♥', 'Jo♦','Jo♣');
        $this->cardjokers;// = $deck;
        return $this->cardjokers;
    }

    //     public function getAsString(): string
    //     {
    //         return $this->representation[$this->value - 1];
    //     }
}
