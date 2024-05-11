<?php

namespace App\Controller;

use App\Card\Card;
use App\Card\CardHand;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class CardGameJson extends AbstractController
{
    #[Route("/api/deck", name: "apideck", methods: ['GET'])]
    public function apiDeck(
        Request $request,
        SessionInterface $session
    ): Response {
        if($session->has('hand')) {
            $session->remove('hand');
        }
        $deck = new Card();

        $deck->api_deck();

        $session->set('deck', $deck);
        $session->set("cards_left", 52);

        $data = [
            "deck" => $deck->api_deck(),
        ];
        // return new JsonResponse($data);

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    #[Route("/api/deck/shuffle", name: "apishuffle", methods: ['GET'])]
    public function apiShuffle(
        Request $request,
        SessionInterface $session
    ): Response {
        if($session->has('hand')) {
            $session->remove('hand');
        }
        $shuffle = new Card();

        $shuffle->api_shuffle_cards();

        $session->set("cards_left", 52);
        $session->set('deck', $shuffle);

        $data = [
            "deck" => $shuffle,
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    #[Route("/api/deck/draw", name: "apidraw", methods: ['GET'])]
    public function apiDraw(
        Request $request,
        SessionInterface $session
    ): Response {
        if($session->has('cards_left')) {
            $cards_left = $session->get('cards_left');
        }
        $hand = new CardHand();
        $deck = $session->get('deck');

        $hand->draw($deck);

        if($session->has('hand')) {
            $oldhand = $session->get('hand');
        } else {
            $oldhand = $hand;
        }
        $deckrem = $hand;
        // ----------------
        $deckforremoval = array();
        foreach($deck as $value) {
            $deckforremoval[] = $value;
        }

        foreach($deckrem->draw($deck) as $value) {
            $rem[] = $value;
        }

        if (($key = array_search($rem[0], $deckforremoval[0])) !== false) {
            unset($deckforremoval[0][$key]);
        }
        //------------------
        $newhand = $rem;

        if($oldhand != $hand) {
            $newhand = $newhand + $oldhand;
            array_push($newhand, $oldhand[0]);
        }
        ksort($newhand);
        $num_cards = count($deckforremoval[0]);

        $session->set("cards_left", $num_cards);
        $session->set("hand", $newhand);
        $session->set("deck", $deckforremoval);

        $data = [
            "Cards_left" => $num_cards,
            "Hand" => $newhand,
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

    #[Route("/api/deck/draw/{num<\d+>}", name: "apidrawmany", methods: ['GET'])]
    public function api_Draw_Many(
        int $num,
        Request $request,
        SessionInterface $session
    ): Response {
        if($session->has('cards_left')) {
            $cards_left = $session->get('cards_left');
        }
        if ($num > $cards_left) {
            throw new \Exception("Du har inte så många kort kvar!");
        }
        $hand = new CardHand();

        $deck = $session->get('deck');

        for($i = 1; $i <= $num; $i++) {
            $hand->draw($deck);

            if($session->has('hand')) {
                $oldhand = $session->get('hand');
            } else {
                $oldhand[] = $hand;
            }
            $deckforremoval = array();
            foreach($deck as $value) {
                $deckforremoval[] = $value;
            }

            $rem = array();
            foreach($hand->draw($deck) as $value) {
                $rem[] = $value;
            }

            $newhand = $rem;

            if (($key = array_search($rem[0], $deckforremoval[0])) !== false) {
                unset($deckforremoval[0][$key]);
            }

            $newhand = $newhand + $oldhand;
            array_push($newhand, $oldhand[0]);

            $oldhand = $newhand;
            if (array_key_exists(0, $deck)) {
                $deckdiff = array_diff($deck[0], $newhand);
            } else {
                $deckdiff = array_diff($deck, $newhand);
            }
            $newdeck[0] = $deckdiff;

            $session->set("hand", $newhand);
            $deck = $deckforremoval;
            ksort($newhand);
        }

        $num_cards = count($deckforremoval[0]);
        $session->set("cards_left", $num_cards);

        $session->set("deck", $deckforremoval);
        $data = [
            "Cards_left" => $num_cards,
            "Hand" => $newhand,
            // "deckforremoval" => $deckforremoval[0],
            // "hand" => $hand,
            // "oldhand" => $oldhand,
            // "deck" => $deck,
            // "newdeck" => $newdeck,
            // "rem" => $rem,
            // "num" => $num,
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;
    }

}
