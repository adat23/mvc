<?php

namespace App\Card;

class CardJokers extends Card
{
    private $cardjokers = [
        'Jo♠',
        'Jo♥',
        'Jo♦',
        'Jo♣',
    ];

    public function __construct()
    {
        parent::__construct();
    }

    public function jokers($joker)
    {
        array_push($joker, 'Jo♠', 'Jo♥', 'Jo♦','Jo♣');
        $this->value = $joker;
        return $this->value;
    }

//     public function getAsString(): string
//     {
//         return $this->representation[$this->value - 1];
//     }
 }