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
    #[Route("/test", name: "test_get", methods: ['GET'])]
    public function test(): Response
    {
        return $this->render('card/test.html.twig');
    }

    #[Route("/test", name: "test_post", methods: ['POST'])]
    public function testCallback(
        Request $request,
        SessionInterface $session
    ): Response
    {

        $num_cards = $request->request->get('num_cards');

        // $data = [
        // "card" => $session->set("card", 52),
        // ];
        $session->set("num_cards", $num_cards);

        $this->addFlash(
            'Sådär',
            'Nu är $num_cards initierad'
        );
        return $this->redirectToRoute('session');
    }

    #[Route("/session", name: "session", methods: ['GET'])]
    public function session(
        Request $request,
        SessionInterface $session
    ): Response
    {

        $num_cards = $session->get("num_cards");

        $data = [
            "num_cards" => $session->get("num_cards"),
        ];

        return $this->render('card/session.html.twig', $data);
    }

    #[Route("/session/delete", name: "session_delete_get", methods: ['GET'])]
    public function sessionDeleteGet(
        SessionInterface $session
    ): Response
    {
        session_destroy();

        return $this->redirectToRoute('session');
    } 


    #[Route("/session/delete", name: "session_delete_post", methods: ['POST'])]
    public function sessionDelete(
        SessionInterface $session
    ): Response
    {
        session_destroy();

        return $this->redirectToRoute('session_delete_flash');
    } 

    #[Route("/session/deleteflash", name: "session_delete_flash", methods: ['GET'])]
    public function sessionDeleteFlash(
        SessionInterface $session
    ): Response
    {
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

    #[Route("/card/deckinit", name: "init_deck")]
    public function init_deck(
        Request $request,
        SessionInterface $session
    ): Response
    {
        // $deck = new Card();
        $hand = array();

        // $session->set("deck", $deck);
        

        $this->addFlash(
            'Sådär',
            'Nu är kortleken initierad'
        );

        return $this->redirectToRoute('card');
    }

    #[Route("/card/deck", name: "deck", methods: ['GET'])]
    public function deck(
        Request $request,
        SessionInterface $session
    ): Response
    {
        $deck = new Card();

        $deckObject = $deck;
        
        $session->set('deck', $deck);
        // $_SESSION['deck'] = serialize($deck);
        $data = [
            "deck" => $deck->deck(),
        ];

        return $this->render('card/deck.html.twig', $data);
    }

    #[Route("/card/deck/shuffle", name: "shuffle", methods: ['GET'])]
    public function shuffle(
        Request $request,
        SessionInterface $session
    ): Response
    {
        $shuffle = $session->get('deck');
        
        // unserialize($shuffle);
        
        // // $shuffle2[] = unserialize($shuffle);
        // foreach($shuffle as $key=>$value) {
        //     $shuffle[] = $value;
        // };
        // shuffle($shuffle);
        // $shuffle->shuffle_cards($shuffle);
        $shuffle->shuffle_cards();

        // serialize($shuffle);
        // $_SESSION["deck"] = $shuffle;
        $session->set('deck', $shuffle);

        // $session->set("total_cards", $total_cards);

        $data = [
            // "deck" => $session->get("deck"),
            "deck" => $shuffle, //->shuffle_cards($deckshuffle), 
        ];

        return $this->render('card/shuffle.html.twig', $data);
    }

    #[Route("/card/deck/joker", name: "joker", methods: ['GET'])]
    public function addJoker(
        Request $request,
        SessionInterface $session
    ): Response
    {
        $deck[] = unserialize($session->get('deck'));
        $jokers = new CardJokers($deck);
        // $joker = array_merge([carddeck], $jokers);
        // $deckjokers = array_merge($deck, $jokers[cardjokers]);
        $session->set("jokers", serialize($jokers));

        $data = [
            "jokers" => $jokers->jokers($deck),
            // "deck" => $session->get("deck"), blir fel för att det inte är direkt länkat till arrayet.
            "deck" => unserialize($session->get('deck')),//->deck(),
            // "jokerdeck" => $jokerdeck,
        ];

        return $this->render('card/joker.html.twig', $data);
        // return $this->redirectToRoute('session');
    }

    #[Route("/card/deck/draw", name: "draw", methods: ['GET'])]
    public function draw(
        Request $request,
        SessionInterface $session
    ): Response
    {
        $hand = new CardHand;
        // if($session->has("hand")) {
        //     $hand = $session->get("hand");
        // } else {
        //     $hand = array();
        // }
        
        
        // $deckshuffle = $session->get('deckshuffle');//['value'];
        // $shuffle = $session->get("deck", []);
        $deck = $session->get('deck');

        $deckarray = $deck;

        // $decks = ['carddeck'];

        // $deckarray = array();
        // foreach ($deck[carddeck] as $value) {
        //     $deckarray[] = $value;
        // }

        // foreach ($value as $value) {
        //     $deckarray[] = $value;
        // }
        
        // $num_cards->getNumberCards();
        $hand->draw($deckarray);
        
        // $cut = array_slice($deck, 0, 1);

        // $session->set("deckshuffle", $deck);

        $handadd = $hand;
        // array_pop($deckarray);
        $session->set("hand", $handadd);
        // $session->set('jokers', $deck);

        $data = [
            "hand" =>  $hand->draw($deckarray),
            "shuffle" => $deck,
            "deck" => $session->get("deck"),
            "deckarray" => $deckarray,
            // "cut" => $cut,
        ];
        
        return $this->render('card/draw.html.twig', $data);
    }
    
}