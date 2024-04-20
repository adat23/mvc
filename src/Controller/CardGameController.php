<?php

namespace App\Controller;

use App\Card\Card;
use App\Card\Deck;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;


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
            'nu är denna sessionen initierad'
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

        return $this->redirectToRoute('test_get');
    } 


    #[Route("/session/delete", name: "session_delete_post", methods: ['POST'])]
    public function sessionDelete(
        SessionInterface $session
    ): Response
    {
        session_destroy();

        $this->addFlash(
            'Sådär',
            'nu är sessionen raderad'
        );
        return $this->redirectToRoute('test_get');
    } 

    #[Route('/card', name: "card")]
    public function home(): Response
    {
        return $this->render('card.html.twig');
    }

    #[Route("/card/deck", name: "deck", methods: ['GET'])]
    public function deck(
        Request $request,
        SessionInterface $session
    ): Response
    {

        // $deck = new Card();

        // $deck = array('2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A');

        $values = array('2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K', 'A');
        $suits  = array('S', 'H', 'D', 'C');
        
        $deck = array();
        foreach ($suits as $suit) {
            foreach ($values as $value) {
                $deck[] = $suit . $value;
            }
        }

        $session->set("deck", $deck);
        
        $data = [
            "deck" => $deck,
            // ->deck(),
            // "deckstring" => $deck->getAsString(),
        ];

        return $this->render('card/deck.html.twig', $data);
    }  



// TIDIGARE TESTER

       // #[Route("/card/deck", name: "deck")]
    // public function presentCard(): Response
    // {
        
        // Tag bort allt och börja med session istället och skapa kortleken där istället..
        // $card = new Card();


        // while($card <= 52){
        // $card++;
        // };
        
        // $data = [
        //     "card" => $card->card(),
        //     "cardString" => $card->getAsString(),
        // ];
        // $card = new Card();

        // for ($i = 1; $i <= 52; $i++) {
        //     $card = $i;
        //     echo $i;
        // };

        // $deck = [];
        // for ($i = 1; $i <= 52; $i++) {
        //     $card = new Card();
        //     $card->card();
        //     $deck[] = $card->getAsString();

        // }

        // $data = [
        //     "card" => $card->shuffle(52),
        //     "cardString" => $deck,
        // ];


    //     return $this->render('card/deck.html.twig', $data);
    // }


    // #[Route("/card/deck", name: "deck")]
    // public function PresentDeck(): Response
    // {
    //     // $deck = new Card();
    //     // $data = [
    //     //     "deck" => $deck->deck(),
    //     //     "deckString" => $deck->getAsString(),
    //     // ];

    //     $deckString = [];
    //     for ($i = 1; $i <= 52; $i++) {
    //         $deck = new Card();
    //         $deck->deck();
    //         $deckString[] = $deck->getAsString();
    //     }
    //     $data = [
    //         "deck" => count($deckString),
    //         "deckString" => $deckString,
    //     ];

    //     return $this->render('card/deck.html.twig', $data);
    // }

}