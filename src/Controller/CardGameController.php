<?php

namespace App\Controller;

use App\Card\Card;
use App\Card\CardJokers;
use App\Card\CardHand;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class CardGameController extends AbstractController
{
    #[Route("/session", name: "session", methods: ['GET'])]
    public function session(
        SessionInterface $session
    ): Response {

        $data = [
            "num_cards" => $session->get("num_cards"),
        ];

        return $this->render('card/session.html.twig', $data);
    }

    // #[Route("/session/delete", name: "session_delete_get", methods: ['GET'])]
    // public function sessionDeleteGet(
    //     SessionInterface $session
    // ): Response {
    //     session_destroy();

    //     return $this->redirectToRoute('session');
    // }


    #[Route("/session/delete", name: "session_delete_post", methods: ['POST'])]
    public function sessionDelete(): Response {
        session_destroy();

        return $this->redirectToRoute('session_delete_flash');
    }

    #[Route("/session/deleteflash", name: "session_delete_flash", methods: ['GET'])]
    public function sessionDeleteFlash(): Response {
        $this->addFlash(
            'Sådär',
            'Nu är sessionen raderad'
        );
        return $this->redirectToRoute('session');
    }

    #[Route('/card', name: "card")]
    public function home(): Response
    {
        return $this->render('card.html.twig');
    }

    // #[Route("/card/deckinit", name: "init_deck")]
    // public function init_deck(
    //     Request $request,
    //     SessionInterface $session
    // ): Response {
    //     if($session->has('hand')) {
    //         $session->remove('hand');
    //     }
    //     $deck = new Card();

    //     $deck->deck();
       
    //     $session->set('deck', serialize($deck));
    //     $session->set("cards_left", 52);


    //     $this->addFlash(
    //         'Nu är sessionen initierad',
    //         'Nu är sessionen initierad, detta fungerar även via blanda eller sortera kortleken'
    //     );

    //     return $this->redirectToRoute('card');
    // }

    #[Route("/card/deck", name: "deck", methods: ['GET'])]
    public function deck(
        SessionInterface $session
    ): Response {
        if($session->has('hand')) {
            $session->remove('hand');
        }
        $deck = new Card();

        $deck->deck();
       
        $session->set('deck', serialize($deck));
        $session->set("cards_left", 52);
        // $deck = unserialize($session->get('deck'));

        $data = [
            "deck" => unserialize($session->get('deck')),
        ];

        return $this->render('card/deck.html.twig', $data);
    }

    #[Route("/card/deck/shuffle", name: "shuffle", methods: ['GET'])]
    public function shuffle(
        SessionInterface $session
    ): Response {
        if($session->has('hand')) {
            $session->remove('hand');
        }

        $shuffle = new Card();

        $shuffle->shuffleCards();

        $session->set("cards_left", 52);
        $session->set('deck', serialize($shuffle));

        $data = [
            "deck" => $shuffle,
        ];

        return $this->render('card/shuffle.html.twig', $data);
    }

    #[Route("/card/deck/joker", name: "joker", methods: ['GET'])]
    public function addJoker(
        SessionInterface $session
    ): Response {
        $deck = array();
        $deck[] = unserialize($session->get('deck'));
        $jokers = new CardJokers();

        $jokers->jokers();

        $session->set("jokers", serialize($jokers));

        $data = [
            "jokers" => $jokers->jokers(),
            "deck" => unserialize($session->get('deck')),//->deck(),
        ];

        return $this->render('card/joker.html.twig', $data);
    }

    #[Route("/card/deck/draw", name: "draw", methods: ['GET'])]
    public function draw(
        SessionInterface $session
    ): Response {
        $hand = new CardHand();
        $deck = unserialize($session->get('deck'));

        $hand->draw($deck);

        $oldhand = $hand;
        if($session->has('hand')) {
            $oldhand = unserialize($session->get('hand'));
        } 

        $deckrem = $hand;
        // ----------------
        $deckforremoval = array();
        foreach($deck as $value) {
            $deckforremoval[] = $value;
        }

        $rem = array();
        foreach($deckrem->draw($deck) as $value) {
            $rem[] = $value;
        }

        $key = array_search($rem[0], $deckforremoval[0]);
        if (($key) !== false) {
            unset($deckforremoval[0][$key]);
        }
        //------------------
        $newhand = $rem;

        if($oldhand != $hand) {
            $newhand = $newhand + $oldhand;
            array_push($newhand, $oldhand[0]);
        }
        ksort($newhand);
        $numCards = count($deckforremoval[0]);

        $session->set("cards_left", $numCards);
        $session->set("hand", serialize($newhand));
        $session->set("deck", serialize($deckforremoval));

        $data = [
            "num_cards" => $numCards,
            "newhand" => $newhand,
        ];

        return $this->render('card/draw.html.twig', $data);
    }

    #[Route("/card/deck/draw/{num<\d+>}", name: "draw_many")]
    public function drawMany(
        int $num,
        SessionInterface $session
    ): Response {
        $cardsleft = 52;
        if($session->has('cards_left')) {
            $cardsLeft = $session->get('cards_left');
        }
        if ($num > $cardsLeft) {
            throw new \Exception("Du har inte så många kort kvar!");
        }
        $hand = new CardHand();

        $deck = unserialize($session->get('deck'));

        for($i = 1; $i <= $num; $i++) {
            $hand->draw($deck);
            $oldhand = $hand;

            if($session->has('hand')) {
                $oldhand = unserialize($session->get('hand'));
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
            $key = array_search($rem[0], $deckforremoval[0]);

            if (($key) !== false) {
                unset($deckforremoval[0][$key]);
            }

            $newhand = $newhand + $oldhand;
            array_push($newhand, $oldhand[0]);

            $oldhand = $newhand;
            $deckdiff = array();
            if (array_key_exists(0, $deck)) {
                $deckdiff = array_diff($deck[0], $newhand);
            } else {
                $deckdiff = array_diff($deck, $newhand);
            }
            // $newdeck[0] = $deckdiff;

            $session->set("hand", serialize($newhand));
            $deck = $deckforremoval;
            ksort($newhand);
        }

        $numCards = count($deckforremoval[0]);
        $session->set("cards_left", $numCards);

        $session->set("deck", serialize($deckforremoval));
        $data = [
            "num_cards" => $numCards,
            "newhand" => $newhand,
            "deckforremoval" => $deckforremoval[0],
            "hand" => $hand,
            "oldhand" => $oldhand,
            "deck" => $deck,
            "rem" => $rem,
            "num" => $num,
        ];

        return $this->render('card/draw_many.html.twig', $data);
    }

}
