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

        return $this->redirectToRoute('test_get');
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
        return $this->redirectToRoute('test_get');
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
        $deck = new Card();

        $session->set("deck", $deck);

        return $this->redirectToRoute('deck');
    }

    #[Route("/card/deck", name: "deck", methods: ['GET'])]
    public function deck(
        Request $request,
        SessionInterface $session
    ): Response
    {
        $deck = new Card();

        $session->set("deck", $deck);
        
        $cards = $session->get("deck");

        $deck = $session->get("deck");


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
        
        $deckshuffle = $session->get("deck");
        
        $deckshuffle->shuffle();
        
        $session->set("deckshuffle", $deckshuffle);
        // $session->set("total_cards", $total_cards);

        $data = [
            // "deck" => ($session->get("deck")),
            "deck" => $deckshuffle->shuffle(), 
            // $deck->shuffle(),
        ];

        return $this->render('card/shuffle.html.twig', $data);
    }

    #[Route("/card/deck/joker", name: "joker", methods: ['GET'])]
    public function addJoker(
        Request $request,
        SessionInterface $session
    ): Response
    {

        $jokers = new CardJokers();

        $joker = array();
        
        $deck = $session->get("deck");

        foreach ($deck as $value) {
            $joker[] = $value;
        }

        $jokers->jokers($joker);

        $session->set("jokers", $jokers);

        // $jokerdeck = array_merge($deck, $joker);

        // $session->set("jokerdeck", $jokerdeck);

        $data = [
            "jokers" => $jokers->jokers($joker),
            "deck" => $deck->deck(),
            // "jokerdeck" => $jokerdeck,
        ];

        return $this->render('card/joker.html.twig', $data);
        // return $this->redirectToRoute('session');
    }

    // #[Route("/card/deck/draw", name: "shuffle", methods: ['GET'])]
    // public function draw(
    //     Request $request,
    //     SessionInterface $session
    // ): Response
    // {

    // }
    
}