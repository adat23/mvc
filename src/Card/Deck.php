<?php

namespace App\Card;

use App\Card\Card;

class Deck
{
    private $deck = [];

    public function add(Card $card): void
    {
        $this->deck[] = $card;
    }

    public function shuffle(): void
    {
        foreach ($this->deck as $card) {
            $card->shuffle();
        }
    }

    public function getValues(): array
    {
        $values = [];
        foreach ($this->deck as $card) {
            $values[] = $card->getValue();
        }
        return $values;
    }

    public function getString(): array
    {
        $values = [];
        foreach ($this->deck as $card) {
            $values[] = $card->getAsString();
        }
        return $values;
    }
}