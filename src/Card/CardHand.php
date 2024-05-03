<?php

namespace App\Card;

use App\Card\Card;

class CardHand
{
    private $hand = [];

    public function add(Card $deck): void
    {
        $this->hand[] = $deck;
    }

    public function draw($deck)
    {

        // $deck = unserialize($deck);

        $deckarray = array();

        foreach( $deck as $value) {
            $deckarray[] = $value;
        }
                
        $cut = array_splice($deckarray[0], 0, 1);

        $hand = $cut;

        $this->hand = $hand;
        return $this->hand;

        // foreach ($this->hand as $card) {
        //     $card->draw();
        // }
    }

    public function getNumberCards(): int
    {
        return count($this->hand);
    }

    public function getValues(): array
    {
        $values = [];
        foreach ($this->hand as $card) {
            $values[] = $card->getValue();
        }
        return $values;
    }

    public function getString(): array
    {
        $values = [];
        foreach ($this->hand as $card) {
            $values[] = $card->getAsString();
        }
        return $values;
    }
}