<?php

namespace App\Card;

class CardJokers extends Card
{
    private $cardjokers = [
        'J♠',
        'J♥',
        'J♦',
        'J♣',
    ];

    public function __construct()
    {
        parent::__construct();
    }

    public function jokers($joker)
    {
        array_push($joker, 'J♠', 'J♥', 'J♦','J♣');
        $this->value = $joker;
        return $this->value;
    }

//     public function getAsString(): string
//     {
//         return $this->representation[$this->value - 1];
//     }
 }